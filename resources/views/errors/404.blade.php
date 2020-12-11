<!doctype html>
<html lang="en">
@include('partials._body_style')

<body>

    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-sm-12 text-center">
                <div class="iq-error">
                    <h1>404</h1>
                    <h4 class="mb-0">Oops! This Page is Not Found.</h4>
                    <p>The requested page dose not exist.</p>
                    <a class="btn btn-primary mt-3" href={{ route('home') }}><i class="ri-home-4-line"></i>Back to Home</a>
                    <img src={{asset("assets/images/error/01.png")}} class="img-fluid iq-error-img" alt="">
                </div>
            </div>
        </div>
    </div>

</body>

</html>
