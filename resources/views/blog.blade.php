@extends('layouts.structure')

@section('content')

    <!--begin home section -->
    <section class="home-section" id="home">
      <div class="home-section-overlay"></div>

      <!--begin container -->
      <div class="container">
        <!--begin row -->
        <div class="row">
          <!--begin col-md-8-->
          <div class="col-md-8 mx-auto padding-top-50">
            <h1>BLOG</h1>

            <p>
              The latest stories only for you.
              Feel free to explore and read.
            </p>
          </div>
          <!--end col-md-8-->
        </div>
        <!--end row -->
      </div>
      <!--end container -->
    </section>
    <!--end home section -->
         
    <!--begin blog -->
    <section class="section-grey">
      <!--begin container-->
      <div class="container">
        <!--begin row-->
        <div class="row">
          <div class="content content-boxed">
                    <div class="row">
                        <!-- Story -->
                        @if(count($blogPosts) > 0)
                        @foreach($blogPosts as $post)
                            <div class="col-lg-4 js-appear-enabled animated fadeIn" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                                <a class="block block-link-pop" href=" {{route('blog-post.show',$post->slug) }} ">
                                    <img class="img-fluid" src="{{ asset('storage/'.$post->filename.'/'.$post->filename) }}" alt="{{ $post->filename }}">
                                    <div class="block-content">
                                        <h4 class="mb-1"> {{ $post->title}} </h4>
                                        <p class="font-size-sm">
                                            <span class="text-primary">{{ $post->author}}</span> {{ date('M d, Y', strtotime( $post->created_at))}}</em>
                                        </p>
                                        <p class="font-size-sm">
                                            
                                        </p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                        @endif
                        <!-- END Story -->

                        
                        <!-- END Story -->

                    </div>

                    <!-- Pagination -->
                    <!-- Pagination -->
                    {{ $blogPosts->links() }}
                    <!-- END Pagination -->
                </div>
          </div>
          <!--end col-md-12-->
        </div>
        <!--end row-->
    </section>
    <!--end blog -->

@endsection