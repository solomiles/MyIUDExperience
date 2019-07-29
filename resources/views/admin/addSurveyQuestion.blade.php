@extends('layouts.admin')

@section('content')
        <!-- Main Container -->
        <main id="main-container">

            <!-- Hero -->
            <div class="bg-body-light">
                <div class="content content-full">
                    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                        <h1 class="flex-sm-fill h3 my-2">
                            Add Survey Questions
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
                        <div class="row">
                            <div class="col-md-12">
                                <form method="post" action=" {{ route('add-survey-questions.store') }} ">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-3 mb-3">
                                            <label for="validationServer01">Question</label>
                                            <input type="text" class="form-control is-valid" name="question" required id="validationServer01" placeholder="Please Type In Question Here">
                                        
                                        </div>

                                        <div class="col-md-3 mb-3">
                                            <label for="validationServer02">Option Type</label>
                                            <select class="form-control is-valid" name="type" required id="validationServer02" placeholder="Please Type In First Option">
                                                <option value="text" selected >Text</option>
                                                <option value="radio">Radio</option>
                                                <option value="checkbox">CheckBox</option>
                                            </select>
                                        
                                        </div>

                                    </div>

                                    <div class="form-row  field_wrapper">
                                        <div class="col-md-4 mb-3">
                                            <label for="validationServer01">Option</label>
                                            <input type="text" name="options[]" class="form-control is-valid"  id="validationServer01" placeholder="Please Type In Option">
                                        
                                        </div>
                                        <!-- <div class="field_wrapper"></div> -->
                                        
                                        
                                        
                                    </div>

                                    

                                    

                                    <button type="button" id="addOptions" class="btn btn-primary">Add Options</button><br><br>
                                    
                                    
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </form>
                            </div>
                        </div><br>
                      <div class="col-sm-12">
                          <div class="">
                          <table class="table table-responsive table-condensed table-striped table-vcenter js-dataTable-buttons dataTable no-footer" id="DataTables_Table_3" role="grid" aria-describedby="DataTables_Table_3_info">
                                <thead>
                                    <!-- <tr role="row"> -->
                                    <th class="text-center sorting_asc" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending">S/N</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Question: activate to sort column ascending">Question</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Type: activate to sort column ascending">Type</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th>

                                </thead>
                                <tbody>
                                    @if(count($surveys) > 0)
                                        @for($i=1;$i>1;)
                                        @endfor
                                        @foreach($surveys as $survey)
                                        <tr role="row" class="odd">
                                            <td class="text-center font-size-sm sorting_1">{{ $i++ }}</td>
                                            <td class="font-w600 ">
                                                {{ $survey->question }}
                                            </td>
                                            <td class="font-w600 ">
                                                {{ $survey->type }}
                                            </td>
                                           
                                            
                                            <td class=" ">
                                                <div class="btn-group">
                                                    <button class="btn btn-primary"><span class="fa fa-edit"></span></button>
                                                    <form action="{{route('add-survey-questions.destroy', $survey->id )}}" method="post">
                                                        @csrf
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <button type="submit" class="btn btn-danger"><span class="fa fa-trash"></span></button>
                                                    </form>
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
