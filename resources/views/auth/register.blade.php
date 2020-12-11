@include('partials._body_style')

<section class="sign-in-page bg-white">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-sm-6 align-self-center">
                <div class="sign-in-from">
                    <h1 class="mb-0">Sign Up</h1>
                    <p>Enter your email address and password to access admin panel.</p>
                    <form class="mt-4" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="exampleInputEmail1">{{ __('Your Full Name') }}</label>
                            <input type="text" class="form-control mb-0 @error('name') is-invalid @enderror" id="exampleInputEmail1" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Your Full Name">

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail2">{{ __('Email Address') }}</label>
                            <input type="email" class="form-control mb-0 @error('email') is-invalid @enderror" id="exampleInputEmail2" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">{{ __('Password') }}</label>
                            <input type="password" class="form-control mb-0 @error('password') is-invalid @enderror" id="exampleInputPassword1" name="password" required autocomplete="new-password" placeholder="Password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control mb-0" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">

                        </div>
                        <div class="d-inline-block w-100">
                            <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">I accept <a href="#">Terms and Conditions</a></label>
                            </div>
                            <button type="submit" class="btn btn-primary float-right">{{ __('Register') }}</button>
                        </div>
                        <div class="sign-info">
                            <span class="dark-color d-inline-block line-height-2">Already Have Account ? <a href="{{ route('login') }}">Log In</a></span>
{{--                            <ul class="iq-social-media">--}}
{{--                                <li><a href="#"><i class="ri-facebook-box-line"></i></a></li>--}}
{{--                                <li><a href="#"><i class="ri-twitter-line"></i></a></li>--}}
{{--                                <li><a href="#"><i class="ri-instagram-line"></i></a></li>--}}
{{--                            </ul>--}}
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-6 text-center">
                <div class="sign-in-detail text-white" style="background: url(assets/images/login/2.jpg) no-repeat 0 0; background-size: cover;">
                    <a class="sign-in-logo mb-5" href="#"><img src={{asset("assets/images/logo-white.png")}} class="img-fluid" alt="logo"></a>
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