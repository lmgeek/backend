@extends('layouts.master')

@section('content')
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row row-eq-height">
                <!-- Content Top Banner Start -->
                <div class="col-md-12 col-lg-8">
                    <div class="iq-card bg-primary sb-top-banner-card">
                        <div class="iq-card-body pt-5 pb-5">
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <h2 class="text-white">Welcome {{ Auth::user()->name }}</h2>
                                    <p class="text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. remaining essentially unchanged.</p>
                                    <button type="button" class="btn iq-bg-primary">Read More</button>
                                </div>
                                <div class="col-md-6 position-relative">
                                    <div class="an-img-two">
                                        <div class="bodymovin" data-bm-path={{asset("assets/images/small/data1.json")}} data-bm-renderer="svg" data-bm-loop="true"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
