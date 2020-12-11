<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', __('models/typeUploads.fields.id').':') !!}
    <p>{{ $typeUpload->id }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/typeUploads.fields.name').':') !!}
    <p>{{ $typeUpload->name }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', __('models/typeUploads.fields.description').':') !!}
    <p>{{ $typeUpload->description }}</p>
</div>

<!-- Min Upload Field -->
<div class="form-group">
    {!! Form::label('min_upload', __('models/typeUploads.fields.min_upload').':') !!}
    <p>{{ $typeUpload->min_upload }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', __('models/typeUploads.fields.created_at').':') !!}
    <p>{{ $typeUpload->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', __('models/typeUploads.fields.updated_at').':') !!}
    <p>{{ $typeUpload->updated_at }}</p>
</div>

