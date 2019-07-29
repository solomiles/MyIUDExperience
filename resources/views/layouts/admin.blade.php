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

        <title>{{ config('app.name', 'MYIUD') }} | Admin</title>
    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('assets/media/favicons/favicon.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/media/favicons/favicon-192x192.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/media/favicons/apple-touch-icon-180x180.png')}}">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and OneUI framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/oneui.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/summernote/summernote-bs4.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/simplemde/simplemde.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/datatables/dataTables.bootstrap4.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css')}}">
        <script src="{{ asset('assets/tinymce/tinymce.min.js')}}"></script>
        <script type="text/javascript">
            tinymce.init({
                selector: '#mytextarea'
            });
        </script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
    <!-- END Stylesheets -->
</head>

<body>
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed">
        <nav id="sidebar" aria-label="Main Navigation">
            <!-- Side Header -->
            <div class="content-header bg-white-5">
                <!-- Logo -->
                <a class="font-w600 text-dual" href=" {{ url('/')}} ">
                    <i class="fa fa-circle-notch text-primary"></i>
                    <span class="smini-hide">
                        <span class="font-w700 font-size-h5">MYIUD</span>
                    </span>
                </a>
                <!-- END Logo -->
            </div>
            <!-- END Side Header -->

            <!-- Side Navigation -->
            <div class="content-side content-side-full">
                <ul class="nav-main">
                    <li class="nav-main-item">
                        <a class="nav-main-link" href=" {{ url('admin')}} ">
                            <i class="nav-main-link-icon si si-speedometer"></i>
                            <span class="nav-main-link-name">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{ url('manage-users')}}">
                            <i class="nav-main-link-icon si si-users"></i>
                            <span class="nav-main-link-name">Manage User Account</span>
                        </a>
                    </li>
                    <!-- <li class="nav-main-item">
                        <a class="nav-main-link" href="{{ url('add-survey-questions')}}">
                            <i class="nav-main-link-icon si si-user-female"></i>
                            <span class="nav-main-link-name">Manage Survey</span>
                        </a>
                    </li> -->
                    
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <i class="nav-main-link-icon si si-note"></i>
                            <span class="nav-main-link-name">Manage Survey</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{ url('add-survey-questions')}}">
                                    <span class="nav-main-link-name">Add Survey Questions</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="#">
                                    <span class="nav-main-link-name">Manage Survey Response</span>
                                </a>
                            </li>
                            <!-- <li class="nav-main-item">
                                <a class="nav-main-link" href="{{ url('add-new-category')}}">
                                    <span class="nav-main-link-name">Add Category</span>
                                </a>
                            </li> -->
                        </ul>
                    </li>

                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <i class="nav-main-link-icon si si-bulb"></i>
                            <span class="nav-main-link-name">Manage Symptoms</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{ url('manage-symptoms')}}">
                                    <i class="nav-main-link-icon si si-user-female"></i>
                                    <span class="nav-main-link-name">Add Symptoms</span>
                                </a>
                            </li>
                            <!-- <li class="nav-main-item">
                                <a class="nav-main-link" href="{{ url('add-new-category')}}">
                                    <span class="nav-main-link-name">Add Category</span>
                                </a>
                            </li> -->
                        </ul>
                    </li>
                    

                    <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-note"></i>
                                <span class="nav-main-link-name">Blog Post</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href=" {{ url('manage-blog')}} ">
                                        <span class="nav-main-link-name">All Post</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="{{ route('manage-blog.create')}}">
                                        <span class="nav-main-link-name">Add New</span>
                                    </a>
                                </li>
                                <!-- <li class="nav-main-item">
                                    <a class="nav-main-link" href="{{ url('add-new-category')}}">
                                        <span class="nav-main-link-name">Add Category</span>
                                    </a>
                                </li> -->
                            </ul>
                        </li>
                </ul>
            </div>
            <!-- END Side Navigation -->
        </nav>
        <!-- END Sidebar -->

        <!-- Header -->
        <header id="page-header">
            <!-- Header Content -->
            <div class="content-header">
                <!-- Left Section -->
                <div class="d-flex align-items-center">
                    <!-- Toggle Sidebar -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                    <button type="button" class="btn btn-sm btn-dual mr-2 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                    <!-- END Toggle Sidebar -->
                </div>
                <!-- END Left Section -->

                <!-- Right Section -->
                <div class="d-flex align-items-center">
                    <!-- User Dropdown -->
                    <div class="dropdown d-inline-block ml-2">
                        <button type="button" class="btn btn-sm btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded" src="{{ asset('assets/media/avatars/avatar10.jpg')}}" alt="Header Avatar" style="width: 18px;">
                            <span class="d-none d-sm-inline-block ml-1"> {{ Auth::user()->username }} </span>
                            <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="page-header-user-dropdown">
                            <div class="p-3 text-center bg-primary">
                                <img class="img-avatar img-avatar48 img-avatar-thumb" src="assets/media/avatars/avatar10.jpg" alt="">
                            </div>
                            <div class="p-2">
                                <h5 class="dropdown-header text-uppercase">User Options</h5>

                                <a class="dropdown-item d-flex align-items-center justify-content-between" href=" {{ url('profile') }} ">
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
                <!-- END Right Section -->
            </div>
            <!-- END Header Content -->
        </header>
        <!-- END Header -->


        @yield('content')


        <!-- Footer -->
        <footer id="page-footer" class="bg-body-light">
            <div class="content py-3">
                <div class="row font-size-sm">

                    <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-left">
                        <a class="font-w600" href=" {{ url('/')}} " target="_blank"> {{ config('app.name', 'MYIUD') }} </a> &copy; <span data-toggle="year-copy"></span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END Footer -->

    </div>
    <!-- END Page Container -->

    <script src="{{ asset('assets/js/oneui.core.min.js')}}"></script>

    <!--
            OneUI JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
    <script src="{{ asset('assets/js/oneui.app.min.js')}}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('assets/js/plugins/summernote/summernote-bs4.js')}}"></script>
          <script src="{{ asset('assets/js/plugins/ckeditor/ckeditor.js')}}"></script>
          <script src="{{ asset('assets/js/plugins/simplemde/simplemde.min.js')}}"></script>

          <!-- Page JS Helpers (Summernote + CKEditor + SimpleMDE plugins) -->
          <script>jQuery(function(){ One.helpers(['summernote', 'ckeditor', 'simplemde']); });</script>

          <!-- Page JS Plugins -->
       <script src="{{ asset('assets/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
       <script src="{{ asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
       <script src="{{ asset('assets/js/plugins/datatables/buttons/dataTables.buttons.min.js')}}"></script>
       <script src="{{ asset('assets/js/plugins/datatables/buttons/buttons.print.min.js')}}"></script>
       <script src="{{ asset('assets/js/plugins/datatables/buttons/buttons.html5.min.js')}}"></script>
       <script src="{{ asset('assets/js/plugins/datatables/buttons/buttons.flash.min.js')}}"></script>
       <script src="{{ asset('assets/js/plugins/datatables/buttons/buttons.colVis.min.js')}}"></script>

       <!-- Page JS Code -->
       <script src="{{ asset('assets/js/pages/be_tables_datatables.min.js')}}"></script>
       <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
       <script>
           $(document).ready(function(){
            // for add new type button
            var maxField = 30; //Input fields increment limitation
            var addButton = $('#addOptions'); //Add button selector
            
            var wrapper = $('.field_wrapper'); //Input field wrapper
            // var fieldHTML = '<div class="form-check"><input class="form-check-input remove_button" type="radio" id="#" name="type" value="'+new_type+'" ><label class="form-check-label" for="example-radios-default1">'+new_type+'</label></div>';
            // '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button"><img src="remove-icon.png"/></a></div>'; //New input field html 
            var x = 1; //Initial field counter is 1
            
            //Once add button is clicked
            $(addButton).click(function(){
                //Check maximum number of input fields

                // var new_type = $('.new_type').val();
                var fieldHTML = '<div class="col-md-4 mb-3"><label for="validationServer01">Option '+x+'</label><input type="text" name="options[]" class="form-control is-valid"  id="validationServer01" placeholder="Please Type In Options '+x+'"></div>';

                if(x < maxField ){ 
                    x++; //Increment field counter
                    $(wrapper).append(fieldHTML); //Add field html
                }
            });
            
            //Once remove button is clicked
            $(wrapper).on('click', '.remove_button', function(e){
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--;
                //Decrement field counter
            });
            // end add new type button
        });
       </script>

</body>

</html>
