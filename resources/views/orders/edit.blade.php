@extends('layouts.master')

@section('content')
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">@lang('crud.edit')</h4>
                                <a href="{!! route('orders.index') !!}">@lang('models/orders.singular')</a>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                            @include('coreui-templates::common.errors')

                              {!! Form::model($orders, ['route' => ['orders.update', $orders->id], 'method' => 'patch']) !!}

                              @include('orders.fields')

                              {!! Form::close() !!}

                        </div>
                    </div>

                </div>

                <div class="col-sm-12 col-lg-6">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Gallery</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            {{--                                        @foreach($images as $image)--}}
                            {{--                                        <img src={{$image->image}} class="img-thumbnail" alt="Responsive image" width="150">--}}
                            {{--                                        @endforeach--}}
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
