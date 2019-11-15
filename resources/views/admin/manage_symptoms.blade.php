@extends('layouts.admin')


@section('content')
        <!-- Main Container -->
        <main id="main-container">

            <!-- Hero -->
            <div class="bg-body-light">
                <div class="content content-full">
                    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                        <h1 class="flex-sm-fill h3 my-2">
                            Add Symptoms
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
                                <form method="post" action=" {{ route('manage-symptoms.store') }} ">
                                    @csrf
                                    <div class="form-row field_wrapper">
                                        

                                        <div class="col-md-4 mb-3">
                                            <label for="validationServer02">Select Category</label>
                                            <select class="form-control is-valid" name="category" required id="validationServer02">
                                                <option selected disabled>Please Select Category</option>
                                                <option value="Apperance Change" >Apperance Change</option>
                                                <option value="Gynecological Pain">Gynecological Pain</option>
                                                <option value="Mental and Emotional Health">Mental and Emotional Health</option>
                                                <option value="Physiological">Physiological</option>
                                            </select>
                                        
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationServer01">Symptoms Name</label>
                                            <input type="text" name="options[]" class="form-control is-valid" required  id="validationServer01" placeholder="Type Symptoms Here">
                                        
                                        </div>

                                    </div>                                   

                                    

                                    <button type="button" id="addOptions" class="btn btn-primary">Add </button><br><br>
                                    
                                    
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </form>
                            </div>
                        </div><br>
                      <div class="col-sm-12">
                            <div class="">
                                <table class="table table-condensed table-responsive table-striped table-vcenter js-dataTable-buttons dataTable no-footer" id="DataTables_Table_3" role="grid" aria-describedby="DataTables_Table_3_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="text-center sorting_asc" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending">ID</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Symptoms: activate to sort column ascending">Symptoms</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Category: activate to sort column ascending">Category</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th>
<!-- 
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">Gynecological Issue</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Country: activate to sort column ascending">Mental & Emotional Health</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Other</th> -->
                                    </thead>
                                    <tbody>
                                    @if(count($symptomsCategories) > 0)
                                        
                                        @foreach($symptomsCategories as $symptom)
                                        
                                            <tr role="row" class="odd">
                                                <td class="text-center font-size-sm sorting_1"> {{ $loop->iteration }} </td>
                                                
                                                <td class="font-w600 font-size-sm">
                                                @foreach($symptom->symptoms as $value)
                                                    {{ $value->symptoms_name.',' }}
                                                    @endforeach
                                                </td>
                                                
                                                
                                                <td class="font-w600 font-size-sm">
                                                    {{$symptom->category}}
                                                </td>
                                                
                                                <td class="">
                                                    <div class="btn-group">
                                                        <button class="btn btn-primary"><span class="fa fa-edit"></span></button>
                                                        <form action="{{route('manage-symptoms.destroy', $symptom->id )}}" method="post">
                                                            @csrf
                                                            <input name="_method" type="hidden" value="DELETE">
                                                            <button type="submit" class="btn btn-danger"><span class="fa fa-trash"></span></button>
                                                        </form>
                                                    </div>
                                                    
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
