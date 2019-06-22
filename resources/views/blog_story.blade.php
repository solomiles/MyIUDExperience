@extends('layouts.structure')

@section('content')         
    <!--begin blog -->
    <section class="section-grey">
      <!--begin container-->
      <div class="container">
        <!--begin row-->
        <div class="row">
                    <div class="content content-boxed">
                        <div class="text-center font-size-sm push">
                            <span class="d-inline-block py-2 px-4 bg-body-light rounded">
                                <a class="link-effect font-w600" href="#">{{ $blog_story->author }}</a> {{ date('M d, Y', strtotime($blog_story->created_at)) }} <em>{{ date('h:i:s a', strtotime($blog_story->created_at)) }}</em>
                            </span>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-sm-8">
                                <!-- Story -->
                                <article class="story">
                                    
                                    <!-- Magnific Popup (.js-gallery class is initialized in Helpers.magnific()) -->
                                    <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
                                    <div class="row gutters-tiny items-push js-gallery push img-fluid-100 js-gallery-enabled">
                                        <div class="col-6 animated fadeIn">
                                            <a class="img-link img-link-simple img-link-zoom-in img-lightbox" target="_blank" href="{{asset('storage/'.$blog_story->filename.'/'.$blog_story->filename)}}">
                                                <img class="img-fluid" src="{{ asset('storage/'.$blog_story->filename.'/'.$blog_story->filename) }}" alt="">
                                            </a>
                                        </div>
                                        <div class="col-6 animated fadeIn">
                                            <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="assets/media/photos/photo22@2x.jpg">
                                                <img class="img-fluid" src="assets/media/photos/photo22.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- END Gallery -->

                                     <?= $blog_story->text ?>
                                    
                                </article>
                                <!-- END Story -->
                        </div>
                    </div>
                </div>
        </div>
        <!--end row-->
    </section>
    <!--end blog -->
@endsection