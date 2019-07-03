@extends('layouts.structure')

  @section('content')
    <!--begin home section -->
    <section   class="home-section">
      <div class="home-section-overlay"></div>

      <!--begin container -->
      <div class="container">
        <!--begin row -->
        <div class="row">
          <!--begin col-md-8-->
          <div class="col-md-8 mx-auto padding-top-50">
            <h1>Welcome to {{ config('app.name','MYIUD')}}</h1>

            <p>
              Explore our free Personalized Tools to Track, Monitor, and Manage
              your cycles
            </p>
            @guest
            <a href=" {{ route('register') }} " class="btn-white scrool">{{ __('Join Now')}}</a>
            @endguest
          </div>
          <!--end col-md-8-->
        </div>
        <!--end row -->
      </div>
      <!--end container -->
    </section>
    <!--end home section -->
    @auth
    @if($hasCompletedSurvey == '')
    <script>
      const survey = () =>{
        Swal.fire({
          title: '<strong>Welcome</strong>',
          type: 'info',
          html:
            'Please click <b>start survey</b>, ' +
            'to fil out the survey form'+'<br>It takes less than 5 minutes. <em>Your feedback is important to us.</em> ' +'<br>'+
            '<a class="btn btn-primary" href="/survey"><i class="fa"></i>Start survey</a>',
          confirmButtonAriaLabel: 'Thumbs up, great!',
          showCloseButton: true,
          showConfirmButton: false,
          // showCancelButton: true,
          // focusConfirm: true,
          cancelButtonText:
          'Not now!',
          animation: false,
          customClass: {
            popup: 'animated tada'
          }
          // cancelButtonAriaLabel: 'Thumbs down',
        })
      }
  </script>
   @endif
    @if(Session::has('success'))
      <script>
        Swal.fire({

        title: '<strong>User Demographic Information</strong>',
        type: 'success',
        html:
            'Thanks For Sharing Your Experience With Us',
        // showCloseButton: true,
        focusConfirm: false,
        confirmButtonText:
            '<i class="fa fa-thumbs-up"></i>Continue To MyIUDExperience.com',
        // confirmButtonAriaLabel: 'Thumbs up, great!',
        })
    </script>
    @endif
  @endauth
    <!--begin section-grey -->
    <section class="section-grey section-top-border" >
      <!--begin container -->
      <div class="container">
        <!--begin row -->
        <div class="row">
          <!--begin col-md-12 -->
          <div class="col-md-12 text-center">
            <h2 class="section-title">
              Integrated solution to help woman <br>make informed decision on IUD
            </h2>

            <p class="section-subtitle">
              To help women make informed decision with regards to IUDs
              (hormonal IUD Merina and copper IUD Paragard),
            </p>
          </div>
          <!--end col-md-12 -->

          <!--begin col-md-4 -->
          <div class="col-md-4">
            <div class="main-services">
              <img src="images/main-service1.png" class="width-100" alt="pic" />

              <h3>Period & Symptom Tracker</h3>

              <p>
                Curabitur quam etsum lacus netsum nulat iaculis ets vitae etsum
                nisle varius sed aliquam ets vitae netsum.
              </p>

              <a href="{{ route('register') }}" class="btn-blue-line small scrool">Learn More</a>
            </div>
          </div>
          <!--end col-md-4 -->

          <!--begin col-md-4 -->
          <div class="col-md-4">
            <div class="main-services">
              <img onload="survey()" src="images/main-service1.png" class="width-100" alt="pic" />

              <h3>Join Our Community</h3>

              <p>
                Curabitur quam etsum lacus netsum nulat iaculis ets vitae etsum
                nisle varius sed aliquam ets vitae netsum.
              </p>

              <a href="{{ route('forum.index') }}" class="btn-blue-line small scrool">Learn More</a>
            </div>
          </div>
          <!--end col-md-4 -->

          <!--begin col-md-4 -->
          <div class="col-md-4">
            <div class="main-services">
              <img src="images/main-service1.png" class="width-100" alt="pic" />

              <h3>Donate</h3>

              <p>
                Curabitur quam etsum lacus netsum nulat iaculis ets vitae etsum
                nisle varius sed aliquam ets vitae netsum.
              </p>

              <a href="#" class="btn-blue-line small scrool">Connect</a>
            </div>
          </div>
          <!--end col-md-4 -->
        </div>
        <!--end row -->
      </div>
      <!--end container -->
    </section>
    <!--end section-grey -->

    <!--begin section-blue -->
    <section class="section-grey">
      <!--begin container -->
      <div class="container">
        <!--begin row -->
        <div class="row">
          <!--begin col-md-6-->
          <div class="col-md-6">
            
          </div>
          <!--end col-md-6-->

          <!--begin col-md-6-->
          <div class="col-md-6 padding-top-30 padding-left-20">
            <h2>Real-time reporting on your cycles.</h2>

            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est voluptas, omnis vero tempore 
              velit optio maxime dicta minima reprehenderit? 
              Nam at et quas neque officiis? Libero maiores dolorem nam saepe?
            </p>

            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est voluptas, omnis vero tempore 
                velit optio maxime dicta minima reprehenderit? 
                Nam at et quas neque officiis? Libero maiores dolorem nam saepe?
            </p>
          </div>
          <!--end col-md-6-->
        </div>
        <!--end row -->
      </div>
      <!--end container -->
    </section>
    <!--end section-blue -->

    <!--begin blog -->
    <section class="section-blue">
      <!--begin container-->
      <div class="container">
        <!--begin row-->
        <div class="row">
          <!--begin col-md-12-->
          <div class="col-md-12 text-center">
            <h2 class="section-title">Our Blog</h2>

            <p class="section-subtitle">
              Latest news, tips and best practices.
            </p>
          </div>
          <!--end col-md-12-->
        </div>
        <!--end row-->

        <!--begin row-->
        <div class="row">
          @if(count($blogPosts) > 0)
              @foreach($blogPosts as $post)
          <!--begin col-sm-4 -->
          <div class="col-md-4">
            <!--begin blog-item -->
                
                <div class="blog-item">
                  <a href="{{route('blog-post.show',$post->slug) }} " >
                  <!--begin popup image -->
                  <div class="popup-wrapper">
                    <div class="popup-gallery">
                      <a href="{{route('blog-post.show',$post->slug) }}">
                        <img
                          src="{{ asset('storage/'.$post->filename.'/'.$post->filename) }}"
                          class="width-100"
                          alt="{{ $post->filename }}"
                        />
                        <span class="eye-wrapper2"
                          ></span>
                      </a>
                    </div>
                  </div>
                  <!--end popup image -->

                  <!--begin blog-item_inner -->
                  <div class="blog-item-inner">
                    <h3 class="blog-title">
                      <a href="{{route('blog-post.show',$post->slug) }}">{{ $post->title}}</a>
                    </h3>

                    <a href="#" class="blog-icons">
                      <i class="fa fa-user"></i> {{ $post->author}}
                    </a>

                    <a href="#" class="blog-icons last">
                      <i class="fa fa-tags"></i> {{ date('M d, Y', strtotime( $post->created_at))}}
                    </a>

                    <!-- <p>
                      Quis autem velis ets reprehender net etid quiste voluptate
                      velite esse quam nihis etsa sedit netsid varias.
                    </p> -->
                  </div>
                  <!--end blog-item-inner -->
                  </a>
                </div>
              
            <!--end blog-item -->
          </div>
          <!--end col-sm-4-->

           @endforeach
            @endif
        <!--end row-->
      </div>
      <!--end container-->
    </section>
    <!--end blog -->
  
    
@endsection   