@extends('layouts.admin')

@section('content')

        <!-- Main Container -->
        <main id="main-container">

            <!-- Hero -->
            <div class="bg-body-light">
                <div class="content content-full">
                    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                        <h1 class="flex-sm-fill h3 my-2">
                            All Blog Post
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
                    <div class="block-header">
                        <h3 class="block-title">
                            Add Blog Category
                        </h3>
                        </div>
                    <div class="block-content">
                      <form action="be_forms_elements.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                              <div class="row">

                                  <div class="col-sm-12">
                                    <table class="table table-condensed table-responsive table-striped table-vcenter js-dataTable-buttons dataTable no-footer" id="DataTables_Table_3" role="grid" aria-describedby="DataTables_Table_3_info">
                                              <thead>
                                                  <tr role="row">
                                                    <th class="text-center sorting_asc" style="width: 80px;" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending">
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending">Title</th>
                                                    <th class="sorting" style="width: 30%;" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">Author</th>
                                                    <th class="sorting" style="width: 30%;" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">Featured Image</th>


                                              </thead>
                                              <tbody>
                                            @if(count($allPost) > 0 )
                                                @for($i=1;$i>1;)
                                                @endfor
                                                @foreach($allPost as $post)
                                                <tr role="row" class="odd">
                                                    <td class="text-center font-size-sm sorting_1">{{ $i++}}</td>
                                                    <td class="font-w600 font-size-sm">
                                                        {{ $post->title }}
                                                    </td>
                                                    <td class=" font-size-sm">
                                                        {{ $post->author }}
                                                    </td>
                                                    <td class="">
                                                        {{ $post->filename }}
                                                    </td>

                                                </tr>
                                                @endforeach
                                            @else

                                            @endif
                                          </table>
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