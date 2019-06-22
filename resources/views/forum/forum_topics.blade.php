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
            <h1>Forum Topics</h1>
            <p>
                Choose or Create a Topic and lets discuss
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
          <div class="content content-full">
          <div class="bg-body-light"></div>
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
                                Explore a category
                            </h1>
                            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-alt">
                                    <li class="breadcrumb-item">
                                        <a class="link-fx text-dark" href=" {{ route('forum.index') }} ">Forum</a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">
                                        <a class="link-fx" href=" {{ route('forum.index') }} ">Topics</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <div class="row">
                        
                        
                        <div id="newForm" style="display: none" class="col-md-12">
                            <div class="col-md-6"> 
                            <!-- @{{ route('support.store') }} -->
                                <form method="post" action=" {{ route('forum.store') }} " role="form">
                                    @csrf
                                    <!-- <input value="PATCH" name="_method" type="hidden" > -->
                                    
                                    <div class="form-group">
                                        <label for="topic" >Topic</label>

                                        <input placeholder="Type Your Topic Here" class="@error('topic') is-invalid @enderror form-control border-input" type="text" required name="topic">
                                        @error('topic')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }} </strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- <div class="form-group">
                                        <label for="issue-description" >Issue Description</label>

                                        <textarea placeholder="Please tell us briefly about the issue" class="form-control border-input" type="text" required rows="5" name="description"></textarea>
                                    </div> -->

                                    <div class="form-group">
                                        

                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        
                    </div><br><hr>
             
                   
                        <div class="block-content">
                        <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Topics</h3>
                            <div class="block-options">
                                
                                <!-- <div class="col-md-6" style="margin-bottom: 25px;"> -->
                                    <button id="newButton" type="button" class="btn btn-info "><i class="fa fa-plus mr-1"></i> New Topic</button>
                                <!-- </div> -->
                                
                            </div>
                        </div>
                            <!-- Topics -->
                            <table class="table table-striped table-borderless table-vcenter">
                                <thead class="border-bottom">
                                    <tr>
                                        <th colspan="2">Welcome</th>
                                        <th class="d-none d-md-table-cell text-center" style="width: 100px;"></th>
                                        <th class="d-none d-md-table-cell text-center" style="width: 100px;">Comments</th>
                                        
                                        <th class="d-none d-md-table-cell" style="width: 200px;">Last Post</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if($topics->count() > 0)
                                    @foreach($topics as $topic)
                                        <tr>
                                            <td class="text-center" style="width: 40px;">
                                                <i class="si si-pin"></i>
                                            </td>
                                            <td>
                                                <a class="font-w600" href=" {{ route('forum-discussion.show', $topic->slug)}} "> {{ $topic->topic }} </a>
                                                <div class="font-size-sm text-muted mt-1">
                                                    created by<a href="#"> {{ $topic->user->username }}  </a>  on  <em> {{ date('M d, Y', strtotime($topic->created_at)) }} </em>
                                                </div>
                                            </td>
                                            <td class="d-none d-md-table-cell text-center">
                                                <!-- <a class="font-w600" href="javascript:void(0)">278</a> -->
                                            </td>
                                            
                                            
                                            <td class="d-none d-md-table-cell text-center">
                                                @if( count($topic->forumcomments) > 0)
                                                <a class="font-w600" href="javascript:void(0)"> {{ count($topic->forumcomments)}} </a>
                                                @else
                                                <a class="font-w600" href="javascript:void(0)"> 0 </a>
                                                @endif
                                            </td>
                                            @foreach($topic->forumcomments as $lastpost)
                                            @if($loop->last)
                                            <td class="d-none d-md-table-cell">
                                                <span class="font-size-sm">by <a href="#"> {{ $lastpost->user->username }} </a><br>on <em>{{ date('M d, Y', strtotime($lastpost->created_at)) }}</em></span>
                                            </td>
                                           @endif
                                           @endforeach
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="7">No topics yet, create a new topic!</td>
                                    </tr>
                                        
                                @endif
                                    
                                   
                                </tbody>
                            </table>
                            <!-- END Topics -->

                            <!-- Pagination -->
                            {{ $topics->links() }}
                            <!-- END Pagination -->
                        </div>
                    </div>     
            </div>
        </div>
</div>
      <!--end container -->
    </section>
    <!--end section-grey -->

  @endsection