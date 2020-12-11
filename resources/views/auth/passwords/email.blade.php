@include('partials._body_style')

<section class="sign-in-page bg-white">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-sm-6 align-self-center">
                <div class="sign-in-from">
                    <h1 class="mb-0">{{ __('Reset Password') }}</h1>
                    <p>Enter your email address and we'll send you an email with instructions to reset your password.</p>
					@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="mt-4" method="POST" action="{{ route('password.email') }}">

                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ __('E-mail address') }}</label>
                            <input type="email" class="form-control mb-0 @error('email') is-invalid @enderror" id="exampleInputEmail1" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="Enter email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="d-inline-block w-100">

                            <button type="submit" class="btn btn-primary float-right">{{ __('Send Password Reset Link') }}</button>
                        </div>

                    </form>
                </div>
            </div>
            <div class="col-sm-6 text-center">
                <div class="sign-in-detail text-white" style="background: url(assets/images/login/2.jpg) no-repeat 0 0; background-size: cover;">
                    <a class="sign-in-logo mb-5" href="#"><img src={{asset("assets/images/logo-white.png" )}} class="img-fluid" alt="logo"></a>
                    <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                        <div class="item">
                            <img src={{asset("assets/images/login/1.png")}} class="img-fluid mb-4" alt="logo">
                            <h4 class="mb-1 text-white">Manage your orders</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                        </div>
                        <div class="item">
                            <img src={{asset("assets/images/login/1.png")}} class="img-fluid mb-4" alt="logo">
                            <h4 class="mb-1 text-white">Manage your orders</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                        </div>
                        <div class="item">
                            <img src={{asset("assets/images/login/1.png")}} class="img-fluid mb-4" alt="logo">
                            <h4 class="mb-1 text-white">Manage your orders</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials._body_footer')