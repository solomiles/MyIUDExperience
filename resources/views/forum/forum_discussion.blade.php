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
            <h1>Forum</h1>
            <p>
            Community forum provides a support system of women to discuss your experience with IUD, and learn from those who have been there.
            </p>
          </div>
          <!--end col-md-8-->
        </div>
        <!--end row -->
      </div>
      <!--end container -->
    </section>
    <!--end home section -->

    <!--begin section-grey -->
    <section class="section-grey section-top-border">
      <!--begin container -->
      <div class="container">
        <!--begin row -->
        <div class="row">
          <!--begin col-md-12 -->
        <div class="col-md-12">
          <!-- Hero -->
            <div class="content content-full">
                @if (count($errors) > 0)

                    <div class="alert alert-danger">

                        <span class="text-danger"><strong >Whoops!</strong> There were some problems with your input.</span><br><br>

                        <ul>

                        @foreach ($errors->all() as $message)

                            <li class="text-danger">{{ $message }}</li>

                        @endforeach

                        </ul>

                    </div>


                @endif
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif
                        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                            <h1 class="flex-sm-fill h3 my-2">
                                Discussion
                            </h1>
                            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-alt">
                                    <li class="breadcrumb-item">
                                        <a class="link-fx text-dark" href=" {{ url('forum')}} ">Forum</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a class="link-fx text-dark" href=" {{ url('forum')}} ">Topics</a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">
                                        <a class="link-fx" href="">Discussion</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Page Content -->
                <div class="content">
                    <!-- Discussion -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title"> {{ $comments->topic}} </h3>
                            <div class="block-options">
                                <a class="btn-block-option mr-2" href="#forum-reply-form" data-toggle="scroll-to">
                                    <i class="fa fa-reply mr-1"></i> Reply
                                </a>
                                <!-- <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button> -->
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <table class="table table-borderless">
                                <tbody>
                                @if($comments->count() > 0)
                                   @foreach($comments->forumcomments as $comment)
                                    <tr class="table-active">
                                        <td class="d-none d-sm-table-cell"></td>
                                        <td class="font-size-sm text-muted">
                                            
                                            <a href="#">{{ $comment->user->username }}</a>
                                            
                                             on <em> {{ date('M d, Y', strtotime($comment->created_at)) }} </em>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="d-none d-sm-table-cell text-center" style="width: 140px;">
                                            <p>
                                                <a href="be_pages_generic_profile.html">
                                                    <img class="img-avatar" src="assets/media/avatars/avatar11.jpg" alt="">
                                                </a>
                                            </p>
                                            <!-- <p class="font-size-sm">432 Posts<br>Level 4</p> -->
                                        </td>
                                        <td>
                                            <p> {{ $comment->comments }} </p>
                                            <hr>
                                            <!-- <p class="font-size-sm text-muted">Be yourself; everyone else is already taken.</p> -->
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                        <tr>
                                            <td colspan="7">No comments yet, be the first to comment!</td>
                                        </tr>
                                    @endif
                                
                                    
                                    <tr>
                                        <td class="d-none d-sm-table-cell text-center">
                                            <!-- <p>
                                                <a href="be_pages_generic_profile.html">
                                                    <img class="img-avatar" src="assets/media/avatars/avatar10.jpg" alt="">
                                                </a>
                                            </p>
                                            <p class="font-size-sm">218 Posts<br>Level 10</p> -->
                                        </td>
                                        <td>
                                            <form action=" {{ route('forum-discussion.store')}} " method="POST" >
                                                @csrf
                                                <div class="form-group">
                                                    <input type="hidden" value=" {{ $comments->id }} " name="topic_id">
                                                    <!-- CKEditor (js-ckeditor id is initialized in Helpers.ckeditor()) -->
                                                    <!-- For more info and examples you can check out http://ckeditor.com -->
                                                    <textarea id="js-ckeditor" name="comments"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="fa fa-reply mr-1"></i> Reply
                                                    </button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END Discussion -->
                </div>
                <!-- END Page Content -->

        </div>
        </div>
        </section>
        
@endsection
    