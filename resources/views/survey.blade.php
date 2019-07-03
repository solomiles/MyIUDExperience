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
                        <input required type=" {{ $survey->type}} "  name="response[]" >                        
                        @elseif($survey->type == 'radio' || $survey->type == 'checkbox')
                        @foreach($survey->options as $option)
                            <div class="custom-control custom-{{$survey->type}}">
                                <input class="custom-control-input" type="{{$survey->type}}" name="response[].{{$option->survey_id}}" id="{{$option->id}}" value="{{ $option->options }}" >
                                <label class="custom-control-label" for="{{$option->id}}">
                                    {{ $option->options }}
                                </label>
                            </div>
                            
                        @endforeach
                        <!-- <div class="custom-control custom-{{$survey->type}}">
                            <input class="custom-control-input radioId" type="{{$survey->type}}" name="response[].{{$option->survey_id}}" id="others[]">
                            <label class="custom-control-label" for="others[]">
                                Others (Please Specify)
                            </label>

                            <input type="text" oninput="checkIt()"  class="form-control otherSpecify" id="fuck[]" name="response[].{{$option->survey_id}}" placeholder="Please Specify">
                        </div>
                        <script>
            function checkIt() {
            var othersValue = document.getElementById('fuck[]').value;
            var radioValue = document.getElementById('others[]');
            
                console.log(othersValue);
                

                radioValue.value = othersValue;
                console.log(radioValue.value);
            }
        </script> -->
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
    // Swal.fire({
    //     title: '<strong>User Demographic Information</strong>',
    //     type: 'info',
    //     html:
    //     'Please be honest when filling this survey. The survey takes less than 5 minutes.',
    //     showCloseButton: true,

    //     focusConfirm: true,
    //     confirmButtonText: 'Start',
    //     animation: false,
    //     customClass: {
    //     popup: 'animated tada'
    //     }
    //     // cancelButtonAriaLabel: 'Thumbs down',
    // })

    // Swal.fire({
    //     title: '<strong>User Demographic Information</strong>',
    //     type: 'info',
    //     html:
    //     'Your responses are important as it will be use to help other'+ 
    //     'woman make informed decision regarding the use of levonorgestrel-releasing intrauterine (hormonal IUD).'+
    //     'Please lets help each other.'+
    //     ' <em>"Correlation does not imply causation but it can start a conversation."</em>',
    //     showCloseButton: true,

    //     focusConfirm: true,

    //     confirmButtonAriaLabel: 'Thumbs up, great!',
    //     animation: false,
    //     customClass: {
    //     popup: 'animated tada'
    //     }
    //     // cancelButtonAriaLabel: 'Thumbs down',
    // })
    Swal.mixin({
        // input: 'text',
        type: 'info',
        confirmButtonText: 'Next',
        showCancelButton: true,
        animation: true,
        customClass: {
        popup: 'animated tada'
        },
        // progressSteps: ['1', '2', '3']
        }).queue([
        {
            title: '<strong>User Demographic Information</strong>',
            text: 'Please be honest when filling this survey. The survey takes less than 5 minutes.'
        },
        {
            title: '<strong>User Demographic Information</strong>',
            text: 'Your responses are important as it will be use to help other woman make informed decision regarding the use of levonorgestrel-releasing intrauterine (hormonal IUD).'
        },
        {
            title: '<strong>User Demographic Information</strong>',
            text: 'Please lets help each other.'
        }
        ]).then( (result) => {
        
            Swal.fire({
            title: 'All Set!',
            html:
            '<em>"Correlation does not imply causation but it can start a conversation."</em>',
            confirmButtonText: 'Start'
            })
            
        }
        )
</script>


</body>
</html>
