<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', __('models/roles.fields.id').':') !!}
    <p>{{ $role->id }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/roles.fields.name').':') !!}
    <p>{{ $role->name }}</p>
</div>

<!-- Permission Field -->
<div class="form-group">
    {!! Form::label('permission', __('models/roles.fields.permission').':') !!}
    <p>{{ $role->permission }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/roles.fields.created_at').':') !!}
    <p>{{ $role->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/roles.fields.updated_at').':') !!}
    <p>{{ $role->updated_at }}</p>
</div>

