<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>{{ config('app.name', 'MYIUD') }}</title>

        <meta name="description" content="">
        <meta name="author" content="solomon osaighe">
        <meta name="robots" content="noindex, nofollow">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="../assets/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="../assets/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../assets/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Fonts and OneUI framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
        <link rel="stylesheet" id="css-main" href="../assets/css/oneui.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <div id="page-container">

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="bg-image" style="background-image: url('../assets/media/photos/photo6@2x.jpg');">
                    <div class="hero-static bg-white-95">
                        <div class="content">
                            <div class="row justify-content-center">
                                <div class="col-md-8 col-lg-6 col-xl-4">
                                    <!-- Reminder Block -->
                                    <div class="block block-themed block-fx-shadow mb-0">
                                        <div class="block-header">
                                            <h3 class="block-title">{{ __('Password Reminder')}}</h3>
                                            <div class="block-options">
                                                <a class="btn-block-option" href=" {{ route('login') }} " data-toggle="tooltip" data-placement="left" title="Sign In">
                                                    <i class="fa fa-sign-in-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="block-content">
                                            <div class="p-sm-3 px-lg-4 py-lg-5">
                                                <h1 class="mb-2">{{ config('app.name','MYIUD') }}</h1>
                                                @if (session('status'))
                                                    <div class="alert alert-success" role="alert">
                                                        {{ session('status') }}
                                                    </div>
                                                @endif
                                                <p>Please provide your account’s email and we will send you your password.</p>

                                                <!-- Reminder Form -->
                                        
                                                <form class="js-validation-reminder" action="{{ route('password.email') }}" method="POST">
                                                    @csrf
                                                    
                                                    <div class="form-group py-3">
                                                        <input type="text" required class="form-control form-control-lg form-control-alt @error('email') is-invalid @enderror" id="reminder-credential" name="email" placeholder="{{ __('E-Mail Address') }}">
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>


                                                    <div class="form-group row">
                                                        <div class="col-md-12 col-xl-12">
                                                            <button type="submit" class="btn btn-block btn-primary">
                                                                <i class="fa fa-fw fa-envelope mr-1"></i>{{ __('Send Password Reset Link') }}
                                                            </button>
                                                        </div>
                                                    </div>

                                                </form>
                                                <!-- END Reminder Form -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Reminder Block -->
                                </div>
                            </div>
                        </div>
                        <div class="content content-full font-size-sm text-muted text-center">
                            <strong>{{ config('app.name','MYIUD') }}</strong> &copy; <span data-toggle="year-copy"></span>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        <script src="../assets/js/oneui.core.min.js"></script>

        <!--
            OneUI JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at ../assets/_es6/main/app.js
        -->
        <script src="../assets/js/oneui.app.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="../assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

        <!-- Page JS Code -->
        <script src="../assets/js/pages/op_auth_reminder.min.js"></script>
    </body>
</html>
