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
</style>

<div class="card border-top border-0 border-5 border-dark">
    <div class="card-body p-4">
        <div class="card-title d-flex align-items-center">
            <div>
                <img src="{{ asset('/theme_cms/images/icons/report.png') }}" class="card-img-top" style="width: 50px;">
            </div>
            <h5 class="mb-0 mx-3 gold_color_text bold-gold">
                เพิ่มข้อมูลกิจการของคุณ
            </h5>
        </div>
        <hr>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="form-group  col-12 mb-3 mt-3">
                    <label for="name" class="control-label">ชื่อกิจการ</label>
                    <input class="form-control" name="name" type="text" id="name" value="">
                </div>
                <div class="form-group  col-12 mb-3">
                    <label for="detail" class="control-label">รายละเอียด</label>
                    <input class="form-control" name="detail" type="text" id="detail" value="">
                </div>
                <div class="form-group  col-12 mb-3">
                    <label for="title_link_content" class="control-label">ประเภทกิจการ</label>
                    <input class="form-control" name="title_link_content" type="text" id="title_link_content" value="">
                    <select class="custom-select" name="category_group" id="--field-66658" aria-required="true" data-gtm-form-interact-field-id="0">
                        <option disabled="" value="">เลือกประเภทหลัก</option>
                        <option value="72">ผู้เชี่ยวชาญ</option>
                        <option value="50">ร้านอาหารและเครื่องดื่ม</option>
                        <option value="51">ยานพาหนะ</option>
                        <option value="52">อสังหาริมทรัพย์</option>
                        <option value="53">การศึกษา</option>
                        <option value="54">การท่องเที่ยว</option>
                        <option value="55">ธุรกิจบันเทิง</option>
                        <option value="57">สุขภาพ</option>
                        <option value="58">ความงาม</option>
                        <option value="59">องค์กร หรือสถาบัน</option>
                        <option value="60">หน่วยงานราชการ</option>
                        <option value="61">ธุรกิจบริการ</option>
                        <option value="62">ค้าขาย, ร้านค้า</option>
                        <option value="2505">ธุรกิจในพื้นที่ประเภทอื่น</option>
                        <option value="73">องค์กรธุรกิจ, กลุ่มองค์กร</option>
                        <option value="74">แบรนด์, ผลิตภัณฑ์</option>
                        <option value="75">หนังสือ,นิตยสาร,หนังสือพิมพ์</option>
                        <option value="76">ภาพยนตร์</option>
                        <option value="77">ดนตรี</option>
                        <option value="56">กีฬา</option>
                        <option value="78">โทรทัศน์</option>
                        <option value="79">เว็บไซต์&amp;บล็อก</option>
                    </select>
                </div>
                <div class="form-group col-12 mb-3">
                    <label for="link_content" class="control-label">ประเภทย่อย</label>
                    <input class="form-control" name="link_content" type="text" id="link_content" value="">
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="form-group  col-12 mt-3">
                    <label for="photo" class="control-label">รูปภาพ</label>
                    <input class="form-control d-none" name="photo" type="file" id="photo" value="" accept="image/*" onchange="previewImage(this)">
                  
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
                        <img id="preview_photo" src="" alt="ภาพพรีวิว" class="mt-5 d-none" style="max-width:50px; max-height:50px !important;">
                    </div>  
                </div>
            </div>
            <div class="form-group col-12">
                <label for="host" class="control-label">User Id</label>
                <input class="form-control" name="host" type="text" id="host" value="{{ Auth::user()->id }}">
                <label for="status" class="control-label">Status</label>
                <input class="form-control" name="status" type="text" id="status" value="Active">
            </div>
        </div>

        <div class="form-group mt-5">
            <input class="btn gradient-button px-5 float-end " type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
        </div>

    </div>
</div>



<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($business->name) ? $business->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('detail') ? 'has-error' : ''}}">
    <label for="detail" class="control-label">{{ 'Detail' }}</label>
    <textarea class="form-control" rows="5" name="detail" type="textarea" id="detail" >{{ isset($business->detail) ? $business->detail : ''}}</textarea>
    {!! $errors->first('detail', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('photo') ? 'has-error' : ''}}">
    <label for="photo" class="control-label">{{ 'Photo' }}</label>
    <input class="form-control" name="photo" type="file" id="photo" value="{{ isset($business->photo) ? $business->photo : ''}}" >
    {!! $errors->first('photo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('host') ? 'has-error' : ''}}">
    <label for="host" class="control-label">{{ 'Host' }}</label>
    <input class="form-control" name="host" type="text" id="host" value="{{ isset($business->host) ? $business->host : ''}}" >
    {!! $errors->first('host', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('member') ? 'has-error' : ''}}">
    <label for="member" class="control-label">{{ 'Member' }}</label>
    <input class="form-control" name="member" type="text" id="member" value="{{ isset($business->member) ? $business->member : ''}}" >
    {!! $errors->first('member', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
    <label for="category" class="control-label">{{ 'Category' }}</label>
    <input class="form-control" name="category" type="text" id="category" value="{{ isset($business->category) ? $business->category : ''}}" >
    {!! $errors->first('category', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sub_category') ? 'has-error' : ''}}">
    <label for="sub_category" class="control-label">{{ 'Sub Category' }}</label>
    <input class="form-control" name="sub_category" type="text" id="sub_category" value="{{ isset($business->sub_category) ? $business->sub_category : ''}}" >
    {!! $errors->first('sub_category', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('income') ? 'has-error' : ''}}">
    <label for="income" class="control-label">{{ 'Income' }}</label>
    <input class="form-control" name="income" type="number" id="income" value="{{ isset($business->income) ? $business->income : ''}}" >
    {!! $errors->first('income', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('expenses') ? 'has-error' : ''}}">
    <label for="expenses" class="control-label">{{ 'Expenses' }}</label>
    <input class="form-control" name="expenses" type="number" id="expenses" value="{{ isset($business->expenses) ? $business->expenses : ''}}" >
    {!! $errors->first('expenses', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('total_cost') ? 'has-error' : ''}}">
    <label for="total_cost" class="control-label">{{ 'Total Cost' }}</label>
    <input class="form-control" name="total_cost" type="number" id="total_cost" value="{{ isset($business->total_cost) ? $business->total_cost : ''}}" >
    {!! $errors->first('total_cost', '<p class="help-block">:message</p>') !!}
</div>





<script>
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