<style>
    .cropper-container{
        margin-top: 10px;
    }.container_upload_preview{
      position: relative;
      width: 100%;
      height: 250px;
      border-radius: 10px; 
        -moz-border-radius:10px;
        -khtml-border-radius:10px;
    }.container_upload{
      background-color: #bcbcbc;
      width: 100%;
      height: 250px;
      border-radius: 10px; 
        -moz-border-radius:10px;
        -khtml-border-radius:10px;
      position: relative;
      overflow: hidden;
    }
    .container_upload img{
   object-fit: contain;

    }
    
    .upload_section{
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: #fff;
      font-size: 22px;
      display: flex;
      justify-content: center;
    }

    .card-img-top {
        object-fit: contain; /* ให้รูปภาพ fit กับพื้นที่ที่กำหนด */
        height: 200px; /* กำหนดความสูงของรูปภาพ */
    }
</style>

<div class="card border-top border-0 border-5 border-dark">
    <div class="card-body p-4">
        <div class="card-title d-flex align-items-center">
            <div>
                <img src="{{ asset('/theme_cms/images/icons/report.png') }}" class="" style="width: 50px;">
            </div>
            <h5 class="mb-0 mx-3 gold_color_text bold-gold">
                เพิ่มข้อมูลกิจการของคุณ
            </h5>
        </div>
        <hr>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="row">
                    <div class="form-group col-12 mb-3 mt-3">
                        <label for="name" class="control-label">ชื่อกิจการ</label>
                        <span class="text-danger">*</span>
                        <input class="form-control" name="name" type="text" id="name" value="{{ isset($business->name) ? $business->name : ''}}" required>
                    </div>
                    <div class="form-group  col-12 mb-3">
                        <label for="detail" class="control-label">รายละเอียด</label>
                        <textarea class="form-control" rows="5" name="detail" type="textarea" id="detail" >{{ isset($business->detail) ? $business->detail : ''}}</textarea>
                    </div>
                    <div class="col-6 mb-3">
                        <label for="category" class="control-label">ประเภทกิจการ</label>
                        <span class="text-danger">*</span>
                        <select name="category" id="category" class="form-control" required onchange="show_business_sub_category();">
                                <option value="{{ isset($business->category) ? $business->category : 'เลือกประเภทกิจการ'}}" selected >{{ isset($business->category) ? $business->category : 'เลือกประเภทกิจการ'}}</option> 
                        </select>
                    </div>
                    <div class="col-6 mb-3">
                        <label for="sub_category" class="control-label">ประเภทย่อย</label>
                        <span class="text-danger">*</span>
                        <select name="sub_category" id="sub_category" class="form-control" required>
                                <option value="{{ isset($business->sub_category) ? $business->sub_category : 'เลือกประเภทย่อย'}}" selected >{{ isset($business->sub_category) ? $business->sub_category : 'เลือกประเภทย่อย'}}</option> 
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group  col-12 mt-3">
                    <label for="photo" class="control-label">รูปภาพ</label>
                    <input class="form-control d-none" name="photo" type="file" id="photo" value="" accept="image/*" onchange="previewImage(this)">
                  
                    @if( !empty($business->photo) )
                        <div id="container_photo" class="container_upload_preview">
                            <label for="photo" class="btn btn-success" style="top: 10px; right: 10px;position: absolute; z-index: 999999999999999999;">เลือกใหม่</label>
                            <img id="preview_photo" src="{{ url('storage')}}/{{ $business->photo }}" alt="ภาพพรีวิว" class="mt-5 card-img-top py-2">
                        </div>  
                    @else
                        <label id="upload_photo" for="photo" class="container_upload">
                            <div class="upload_section">
                                <div class="text-center">
                                    <i class="fa-solid fa-cloud-arrow-up"></i>
                                    <p>Upload img</p>
                                </div>
                            </div>
                        </label>
                    
                        <div id="container_photo" class="container_upload_preview d-none">
                            <label for="photo" class="btn btn-success" style="top: 10px; right: 10px;position: absolute; z-index: 999999999999999999;">เลือกใหม่</label>
                            <img id="preview_photo" src="" alt="ภาพพรีวิว" class="mt-5 d-none card-img-top py-2">
                        </div>  
                    @endif
                </div>
            </div>
            <div class="form-group col-12 d-none">
                <label for="host" class="control-label">User Id</label>
                <input class="form-control" name="host" type="text" id="host" value="{{ Auth::user()->id }}" readonly>
                <label for="status" class="control-label">Status</label>
                <input class="form-control" name="status" type="text" id="status" value="Active" readonly>
            </div>
        </div>

        <div class="form-group mt-5">
            <input class="btn gradient-button px-5 float-end " type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
        </div>

    </div>
</div>

<script>

    document.addEventListener('DOMContentLoaded', (event) => {
        // console.log("START");
        show_business_category();
    });

    function show_business_category(){
        fetch("{{ url('/') }}/api/show_business_category")
            .then(response => response.json())
            .then(result => {
                // console.log(result);
                //UPDATE SELECT OPTION
                let category = document.querySelector("#category");
                    // category.innerHTML = "";

                for(let item of result){
                    let option = document.createElement("option");
                    option.text = item.name;
                    option.value = item.name;
                    category.add(option);
                }
                
            });
    }

    function show_business_sub_category(){
        let category = document.querySelector("#category");
        fetch("{{ url('/') }}/api/show_business_sub_category" + '/' + category.value)
            .then(response => response.json())
            .then(result => {
                // console.log(result);
                //UPDATE SELECT OPTION
                let sub_category = document.querySelector("#sub_category");
                    sub_category.innerHTML = "";

                for(let item of result){
                    let option = document.createElement("option");
                    option.text = item.name_sub;
                    option.value = item.name_sub;
                    sub_category.add(option);
                }
                
            });
    }

    function previewImage(input) {
        console.log(input.name);
        let preview = document.getElementById('preview_' + input.name);
        let container_preview = document.getElementById('container_' + input.name);
        let upload_preview = document.getElementById('upload_' + input.name);
        // let btn_select_new_img = document.querySelector('#btn_select_new_img');
        // console.log('asd');
        if (input.files && input.files[0]) {
            let reader = new FileReader();

            reader.onload = function(e) {
                // edit_first_profile.classList.add('d-none');
                // btn_select_new_img.classList.remove('d-none');
                preview.src = e.target.result;
                preview.classList.remove('d-none');
                container_preview.classList.remove('d-none');
                upload_preview.classList.add('d-none');
                // Initialize or update cropper
                if (preview.cropper) {
                    preview.cropper.destroy();
                }
            };

            reader.readAsDataURL(input.files[0]);
        } else {
            preview.src = '#';
            preview.classList.add('d-none');
            container_preview.classList.add('d-none');
            upload_preview.classList.remove('d-none');

            if (preview.cropper) {
                preview.cropper.destroy();
            }
        }
    }

</script>