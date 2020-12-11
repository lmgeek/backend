@extends('layouts.master')

@section('content')
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                @include('coreui-templates::common.errors')
                <div class="col-sm-12 col-lg-6">
{{--                    <div class="iq-card">--}}
{{--                        <div class="iq-card-header d-flex justify-content-between">--}}
{{--                            <div class="iq-header-title">--}}
{{--                                <h4 class="card-title">Basic</h4>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="iq-card-body">--}}
{{--                            <p>Creating basic google map</p>--}}
{{--                            <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902543.2003194243!2d-118.04220880485131!3d36.56083290513502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80be29b9f4abb783%3A0x4757dc6be1305318!2sInyo%20National%20Forest!5e0!3m2!1sen!2sin!4v1576668158879!5m2!1sen!2sin"  height="500" allowfullscreen=""></iframe>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Gallery</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            @foreach($images as $image)
{{--                                <a href="#" data-toggle="modal" data-target="#{{$image->id}}">--}}
                                    <img src={{$image->image}} class="img-thumbnail" alt="Responsive image" width="150" >
{{--                                </a>--}}
{{--                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{$image->id}}">--}}
{{--                                    View--}}
{{--                                </button>--}}
                                <!-- Modal -->
                                <div class="modal fade" id="{{$image->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img src={{$image->image}} class="img-thumbnail" alt="Responsive image">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>


                <div class="col-sm-12 col-lg-6">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">@lang('crud.detail')</h4>
                                <a href="{!! route('users.index') !!}">Back</a>
                            </div>
                        </div>
                        <div class="iq-card-body">

                            @include('orders.show_fields')

                        </div>


                    </div>

                </div>


{{--                <div class="col-sm-12 col-lg-6">--}}
{{--                    <div class="iq-card">--}}
{{--                        <div class="iq-card-header d-flex justify-content-between">--}}
{{--                            <div class="iq-header-title">--}}
{{--                                <h4 class="card-title">Gallery</h4>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="iq-card-body">--}}
{{--                            @foreach($images as $image)--}}
{{--                            <img src={{$image->image}} class="img-thumbnail" alt="Responsive image" width="150">--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-sm-12 col-lg-6" style="display: none">--}}
{{--                    <div class="iq-card">--}}
{{--                        <div class="iq-card-header d-flex justify-content-between">--}}
{{--                            <div class="iq-header-title">--}}
{{--                                <h4 class="card-title">History</h4>--}}
{{--                            </div>--}}
{{--                            <div class="iq-card-body">--}}
{{--                                <!-- Step 1 -->--}}
{{--                                <h6>Step 1</h6>--}}


{{--                                <!-- Step 2 -->--}}
{{--                                <h6>Step 2</h6>--}}


{{--                                <!-- Step 3 -->--}}
{{--                                <h6>Step 3</h6>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

            </div>
        </div>
    </div>
@endsection
