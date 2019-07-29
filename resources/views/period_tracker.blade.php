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
        <link href="{{ asset('packages/core/main.css')}}" rel='stylesheet' />
        <link href="{{ asset('packages/daygrid/main.css')}}" rel='stylesheet' />

        <script src="{{ asset('packages/core/main.js')}}"></script>
        <script src="{{ asset('packages/interaction/main.js')}}"></script>
        <script src="{{ asset('packages/daygrid/main.js')}}"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: [ 'interaction', 'dayGrid' ],
            now: new Date(),
            selectable: true,
            selectHelper: true,
            editable: true, // enable draggable events
            aspectRatio: 1.8,
            scrollTime: '00:00', // undo default 6am scrollTime
            header: {
                left: 'today prev,next',
                center: 'title',
                right: 'dayGridMonth'
            },
            defaultView: 'dayGridMonth',
            views: {
                resourceTimelineThreeDays: {
                type: 'resourceTimeline',
                duration: { days: 3 },
                buttonText: '3 days'
                }
            },
            
            // select: function(arg) {
            //     // arg.start: '2019-05-07',
            //     // arg.end: '2019-05-15',
            //     console.log(
            //     'select callback',
            //     arg.startStr,
            //     arg.endStr,
            //     arg.resource ? arg.resource.id : '(no resource)'
            //     );
            // },
            dateClick: function(arg,now,stop) {
        
                now = new Date(arg.date);
                stop = new Date(arg.date);

                now.setDate(now.getDate() + 15);
                stop.setDate(stop.getDate() + 18);

                calendar.select({
                start: now,
                end: stop,
                // resourceId: 'g'
                });
            // swal({
            //     title: "Your next Period",
                
            //     text: "Starts : "+now+
            //     "\nEnds : "+stop,
            //     icon: "success",
            // });
            console.log( now,stop);
            // console.log(
            //   'dateClick',
            //   arg.date,
            //   arg.resource ? arg.resource.id : '(no resource)'
            // );
            },
                // events: [
                //   {
                //     start: '2019-05-10',
                //     end: '2019-05-25',
                //     rendering: 'background'
                //   }
                // ]
            });

            calendar.render();
            // swal("Select your last Period date to calculate your next Period dates.");

        });

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
    <script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    
    
  </body>
</html>

