<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', __('models/myOrders.fields.id').':') !!}
    <p>{{ $orders->id }}</p>
</div>

<!-- Companyname Field -->
<div class="form-group">
    {!! Form::label('companyName', __('models/myOrders.fields.companyName').':') !!}
    <p>{{ $orders->companyName }}</p>
</div>

<!-- Referencename Field -->
<div class="form-group">
    {!! Form::label('referenceName', __('models/myOrders.fields.referenceName').':') !!}
    <p>{{ $orders->referenceName }}</p>
</div>

<!-- Projectname Field -->
<div class="form-group">
    {!! Form::label('projectName', __('models/myOrders.fields.projectName').':') !!}
    <p>{{ $orders->projectName }}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', __('models/myOrders.fields.address').':') !!}
    <p>{{ $orders->address }}</p>
</div>

<!-- Zipcode Field -->
<div class="form-group">
    {!! Form::label('zipcode', __('models/myOrders.fields.zipcode').':') !!}
    <p>{{ $orders->zipcode }}</p>
</div>

<!-- City Field -->
<div class="form-group">
    {!! Form::label('city', __('models/myOrders.fields.city').':') !!}
    <p>{{ $orders->city }}</p>
</div>

<!-- Province Field -->
<div class="form-group">
    {!! Form::label('province', __('models/myOrders.fields.province').':') !!}
    <p>{{ $orders->province }}</p>
</div>

<!-- Country Field -->
<div class="form-group">
    {!! Form::label('country', __('models/myOrders.fields.country').':') !!}
    <p>{{ $orders->country }}</p>
</div>



<!-- Checklist Field -->
<div class="form-group">
    {!! Form::label('checklist', __('models/myOrders.fields.checklist').':') !!}
    <p>{{ $orders->checklist }}</p>
    <div class="custom-control custom-switch custom-control-inline">
        {!! Form::checkbox('check',null ,$orders->checklist, array('class'=>"custom-control-input")) !!}
        {!! Form::label('false', 'disable / active', array('class'=>'custom-control-label','disabled'=>true)) !!}

    </div>
</div>

<!-- Comments Field -->
<div class="form-group">
    {!! Form::label('comments', __('models/myOrders.fields.comments').':') !!}
    <p>{{ $orders->comments }}</p>
</div>

<!-- Contributor Field -->
<div class="form-group">
    {!! Form::label('contributor', __('models/myOrders.fields.contributor').':') !!}
    <p>{{ $orders->contributorName }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/myOrders.fields.created_at').':') !!}
    <p>{{ $orders->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/myOrders.fields.updated_at').':') !!}
    <p>{{ $orders->updated_at }}</p>
</div>

