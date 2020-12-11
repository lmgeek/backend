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
                            @include('coreui-templates::common.errors')

                              {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch']) !!}

                              @include('users.fields')

                              {!! Form::close() !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
