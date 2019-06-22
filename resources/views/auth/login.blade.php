<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>{{ config('app.name', 'MYIUD') }}</title>

        <meta name="description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Fonts and OneUI framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
        <link rel="stylesheet" id="css-main" href="assets/css/oneui.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <div id="page-container">

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="bg-image" style="background-image: url('assets/media/photos/photo6@2x.jpg');">
                    <div class="hero-static bg-white-95">
                        <div class="content">
                            <div class="row justify-content-center">
                                <div class="col-md-8 col-lg-6 col-xl-4">
                                    <!-- Sign In Block -->
                                    <div class="block block-themed block-fx-shadow mb-0">
                                        <div class="block-header">
                                            <h3 class="block-title">Sign In</h3>
                                            <div class="block-options">
                                                @if (Route::has('password.request'))
                                                    <a class="btn-block-option font-size-sm" href="{{ route('password.request') }}">{{__('Forgot Password?')}}</a>
                                                @endif
                                                <a class="btn-block-option" href=" {{ route('register') }} " data-toggle="tooltip" data-placement="left" title="New Account">
                                                    <i class="fa fa-user-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="block-content">
                                            <div class="p-sm-3 px-lg-4 py-lg-5">
                                                <h1 class="mb-2"> {{ config('app.name', 'Laravel') }} </h1>
                                                <p>Welcome, please login.</p>

                                                <!-- Sign In Form -->
                                                
                                                <form class="js-validation-signin" action=" {{ route('login') }} " method="POST">
                                                    @csrf
                                                    <div class="py-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control form-control-alt form-control-lg @error('username') is-invalid @enderror " id="login-username" name="username" placeholder="Username">
                                                            @error('username')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong> {{ $message }} </strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" class="form-control form-control-alt form-control-lg @error('passsword') is-invalid @enderror " id="login-password" name="password" placeholder="Password">
                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong> {{ $message }} </strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="login-remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                                <label class="custom-control-label font-w400" for="login-remember">{{ __('Remember Me') }}</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-md-6 col-xl-5">
                                                            <button type="submit" class="btn btn-block btn-primary">
                                                                <i class="fa fa-fw fa-sign-in-alt mr-1"></i>{{ __('Sign In') }}
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- END Sign In Form -->
                                                <div>
                                            <a class="font-size-sm text-center" href=" {{ url('/') }} ">{{ __('Back Home') }}</a>
                                            </a>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Sign In Block -->
                                </div>
                            </div>
                        </div>
                        <div class="content content-full font-size-sm text-muted text-center">
                            <strong> {{ config('app.name', 'MYIUD' ) }} </strong> &copy; <span data-toggle="year-copy"></span>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        <!--
            OneUI JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            assets/js/core/jquery.min.js
            assets/js/core/bootstrap.bundle.min.js
            assets/js/core/simplebar.min.js
            assets/js/core/jquery-scrollLock.min.js
            assets/js/core/jquery.appear.min.js
            assets/js/core/js.cookie.min.js
        -->
        <script src="assets/js/oneui.core.min.js"></script>

        <!--
            OneUI JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
        <script src="assets/js/oneui.app.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/op_auth_signin.min.js"></script>
    </body>
</html>
