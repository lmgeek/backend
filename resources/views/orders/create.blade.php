@extends('layouts.master')

@section('content')
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">@lang('crud.add_new')</h4>
                                <a href="{!! route('orders.index') !!}">@lang('models/orders.singular')</a>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                            @include('coreui-templates::common.errors')

{{--                            <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">--}}
{{--                                @csrf--}}
{{--                                <input type="file" name="file" class="form-control">--}}
{{--                                <input type="submit" class="btn btn-primary">--}}
{{--                            </form>--}}

                            <div class="form-group col-sm-6">
                                {!! Form::label('typeUpload', __('models/typeUploads.plural').':') !!}
                                <select name="type_upload" class="form-control" id="typeUpload">
                                    @foreach(\App\Models\TypeUpload::all() as $type_upload)
                                        <option value="{{ $type_upload->id }}">{{ $type_upload->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- DropZone -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <form action="{{ route('upload_images') }}" class="dropzone dropzone-area" id="sccc">
                                                    @csrf
                                                    <div class="dz-message">Drop Images Here To Upload</div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            {!! Form::open(['route' => 'orders.store']) !!}

                            @include('orders.fields')

                            {!! Form::close() !!}


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
{{--    --}}
{{--    <ol class="breadcrumb">--}}
{{--      <li class="breadcrumb-item">--}}
{{--         <a href="{!! route('orders.index') !!}">@lang('models/orders.singular')</a>--}}
{{--      </li>--}}
{{--      <li class="breadcrumb-item active">@lang('crud.add_new')</li>--}}
{{--    </ol>--}}
{{--     <div class="container-fluid">--}}
{{--          <div class="animated fadeIn">--}}
{{--                @include('coreui-templates::common.errors')--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-12">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-header">--}}
{{--                                <i class="fa fa-plus-square-o fa-lg"></i>--}}
{{--                                <strong>Create @lang('models/orders.singular')</strong>--}}
{{--                            </div>--}}
{{--                            <div class="card-body">--}}
{{--                                {!! Form::open(['route' => 'orders.store']) !!}--}}

{{--                                   @include('orders.fields')--}}

{{--                                {!! Form::close() !!}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--           </div>--}}
{{--    </div>--}}
@endsection
