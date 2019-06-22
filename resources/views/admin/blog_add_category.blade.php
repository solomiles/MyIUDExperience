@extends('layouts.admin')

@section('content')
        <!-- Main Container -->
        <main id="main-container">

            <!-- Hero -->
            <div class="bg-body-light">
                <div class="content content-full">
                    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                        <h1 class="flex-sm-fill h3 my-2">
                            Add Category
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
                            Add Blog Category
                        </h3>
                        </div>
                    <div class="block-content">
                      <form action="be_forms_elements.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                              <div class="row">
                                  <div class="col-lg-4">
                                      <div class="form-group">
                                          <label for="example-text-input">Add Category</label>
                                          <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="add category">
                                      </div>

                                      <div class="form-group">
                                          <label for="example-text-input">Slug</label>
                                          <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="slug">
                                      </div>

                                      <div class="form-group">
                                          <label for="example-textarea-input">Description</label>
                                          <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="4" placeholder="blog description"></textarea>
                                      </div>

                                      <div class="form-group">
                                        <button type="button" class="btn btn-primary">Submit</button>
                                      </div>

                                  </div>
                                  <div class="col-lg-8">
                                    <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons dataTable no-footer" id="DataTables_Table_3" role="grid" aria-describedby="DataTables_Table_3_info">
                                              <thead>
                                                  <tr role="row">
                                                    <th class="text-center sorting_asc" style="width: 80px;" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending">ID</th>
                                                      <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending">Category</th>
                                                        <th class="d-none d-sm-table-cell sorting" style="width: 30%;" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">Slug</th>
                                                          <th class="d-none d-sm-table-cell sorting" style="width: 30%;" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">Description</th>

                                              </thead>
                                              <tbody>

                                              <tr role="row" class="odd">
                                                      <td class="text-center font-size-sm sorting_1">1</td>
                                                      <td class="font-w600 font-size-sm">
                                                          health
                                                      </td>
                                                      <td class="d-none d-sm-table-cell font-size-sm">

                                                      </td>
                                                      <td class="d-none d-sm-table-cell">

                                                      </td>

                                                  </tr>
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
