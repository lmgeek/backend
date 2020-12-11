

<!-- Companyname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('companyName', __('models/orders.fields.companyName').':') !!}
    {!! Form::text('companyName', null, ['class' => 'form-control']) !!}
</div>

<!-- Referencename Field -->
<div class="form-group col-sm-6">
    {!! Form::label('referenceName', __('models/orders.fields.referenceName').':') !!}
    {!! Form::number('referenceName', null, ['class' => 'form-control']) !!}
</div>

<!-- Projectname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('projectName', __('models/orders.fields.projectName').':') !!}
    {!! Form::text('projectName', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', __('models/orders.fields.address').':') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Zipcode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('zipcode', __('models/orders.fields.zipcode').':') !!}
    {!! Form::text('zipcode', null, ['class' => 'form-control']) !!}
</div>

<!-- City Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city', __('models/orders.fields.city').':') !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>

<!-- Province Field -->
<div class="form-group col-sm-6">
    {!! Form::label('province', __('models/orders.fields.province').':') !!}
    {!! Form::text('province', null, ['class' => 'form-control']) !!}
</div>

<!-- Country Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country', __('models/orders.fields.country').':') !!}
    {!! Form::text('country', null, ['class' => 'form-control']) !!}
</div>


<!-- 'bootstrap / Toggle Switch Checklist Field' -->
<div class="d-flex align-items-center form-group col-sm-6">
    {!! Form::label('checklist', __('models/orders.fields.checklist').':') !!}
    <label class="switch switch-label switch-pill switch-primary  ml-2">
        {!! Form::hidden('checklist', 0) !!}
        {!! Form::checkbox('checklist', 1, null,  ['class' => 'switch-input']) !!}
        <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
    </label>
    {{--    <div class="custom-control custom-switch custom-control-inline">--}}
    {{--        <input type="checkbox" class="custom-control-input" id="checklist" checked="" name="checklist">--}}
    {{--        <label class="custom-control-label" for="checklist">true / active</label>--}}
    {{--    </div>--}}
</div>


<!-- Comments Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('comments', __('models/orders.fields.comments').':') !!}
    {!! Form::textarea('comments', null, ['class' => 'form-control']) !!}
</div>

<!-- Contributor Field -->
<div class="form-group col-sm-6">
    <input type="hidden" readonly value="{{ Auth::user()->id }}">
</div>

<input type="hidden" value="{{ Auth::User()->id }}" name="contributor">
<input type="hidden" value="pending" name="status">


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('orders.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>


