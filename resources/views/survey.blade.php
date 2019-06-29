<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="MYIUD Device Survey ">
    <meta name="author" content="Myiud">
    <!-- Font Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />

    <title>{{ config('app.name', 'MYIUD') }} Survey Page | powered by Myiud</title>
    <!-- Loading Bootstrap -->   
     <!-- <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" /> -->

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" /> -->

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css"> -->

    <!-- Styles -->
    
    
    
    <link href="{{ asset('assets/multistepform/css/style.css')}}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .custom-control {
            position: relative;
            display: block;
            min-height: 1.44rem;
            padding-left: 1.5rem;
            text-align: -webkit-auto;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->username }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
<div class="container">
<!-- MultiStep Form -->
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form id="msform" action="{{ route('survey.store') }} " method="post">
            @csrf
            <!-- progressbar -->
            <ul id="progressbar">
            @foreach($surveyQuestions as $survey)
                
                <li class=" @if($loop->first) active @endif">
                </li>
            @endforeach
            </ul>
            <!-- fieldsets -->
            @if(count($surveyQuestions) > 0)
            @foreach($surveyQuestions as $survey)
                
                    <fieldset>
                        <h2 class="fs-title"> {{ $survey->question }} </h2>
                        <h3 class="fs-subtitle">Please answer correctly</h3>
                        <input type="" hidden value=" {{$survey->id}} "  name="questionId[]" >
                        @if($survey->type == 'text')
                        <input type=" {{ $survey->type}} "  name="response[]" >                        
                        @elseif($survey->type == 'radio' || $survey->type == 'checkbox')
                        @foreach($survey->options as $option)
                            @if($option->option_one != null)
                            <div class="custom-control custom-{{$survey->type}}">
                                <input class="custom-control-input" type="{{$survey->type}}" name="response[].{{$option->survey_id}}" id="{{$option->option_one}}1" value="{{ $option->option_one }}" >
                                <label class="custom-control-label" for="{{$option->option_one}}1">
                                    {{ $option->option_one }}
                                </label>
                            </div>
                            @endif
                            @if($option->option_two != null)
                            <div class="custom-control custom-{{$survey->type}}">
                                <input class="custom-control-input" type="{{$survey->type}}" name="response[].{{$option->survey_id}}" id="{{$option->option_two}}2" value="{{ $option->option_two }}" >
                                <label class="custom-control-label" for="{{$option->option_two}}2">
                                    {{ $option->option_two }}
                                </label>
                            </div>
                            @endif
                            @if($option->option_three != null)
                            <div class="custom-control custom-{{$survey->type}}">
                                <input class="custom-control-input" type="{{$survey->type}}" name="response[].{{$option->survey_id}}" id="{{$option->option_three}}3" value="{{ $option->option_three }}" >
                                <label class="custom-control-label" for="{{$option->option_three}}3">
                                    {{ $option->option_three }}
                                </label>
                            </div>
                            @endif
                            @if($option->option_four != null)
                            <div class="custom-control custom-{{$survey->type}}">
                                <input class="custom-control-input" type="{{$survey->type}}" name="response[].{{$option->survey_id}}" id="{{$option->option_four}}4" value="{{ $option->option_four }}" >
                                <label class="custom-control-label" for="{{$option->option_four}}4">
                                    {{ $option->option_four }}
                                </label>
                            </div>
                            @endif
                            @if($option->option_five != null)
                            <div class="custom-control custom-{{$survey->type}}">
                                <input class="custom-control-input" type="{{$survey->type}}" name="response[].{{$option->survey_id}}" id="{{$option->option_five}}5" value="{{ $option->option_five }}" >
                                <label class="custom-control-label" for="{{$option->option_five}}5">
                                    {{ $option->option_five }}
                                </label>
                            </div>
                            @endif
                            @if($option->option_six != null)
                            <div class="custom-control custom-{{$survey->type}}">
                                <input class="custom-control-input" type="{{$survey->type}}" name="response[].{{$option->survey_id}}" id="{{$option->option_six}}6" value="{{ $option->option_six }}" >
                                <label class="custom-control-label" for="{{$option->option_six}}6">
                                    {{ $option->option_six }}
                                </label>
                            </div>
                            @endif
                            @if($option->option_seven != null)
                            <div class="custom-control custom-{{$survey->type}}">
                                <input class="custom-control-input" type="{{$survey->type}}" name="response[].{{$option->survey_id}}" id="{{$option->option_seven}}7" value="{{ $option->option_seven }}" >
                                <label class="custom-control-label" for="{{$option->option_seven}}7">
                                    {{ $option->option_seven }}
                                </label>
                            </div>
                            @endif
                            @if($option->option_eight != null)
                            <div class="custom-control custom-{{$survey->type}}">
                                <input class="custom-control-input" type="{{$survey->type}}" name="response[].{{$option->survey_id}}" id="{{$option->option_eight}}8" value="{{ $option->option_eight }}" >
                                <label class="custom-control-label" for="{{$option->option_eight}}8">
                                    {{ $option->option_eight }}
                                </label>
                            </div>
                            @endif
                            @if($option->option_nine != null)
                            <div class="custom-control custom-{{$survey->type}}">
                                <input class="custom-control-input" type="{{$survey->type}}" name="response[].{{$option->survey_id}}" id="{{$option->option_nine}}9" value="{{ $option->option_nine }}" >
                                <label class="custom-control-label" for="{{$option->option_nine}}9">
                                    {{ $option->option_nine }}
                                </label>
                            </div>
                            @endif
                            @if($option->option_ten != null)
                            <div class="custom-control custom-{{$survey->type}}">
                                <input class="custom-control-input" type="{{$survey->type}}" name="response[].{{$option->survey_id}}" id="{{$option->option_ten}}10" value="{{ $option->option_ten }}" >
                                <label class="custom-control-label" for="{{$option->option_ten}}10">
                                    {{ $option->option_ten }}
                                </label>
                            </div>
                            @endif
                            @if($option->option_eleven != null)
                            <div class="custom-control custom-{{$survey->type}}">
                                <input class="custom-control-input" type="{{$survey->type}}" name="response[].{{$option->survey_id}}" id="{{$option->option_eleven}}11" value="{{ $option->option_eleven }}" >
                                <label class="custom-control-label" for="{{$option->option_eleven}}11">
                                    {{ $option->option_eleven }}
                                </label>
                            </div>
                            @endif
                            @if($option->option_twelve != null)
                            <div class="custom-control custom-{{$survey->type}}">
                                <input class="custom-control-input" type="{{$survey->type}}" name="response[].{{$option->survey_id}}" id="{{$option->option_twelve}}12" value="{{ $option->option_twelve }}" >
                                <label class="custom-control-label" for="{{$option->option_twelve}}12">
                                    {{ $option->option_twelve }}
                                </label>
                            </div>
                            @endif
                            @if($option->option_thirteen != null)
                            <div class="custom-control custom-{{$survey->type}}">
                                <input class="custom-control-input" type="{{$survey->type}}" name="response[].{{$option->survey_id}}" id="{{$option->option_thirteen}}13" value="{{ $option->option_thirteen }}" >
                                <label class="custom-control-label" for="{{$option->option_thirteen}}13">
                                    {{ $option->option_thirteen }}
                                </label>
                            </div>
                            @endif
                        @endforeach
                        @endif
                        @if($loop->first)
                        <input type="button" name="next" class="next action-button" value="Next">
                        @elseif($loop->last)
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                        <input type="submit" name="submit" class="submit action-button" value="Submit"/>
                        @else
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                        <input type="button" name="next" class="next action-button" value="Next">
                        @endif
                    </fieldset>
            
            @endforeach
        @endif
           
            
           
        </form>
        

    </div>
<footer> 
    </div>
        <div class="dme_link">
            <p><a href="#" >Abardon Survey</a></p>
        </div>
    <!-- /.MultiStep Form -->
    </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script src="{{ asset('js/bootstrap.min.js') }}" ></script>

<!-- <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script> -->
<!-- <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js')}}"></script> -->
<script src="{{ asset('assets/multistepform/js/msform.js')}}"></script>
<script>
    Swal.fire({
        title: '<strong>User Demographic Information</strong>',
        type: 'info',
        html:
        'Please be honest when filling this survey. The survey takes less than 5 minutes.'+ 
        'Your responses are important as it will be use to help other'+ 
        'woman make informed decision regarding the use of levonorgestrel-releasing intrauterine (hormonal IUD).'+
        'Please lets help each other.'+
        '*Correlation does not imply causation but it can start a conversation.*',
        showCloseButton: true,
        showCancelButton: true,
        focusConfirm: true,
        cancelButtonText:
        '<a style="color:#fff;"><i class="fa"></i>Start</a>',
        confirmButtonAriaLabel: 'Thumbs up, great!',
        animation: false,
        customClass: {
        popup: 'animated tada'
        }
        // cancelButtonAriaLabel: 'Thumbs down',
    })
</script>


</body>
</html>
