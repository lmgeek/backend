@extends('layouts.master')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('typeUploads.index') !!}">@lang('models/typeUploads.singular')</a>
          </li>
          <li class="breadcrumb-item active">@lang('crud.edit')</li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
             @include('coreui-templates::common.errors')
             <div class="row">
                 <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <i class="fa fa-edit fa-lg"></i>
                              <strong>Edit @lang('models/typeUploads.singular')</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($typeUpload, ['route' => ['typeUploads.update', $typeUpload->id], 'method' => 'patch']) !!}

                              @include('type_uploads.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection
