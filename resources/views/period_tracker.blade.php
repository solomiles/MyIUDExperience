<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="Track Period" >
        <meta name="description" content="Period Tracker, Tracker Next Period" >
        <meta name="author" content="Myiud">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} | Period Tracker</title>
        <!-- Loading Bootstrap -->
        <!-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" /> -->
        <!-- Scripts -->
        <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

        <!-- Loading Template CSS -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
        <!-- <link href="{{ asset('css/animate.css') }}" rel="stylesheet" /> -->
        <!-- <link href="{{ asset('css/style-magnific-popup.css') }}" rel="stylesheet" /> -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/oneui.min.css')}}">
        <!-- Awesome Fonts -->
        <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" />

        <!-- Fonts -->
        <link
        href="https://fonts.googleapis.com/css?family=Dosis:500,600"
        rel="stylesheet"
        />
        
        <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,700"
        rel="stylesheet"
        />

        <!-- Font Favicon -->
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" integrity="sha256-4iQZ6BVL4qNKlQ27TExEhBN1HFPvAvAMbFavKKosSWQ=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script>
  $(document).ready(function () {
         
        var SITEURL = "{{url('/')}}";
        
        // console.log(token);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
 
        var calendar = $('#calendar').fullCalendar({
            editable: true,
            events: "{{url('period-tracker')}}",
            displayEventTime: true,
            editable: true,
            eventRender: function (event, element, view) {
                if (event.allDay === 'true') {
                    event.allDay = true;
                } else {
                    event.allDay = false;
                }
            },
            selectable: true,
            selectHelper: true,
            select: function (start, end, allDay) {
                var title = prompt('Event Title:');
 
                if (title) {
                    var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
                  // console.log(start);
                    $.ajax({
                        url: "{{url('period-tracker/store')}}",
                        data: { title: title, start: start, end: end},
                        type: "POST",
                        dataType: "json",
                        beforeSend(xhr,data){
                          console.log(data);
                        },
                        success: function (data) {
                            displayMessage("Added Successfully");
                            
                        }
                    });
                    calendar.fullCalendar('renderEvent',
                            {
                                title: title,
                                start: start,
                                end: end,
                                allDay: allDay
                            },
                    true
                            );
                }
                calendar.fullCalendar('unselect');
            },
             
            eventDrop: function (event, delta) {
                        var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                        var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                        $.ajax({
                            url: "{{url('period-tracker/update')}}",
                            data: {title: event.title,start: start ,end: end, id: + event.id},
                            type: "POST",
                            success: function (response) {
                                displayMessage("Updated Successfully");
                            }
                        });
                    },
            eventClick: function (event) {
                var deleteMsg = confirm("Do you really want to delete?");
                if (deleteMsg) {
                    $.ajax({
                        type: "POST",
                        url: "{{url('period-tracker/delete')}}",
                        data: {id: event.id},
                        success: function (response) {
                            if(parseInt(response) > 0) {
                                $('#calendar').fullCalendar('removeEvents', event.id);
                                displayMessage("Deleted Successfully");
                            }
                        }
                    });
                }
            }
 
        });
  });
 
  function displayMessage(message) {
    // $(".response").html("<div class='success'>"+message+"</div>");
    Swal.fire({
                // title: '<strong>Welcome</strong>',
                type: 'success',
                html:
                  message,
                // confirmButtonAriaLabel: 'Thumbs up, great!',
                showCloseButton: true,
                showConfirmButton: true,
                // showCancelButton: true,
                focusConfirm: true,
                // cancelButtonText:
                // 'Not now!',
                animation: false,
                customClass: {
                  popup: 'animated tada'
                }
                // cancelButtonAriaLabel: 'Thumbs down',
              })
    // setInterval(function() { $(".success").fadeOut(); }, 6000);
  }
</script>
        <style>

            body {
                margin: 0;
                padding: 0;
                font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
                font-size: 14px;
            }

            #calendar {
                max-width: 900px;
                margin: 50px auto;
            }

        </style>    
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
                {{ config('app.name', 'MYIUD') }}
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
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
            </button>
            <!--end navbar-toggler -->

            <!--begin navbar-collapse -->
            <div class="navbar-collapse collapse" id="navbarCollapse">
              <!--begin navbar-nav -->
              <ul class="navbar-nav ml-auto">
                <li><a href=" {{ url('/') }} ">Home</a></li>

                <li><a href=" {{ url('about') }} ">About MYIUD</a></li>

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
                                <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{ asset('assets/media/avatars/avatar10.jpg')}}" alt="">
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
    <!--end header --><br><br><br>
    <div class="container">
        <div class="row">
        <!-- <div class="response">
            <script>
                    
            </script>
        </div> -->
      <div id='calendar'></div>
        </div>
    </div>
    

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
    <!-- <script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script> -->
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    
    
  </body>
</html>

