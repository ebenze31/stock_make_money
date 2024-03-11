@extends('layouts.theme_home')

@section('content')

<style>
.card {
    height: 100%; /* กำหนดความสูงเป็น 100% ให้แต่ละ card */
    display: flex;
    flex-direction: column; /* จัดเรียงเนื้อหาเป็นแนวตั้ง */
}

.card-body {
    flex-grow: 1; /* ทำให้เนื้อหาของ card ขยายเต็มพื้นที่ */
}

.card-img-top {
    object-fit: contain; /* ให้รูปภาพ fit กับพื้นที่ที่กำหนด */
    height: 200px; /* กำหนดความสูงของรูปภาพ */
}

</style>

<h3 class="mb-0 gold_color_text bold-gold">กิจการของคุณ</h3>
<span class="text-danger">คุณสามารถเพิ่มกิจการสูงสุดได้ 3 กิจการ</span>
<hr>

<div id="div_content" class="row row-cols-1 row-cols-md-1 row-cols-lg-3 row-cols-xl-3">
    <!-- Content -->
</div>

<script>
    
    document.addEventListener('DOMContentLoaded', (event) => {
        // console.log("START");
        get_data_your_business();
    });

    function get_data_your_business(){

        fetch("{{ url('/') }}/api/get_data_your_business" + "/" + "{{ Auth::user()->id }}")
            .then(response => response.json())
            .then(result => {
                // console.log(result);
                
                if(result){
                    let div_content = document.querySelector('#div_content');
                        div_content.innerHTML = '';

                    for (let i = 0; i < 3; i++) {

                        let html = ``;

                        if(result[i]){
                            // console.log("มี");
                            let photo = `{{ asset('/theme_cms/images/icons/partners.png') }}`;
                            if(result[i].photo){
                                photo = `{{ url('storage')}}/`+result[i].photo;
                            }

                            let detail = `-`;
                            if(result[i].detail){
                                detail = result[i].detail;
                            }

                            let income = `-`;
                            if(result[i].income){
                                income = result[i].income.toLocaleString() + ` บาท`;
                            }

                            let expenses = `-`;
                            if(result[i].expenses){
                                expenses = result[i].expenses.toLocaleString() + ` บาท`;
                            }

                            let total_cost = `-`;
                            let class_total_cost = ``;
                            if(income && expenses){
                                let sum_total_cost = parseInt(result[i].income - result[i].expenses) ;
                                total_cost = sum_total_cost.toLocaleString() + ` บาท`;

                                if(sum_total_cost > 0){
                                    class_total_cost = `text-success`;
                                }else if(sum_total_cost < 0){
                                    class_total_cost = `text-danger`;
                                }else if(sum_total_cost == 0){
                                    class_total_cost = `text-dark`;
                                }
                            }

                            html = `
                                <div class="col mt-2 mb-2">
                                    <div class="card main-shadow main-radius">
                                        <img src="`+photo+`" class="card-img-top py-2" alt="...">
                                        <div class="card-body">
                                            <h4 class="card-title gold_color_text bold-gold">
                                                `+result[i].name+`
                                            </h4>
                                            <h6 class="card-title">
                                                <b>หมวดหมู่ : `+result[i].category+`</b>
                                            </h6>
                                            <span><b>(`+result[i].sub_category+`)</b></span>
                                            <p class="card-text mt-3">
                                                `+detail+`
                                            </p>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <span class="float-start">รายรับ</span>
                                                <span class="float-end">`+income+`</span>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="float-start">รายจ่าย</span>
                                                <span class="float-end">`+expenses+`</span>
                                            </li>
                                            <li class="list-group-item" style="font-size:18px;">
                                                <span class="float-start"><b>รวม</b></span>
                                                <span class="float-end `+class_total_cost+`"><b>`+total_cost+`</b></span>
                                            </li>
                                        </ul>
                                        <div class="card-body mt-3" style="position: relative;">
                                            <div style="position: absolute; bottom: 7px;width: 100%;right: 0px;">
                                                <div>
                                                    <center>
                                                        <button type="button" class="btn btn-sm gradient-button gold_color_text bold-gold" style="width:60%;">
                                                            <i class="fa-sharp fa-solid fa-eye"></i> ดูข้อมูล
                                                        </button>
                                                        <a href="{{ url('/business/`+result[i].id+`/edit') }}" type="button" class="btn btn-sm btn-warning" style="width:20%;">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </a>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            `;
                        }
                        else{
                            // console.log("ไม่มี");
                            html = `
                                <div class="col mt-2 mb-2">
                                    <a href="{{ url('/business_create') }}">
                                    <div class="card main-shadow main-radius radius-10 gradient-button">
                                        <div class="card-body d-flex align-items-center justify-content-center">
                                            <div class="">
                                                <img src="{{ asset('/theme_cms/images/icons/report.png') }}" class="card-img-top">
                                                <br><br>
                                                <h4 class="mx-1 text-white mt-4">
                                                    <i class="fa-solid fa-plus"></i> เพิ่มกิจการของคุณ
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            `;
                        }

                        div_content.insertAdjacentHTML('beforeend', html); // แทรกบนสุด

                    }
                }
                
            });

    }

</script>
@endsection
