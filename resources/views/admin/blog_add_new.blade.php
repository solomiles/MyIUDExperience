@extends('layouts.admin')

@section('content')

        <!-- Main Container -->
        <main id="main-container">

            <!-- Hero -->
            <div class="bg-body-light">
                <div class="content content-full">
                    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                        <h1 class="flex-sm-fill h3 my-2">
                            Add New
                        </h1>
                        <!--<nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-alt">
                                <li class="breadcrumb-item">Generic</li>
                                <li class="breadcrumb-item" aria-current="page">
                                    <a class="link-fx" href="">Blank (Block)</a>
                                </li>
                            </ol>
                        </nav><!-->
                    </div>
                </div>
            </div>
            <!-- END Hero -->

            <!-- Page Content -->
            <div class="content">
                <!-- Your Block -->
                <div class="block">
                
                    <div class="block-header">
                        <h3 class="block-title">
                            Create New Post
                        </h3>
                        </div>
                    <div class="block-content">
                      <form action=" {{ route('manage-blog.store')}} " method="POST" enctype="multipart/form-data"  >
                          @csrf
                              <div class="row">
                                  <div class="col-lg-8">
                                      <div class="form-group">
                                          <label for="example-text-input">Title</label>
                                          <input type="text" class="form-control" id="example-text-input" name="title" placeholder="Title">
                                      </div>

                                      <!-- <div class="form-group"> -->
                                          <!-- Summernote Container -->
                                          <textarea name="text" placeholder="Loading......" id="mytextarea"></textarea>
                                        <!-- </div> -->



                               <!-- <div class="form-group">
                                      <label class="d-block">Categories</label>
                                      <div class="custom-control custom-checkbox custom-control-lg custom-control-inline">
                                          <input type="checkbox" class="custom-control-input" id="example-cb-custom-inline-lg1" name="example-cb-custom-inline-lg1" checked="">
                                          <label class="custom-control-label" for="example-cb-custom-inline-lg1">Pregnant</label>
                                      </div>
                                      <div class="custom-control custom-checkbox custom-control-lg custom-control-inline">
                                          <input type="checkbox" class="custom-control-input" id="example-cb-custom-inline-lg2" name="example-cb-custom-inline-lg2">
                                          <label class="custom-control-label" for="example-cb-custom-inline-lg2">Child Control</label>
                                      </div>
                                      <div class="custom-control custom-checkbox custom-control-lg custom-control-inline">
                                          <input type="checkbox" class="custom-control-input" id="example-cb-custom-inline-lg3" name="example-cb-custom-inline-lg3">
                                          <label class="custom-control-label" for="example-cb-custom-inline-lg3">Birth Control</label>
                                      </div>
                                  </div> -->

                                  </div>
                                  <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="example-text-input">Author Name</label>
                                        <input type="text" readonly class="form-control" value=" {{ auth::user()->username }} " id="example-text-input" name="author" placeholder="Author">
                                    </div>
                                    <div class="form-group">
                                          <label class="d-block" for="example-file-input-multiple">Featured Image</label>
                                          <input type="file" id="example-file-input-multiple" name="image" >
                                      </div>

                                        <div class="form-group">
                                          <button type="submit" class="btn btn-primary">Publish</button>
                                        </div>


                                  </div>
                              </div>
                          </form>
                    </div>


                </div>
                <!-- END Your Block -->
            </div>
            <!-- END Page Content -->

        </main>
        <!-- END Main Container -->

@endsection
