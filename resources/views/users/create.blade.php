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
                                <a href="{!! route('users.index') !!}">User</a>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                            @include('coreui-templates::common.errors')

                            {!! Form::open(['route' => 'users.store']) !!}

                            @include('users.fields')

                            {!! Form::close() !!}


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
