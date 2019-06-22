@extends('layouts.admin')


@section('content')
        <!-- Main Container -->
        <main id="main-container">

            <!-- Hero -->
            <div class="bg-body-light">
                <div class="content content-full">
                    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                        <h1 class="flex-sm-fill h3 my-2">
                            Manage Symptoms
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
                            <div class="">
                                <table class="table table-condensed table-responsive table-striped table-vcenter js-dataTable-buttons dataTable no-footer" id="DataTables_Table_3" role="grid" aria-describedby="DataTables_Table_3_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="text-center sorting_asc" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending">ID</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Type: activate to sort column ascending">Type</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Apperance: activate to sort column ascending">Apperance Change</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">Physical Pain</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">Gynecological Issue</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">Mental & Emotional Health</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Other</th>
                                    </thead>
                                    <tbody>
                                    @if(count($symptoms) > 0)
                                        @foreach($symptoms as $symptom)
                                            <tr role="row" class="odd">
                                                <td class="text-center font-size-sm sorting_1"> {{ $symptom->user_id }} </td>
                                                <td class="font-w600 font-size-sm">
                                                    {{ $symptom->type }}
                                                </td>
                                                <td class="">
                                                    {{ $symptom->apperance_change }}
                                                </td>
                                                <td class="">
                                                    {{ $symptom->physical_pain }}
                                                </td>
                                                <td>
                                                    {{ $symptom->gynecological_issue }}
                                                </td>
                                                <td>
                                                    {{ $symptom->mental_health }}
                                                </td>
                                                <td>
                                                    {{ $symptom->other }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </table>
                            </div>
                        </div>
                </div>
                <!-- END Your Block -->
            </div>
            <!-- END Page Content -->

        </main>
        <!-- END Main Container -->

@endsection
