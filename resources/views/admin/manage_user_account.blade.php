@extends('layouts.admin')

@section('content')

        <!-- Main Container -->
        <main id="main-container">

            <!-- Hero -->
            <div class="bg-body-light">
                <div class="content content-full">
                    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                        <h1 class="flex-sm-fill h3 my-2">
                            User Account
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
                    <div class="block-content">
                      <div class="col-sm-12">
                        <table class="table table-condensed table-responsive table-striped table-vcenter js-dataTable-buttons dataTable no-footer" id="DataTables_Table_3" role="grid" aria-describedby="DataTables_Table_3_info">
                                  <thead>
                                      <tr role="row">
                                        <th class="text-center sorting_asc" style="width: 80px;" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending">ID</th>
                                          <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Username: activate to sort column ascending">Username</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">Email</th>
                                              <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">Country</th>
                                              <!-- <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th> -->
                                  </thead>
                                  <tbody>
                                @if(count($users) > 0)
                                @for($i=1;$i>1;)
                                @endfor
                                    @foreach($users as $user)
                                    <tr role="row" class="odd">
                                        <td class="text-center font-size-sm sorting_1">{{$i++}}</td>
                                        <td class="font-w600 font-size-sm">
                                            {{ $user->username }}
                                        </td>
                                        <td class=" font-size-sm">
                                            {{ $user->email }}
                                        </td>
                                        <td class="">
                                            {{ $user->country }}
                                        </td>
                                        <!-- <td>
                                            <a href="#">Edit</a>
                                        </td> -->
                                    </tr>
                                    @endforeach
                                @endif

                                      
                              </table>
                            </div>
                </div>
                <!-- END Your Block -->
            </div>
            <!-- END Page Content -->

        </main>
        <!-- END Main Container -->
@endsection
