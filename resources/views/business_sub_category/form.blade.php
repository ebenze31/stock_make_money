<div class="form-group {{ $errors->has('name_sub') ? 'has-error' : ''}}">
    <label for="name_sub" class="control-label">{{ 'Name Sub' }}</label>
    <input class="form-control" name="name_sub" type="text" id="name_sub" value="{{ isset($business_sub_category->name_sub) ? $business_sub_category->name_sub : ''}}" >
    {!! $errors->first('name_sub', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('business_category_id') ? 'has-error' : ''}}">
    <label for="business_category_id" class="control-label">{{ 'Business Category Id' }}</label>
    <input class="form-control" name="business_category_id" type="text" id="business_category_id" value="{{ isset($business_sub_category->business_category_id) ? $business_sub_category->business_category_id : ''}}" >
    {!! $errors->first('business_category_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
