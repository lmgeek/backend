<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/typeUploads.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', __('models/typeUploads.fields.description').':') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Min Upload Field -->
<div class="form-group col-sm-6">
    {!! Form::label('min_upload', __('models/typeUploads.fields.min_upload').':') !!}
    {!! Form::number('min_upload', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('typeUploads.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
