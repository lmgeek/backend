@extends('layouts.master')

@section('content')
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            @include('flash::message')
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">@lang('models/orders.plural')</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
{{--                            <p>Images in Bootstrap are made responsive with <code>.img-fluid</code>. <code>max-width:--}}
{{--                                    100%;</code> and <code>height: auto;</code> are applied to the image so that it--}}
{{--                                scales with the parent element.</p>--}}
                            <div class="table-editable">
                                <div class="d-block float-left mb-3 mr-2">
                                    <div class="btn-group btn-group-md" role="group" aria-label="Basic example">
                                        <button type="button" onclick="window.location.href='{{ route('orders.create') }}'" class="btn btn-primary">
                                            <i class="ri-image-add-line"></i>
                                            <i class="ri-image-add-fill"></i>
                                            <i class="fa fa-file-image-o" aria-hidden="true"></i>
                                            New
                                        </button>
                                        <button type="button" class="btn btn-primary">
                                            <i class="ri-file-excel-2-line"></i>Export
                                        </button>
                                        <button type="button" class="btn btn-primary">Right</button>
                                    </div>
                                </div>

                                <span class="table-add float-right mb-3 mr-2">
                                        <button type="button" onclick="window.location.href='{{ route('orders.create') }}'" class="btn btn-primary mb-3">
                                            <i class="fa fa-plus-square fa-lg"></i> Add New</button>
                                </span>
                                @include('orders.table')

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
@endsection

