<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="" >
        <meta name="description" content="" >
        <meta name="author" content="">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} | To help women make informed decision with regards to IUDs</title>
        <!-- Loading Bootstrap -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
        <!-- Scripts -->
        <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

        <!-- Loading Template CSS -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/animate.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/style-magnific-popup.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/oneui.min.css')}}">
        <!-- Awesome Fonts -->
        <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>

      <style>
          canvas {
              -moz-user-select: none;
              -webkit-user-select: none;
              -ms-user-select: none;
           }
      </style>

        <!-- Fonts -->
        <link
        href="https://fonts.googleapis.com/css?family=Dosis:500,600"
        rel="stylesheet"
        />
        
        <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,700"
        rel="stylesheet"
        />
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

        <!-- Font Favicon -->
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />
    </head>

    <body>
    <!--begin header -->
    <header class="header">
      <!--begin navbar-fixed-top -->
      <nav class="navbar navbar-default navbar-fixed-top">
        <!--begin container -->
        <div class="container">
          <!--begin navbar -->
          <nav class="navbar navbar-expand-lg">
            <!--begin logo -->
            <a class="navbar-brand" href=" {{ url('/') }} ">
                {{ config('app.name', 'Laravel') }}
            </a>
            <!--end logo -->

            <!--begin navbar-toggler -->
            <button
              class="navbar-toggler collapsed"
              type="button"
              data-toggle="collapse"
              data-target="#navbarCollapse"
              aria-controls="navbarCollapse"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"
                ><i class="fas fa-bars"></i
              ></span>
            </button>
            <!--end navbar-toggler -->

            <!--begin navbar-collapse -->
            <div class="navbar-collapse collapse" id="navbarCollapse">
              <!--begin navbar-nav -->
              <ul class="navbar-nav ml-auto">
                <li><a href=" {{ url('/') }} ">Home</a></li>

                <li><a href=" {{ url('about') }} ">About</a></li>

                <li><a href=" {{ url('forum') }} ">Forum</a></li>

                <li><a href=" {{ url('blog') }} ">Blog</a></li>

                <li><a href=" {{ url('contact') }} ">Contact</a></li>

                @guest

                    <li class="discover-link">
                        <a href=" {{ route('login') }} " class="external discover-btn">{{ __('Login') }}</a>
                    </li>
                    
                    <li class="discover-link">
                        <a href=" {{ route('register') }} " class="external discover-btn"> {{ __('Join Now') }} </a>
                    </li>
                    
                    

                @else
                  <!-- Right Section -->
                <div class="d-flex align-items-center">
                    <!-- User Dropdown -->
                    <div class="dropdown d-inline-block ml-2">
                        <button type="button" class="btn btn-sm btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded" src="{{ asset('assets/media/avatars/avatar10.jpg')}}" alt="Header Avatar" style="width: 18px;">
                            <span class="d-none d-sm-inline-block ml-1">{{ Auth::user()->username }}</span>
                            <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="page-header-user-dropdown">
                            <div class="p-3 text-center bg-primary">
                                <img class="img-avatar img-avatar48 img-avatar-thumb" src="assets/media/avatars/avatar10.jpg" alt="">
                            </div>
                            <div class="p-2">
                                <h5 class="dropdown-header text-uppercase">User Options</h5>

                                <a class="dropdown-item d-flex align-items-center justify-content-between" href=" {{ url('profile')}} ">
                                    <span>Profile</span>
                                    <span>
                                        <span class="badge badge-pill badge-success">1</span>
                                        <i class="si si-user ml-1"></i>
                                    </span>
                                </a>

                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                    <span>{{ __('Logout') }}</span>
                                    <i class="si si-logout ml-1"></i>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- END User Dropdown -->

                  </div>
                  <li class="discover-link">
                  <a href="#" class="external discover-btn" style="background:#f15c5c;  color:#fff !important; border: 1px solid #ff0000;">Donate</a>
                </li>
                
                
                <!-- END Right Section -->
                @endguest

              </ul>
              
              <!--end navbar-nav -->
            </div>
            <!--end navbar-collapse -->
          </nav>
          <!--end navbar -->
        </div>
        <!--end container -->
      </nav>
      <!--end navbar-fixed-top -->
    </header>
    <!--end header -->

    @yield('content')


    <!--begin footer -->
    <div class="footer">
      <!--begin container -->
      <div class="container">
        <!--begin row -->
        <div class="row">
          <!--begin col-md-12 -->
          <div class="col-md-12 text-center">
            <p>Copyright &copy; <script> document.write(new Date().getFullYear() ); </script> {{ config('app.name', 'MYIUD') }}</p>
          </div>
          <!--end col-md-6 -->
        </div>
        <!--end row -->
      </div>
      <!--end container -->
    </div>
    <!--end footer -->

    <!-- Load JS here for greater good =============================-->
    <script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <!-- <script src="js/jquery.scrollTo-min.js"></script> -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('js/jquery.nav.js')}}"></script>
    <script src="{{ asset('js/wow.js')}}"></script>
    <script src="{{ asset('js/plugins.js')}}"></script>
    <script src="{{ asset('js/custom.js')}}"></script>
    <script src="{{ asset('assets/js/pages/be_forms_wizard.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/jquery-bootstrap-wizard/bs4/jquery.bootstrap.wizard.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/jquery-validation/additional-methods.js')}}"></script>
    <script src="{{ asset('assets/js/plugins/ckeditor/ckeditor.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('js/add-symptoms.js')}}"></script>

    <!-- Page JS Helpers (CKEditor plugin) -->
    <script type="text/javascript">
      
    </script>
    <script>
      // jQuery(function(){ One.helpers(['ckeditor']); });

      var visible = false;
      var disabled = true;
      const createNewTopic = () => {
        var div = document.querySelector("#newForm");
        // alert('hit  here');
        if (visible) {
          div.style = "display: none";
          visible = false;
        } else {
          div.style = "display: block";
          visible = true;
        }
      }
      document.querySelector("#newButton").addEventListener('click', createNewTopic);
      </script>
      <script>
       const editProfile = () => {
        let editUser = document.querySelector("#signup-username");
        let country = document.querySelector("#example-select");
        let newPassword = document.querySelector("#signup-password");
        let confirmNewPassword = document.querySelector("#signup-password-confirm");
        // alert('hit jhggk here');
        if (disabled) {
          editUser.removeAttribute("disabled");
          country.removeAttribute("disabled");
          newPassword.removeAttribute("disabled");
          confirmNewPassword.removeAttribute("disabled");
          disbled = true;
        }

      }
       let s = document.querySelector("#editButton").addEventListener('click', editProfile);
      

    </script>
    <!-- <script>
      const survey = () =>{
        swal({
            title: "Your next Period",
            
            text: "Starts : ",
            icon: "success",
            button: '<a href="/survey">LINK</a>',
        });
      }
  </script> -->
  </body>
</html>

