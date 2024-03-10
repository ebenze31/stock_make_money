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

<div class="row row-cols-1 row-cols-md-1 row-cols-lg-3 row-cols-xl-3">
    <div class="col mt-2 mb-2">
        <div class="card main-shadow main-radius">
            <img src="{{ asset('/theme_cms/images/logo/logo long.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h4 class="card-title gold_color_text bold-gold">
                    Card title
                </h4>
                <h6 class="card-title gold_color_text">
                    <b>หมวดหมู่</b>
                </h6>
                <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the card's content.
                </p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <span class="float-start">รายรับ</span>
                    <span class="float-end">350000</span>
                </li>
                <li class="list-group-item">
                    <span class="float-start">รายจ่าย</span>
                    <span class="float-end">350000</span>
                </li>
                <li class="list-group-item">
                    <span class="float-start">รวม</span>
                    <span class="float-end">+0</span>
                </li>
            </ul>
            <div class="card-body mt-3" style="position: relative;">
                <div style="position: absolute; bottom: 7px;width: 100%;right: 0px;">
                    <div>
                        <center>
                            <button type="button" class="btn btn-sm gradient-button gold_color_text bold-gold" style="width:60%;">
                                <i class="fa-sharp fa-solid fa-eye"></i> ดูข้อมูล
                            </button>
                            <button type="button" class="btn btn-sm btn-warning" style="width:20%;">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col mt-2 mb-2">
        <div class="card main-shadow main-radius">
            <img src="{{ asset('/theme_cms/images/logo/logo png.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <span class="float-start">รายรับ</span>
                    <span class="float-end">350000</span>
                </li>
                <li class="list-group-item">
                    <span class="float-start">รายจ่าย</span>
                    <span class="float-end">350000</span>
                </li>
                <li class="list-group-item">
                    <span class="float-start">รวม</span>
                    <span class="float-end">+0</span>
                </li>
            </ul>
            <div class="card-body mt-3" style="position: relative;">
                <div style="position: absolute; bottom: 7px;width: 100%;right: 0px;">
                    <div>
                        <center>
                            <button type="button" class="btn btn-sm gradient-button gold_color_text bold-gold" style="width:60%;">
                                <i class="fa-sharp fa-solid fa-eye"></i> ดูข้อมูล
                            </button>
                            <button type="button" class="btn btn-sm btn-warning" style="width:20%;">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col mt-2 mb-2">
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
    </div>
</div>
@endsection
