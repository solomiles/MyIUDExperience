@extends('layouts.admin')

@section('content')
        <!-- Main Container -->
        <main id="main-container">

            <!-- Hero -->
            <div class="bg-body-light">
                <div class="content content-full">
                    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                        <h1 class="flex-sm-fill h3 my-2">
                            Manage Survey
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
                                                <option value="text" selected >Default</option>
                                                <option value="radio">Radio</option>
                                                <option value="checkbox">CheckBox</option>
                                            </select>
                                        
                                        </div>

                                        <div class="col-md-3 mb-3">
                                            <label for="validationServer02">Option</label>
                                            <input type="text" name="optionOne" class="form-control is-valid" id="validationServer02" placeholder="Please Type In First Option">
                                        
                                        </div>

                                        <div class="col-md-3 mb-3">
                                            <label for="validationServer02">Option</label>
                                            <input type="text" name="optionTwo" class="form-control is-valid" id="validationServer02" placeholder="Please Type In Second Option">
                                        
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="validationServer01">Option</label>
                                            <input type="text" name="optionThree" class="form-control is-valid"  id="validationServer01" placeholder="Please Type In Third Option">
                                        
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationServer02">Option</label>
                                            <input type="text" name="optionFour" class="form-control is-valid" id="validationServer02" placeholder="Please Type In Fourth Option">
                                        
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationServer02">Option</label>
                                            <input type="text" name="optionFive" class="form-control is-valid" id="validationServer02" placeholder="Please Type In Fifth Option">
                                        
                                        </div>
                                        
                                        
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="validationServer01">Option</label>
                                            <input type="text" name="optionSix" class="form-control is-valid"  id="validationServer01" placeholder="Please Type In Third Option">
                                        
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationServer02">Option</label>
                                            <input type="text" name="optionSeven" class="form-control is-valid" id="validationServer02" placeholder="Please Type In Fourth Option">
                                        
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationServer02">Option</label>
                                            <input type="text" name="optionEight" class="form-control is-valid" id="validationServer02" placeholder="Please Type In Fifth Option">
                                        
                                        </div>
                                        
                                        
                                    </div>
                                    
                                    
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
                                    <th class="sorting"  tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Option: activate to sort column ascending">Option one</th>
                                    <th class="sorting"  tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Option: activate to sort column ascending">Option two</th>
                                    <th class="sorting"  tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Option: activate to sort column ascending">Option three</th>
                                    <th class="text-center sorting_asc" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Option: activate to sort column descending">Option four</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Option: activate to sort column ascending">Option five</th>
                                    <th class="sorting"  tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Option: activate to sort column ascending">Option six</th>
                                    <th class="sorting"  tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Option: activate to sort column ascending">Option seven</th>
                                    <th class="sorting"  tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Option: activate to sort column ascending">Option eight</th>
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
                                            @foreach($survey->options as $option)
                                            <td class="font-w600 ">
                                                {{ $option->option_one }}
                                            </td>
                                            <td class="font-w600 ">
                                                {{ $option->option_two}}
                                            </td>
                                            <td class="font-w600 ">
                                                {{ $option->option_three }}
                                            </td>
                                            <td class="font-w600 ">
                                                {{ $option->option_four }}
                                            </td>
                                            <td class="font-w600 ">
                                                {{ $option->option_five }}
                                            </td>
                                            <td class="font-w600 ">
                                                {{ $option->option_six }} 
                                            </td>
                                            <td class="font-w600 ">
                                                {{ $option->option_seven }}
                                            </td>
                                            <td class="font-w600 ">
                                                {{ $option->option_eight }}
                                            </td>
                                            @endforeach
                                            
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
