@extends('layouts.master')

@section('content')
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                @include('coreui-templates::common.errors')
                <div class="col-sm-12 col-lg-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">@lang('crud.detail')</h4>
                                <a href="{!! route('myOrders.index') !!}">Back</a>
                            </div>
                        </div>
                        <div class="iq-card-body">

                            @include('myOrders.show_fields')

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
