@extends('layouts.structure')

@section('content')
    <!--end header -->

    <!--begin home section -->
    <section class="home-section">
      <div class="home-section-overlay"></div>

      <!--begin container -->
      <div class="container">
        <!--begin row -->
        <div class="row">
          <!--begin col-md-8-->
          <div class="col-md-8 mx-auto padding-top-50">
            <h4>Symptoms Tracker</h4>

            <!-- <p>
              Explore our free Personalized Tools to Track, Monitor, and Manage
              your cycles
            </p> -->

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
        <h5>Welcome {{auth::user()->username}},</h5><br>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <!--begin row -->
        <h5>View Daily Symptoms Chart</h5>
          <div class="row">
            <div class="col-md-12">
              <!-- <div class="col-lg-8 col-sm-6"> -->

                <form action=" {{ action('SymptomsTrackerController@dailyGraph') }} " method="POST" role="form" >
                @csrf
                  <div class="row">
                    <!-- <div class="col-md-12"> -->
                      <!-- <div class="form-group"> -->

                        <div class="col-md-3">
                          <select class="form-control" data-placeholder="--Select--" name="trackedDate" required>
                          @if( count($trackedDate) > 0)
                            <option selected disabled>--Select--</option>
                            @foreach($trackedDate as $date)
                            <option value="{{$date->created_at}}">{{date('M d, Y', strtotime($date->created_at))}}</option>
                            @endforeach
                          @else
                            <option disabled >No Dates Found</option>
                          @endif
                          </select>
                          
                        </div>
                      
                        <div class="col-md-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      <!-- </div> -->
                    
                  </div>
                </form>
              </div>
            <!-- </div> -->
          </div>
            <br>
          @if(Session::has('results'))
          <div class="row">
            <div class="col-md-12">
              <div class=" col-md-8">
                <div class="table-responsive">                  
                  <table class="table table-sm table-striped table-striped table-hover">
                      <thead>
                        <th>Symptoms</th>
                        <th>Symptoms Level</th>
                      </thead>
                      <tbody>
                      @foreach(Session::get('results') as $result)
                        <tr>
                        
                          <td>{{ $result->symptoms->symptoms_name }}</td>
                          
                          <td> @if($result->symptoms_level == 0)
                              <label>{{'none'}}</label>
                              @elseif($result->symptoms_level == 20)
                                <label style="color:yellowgreen;">{{'mild'}}</label>
                              @elseif($result->symptoms_level == 50)
                              <label style="color:#2586ff;">{{'moderate'}}</label>
                              @elseif($result->symptoms_level == 85)
                              <label style="color:#f15c5c;">{{'severe'}}</label>
                              @endif
                          </td>

                        </tr>
                      @endforeach
                      </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          @else
                      <div class="table-responsive">
                            <form action=" {{ route('track-symptoms.store') }}" role="form" method="Post">
                               @csrf 
                               <input value=" {{auth::user()->id}} " name="user_id" type="hidden">
                               @if(count($symptoms) > 0)
                               @foreach($symptoms as $symptom)
                               
                                <table class="table table-striped table-striped table-vcenter">
                                    <tbody>
                                            <h5> {{ $symptom->category }} </h5>
                                            @foreach($symptom->symptoms as $value)
                                          <tr>
                                          <input type="hidden" name="symptoms_id[]" value=" {{ $value->id }} ">
                                            <td>
                                                {{ $value->symptoms_name}}
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio"  name="symptoms_level[].{{$value->id}}" id="{{$value->id}}1" value="0" >
                                                <label class="custom-control-label" for="{{$value->id}}1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="symptoms_level[].{{$value->id}}" id="{{$value->id}}2" value="20" >
                                                <label class="custom-control-label" for="{{$value->id}}2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="symptoms_level[].{{$value->id}}" id="{{$value->id}}3" value="50" >
                                                <label class="custom-control-label" for="{{$value->id}}3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="symptoms_level[].{{$value->id}}" id="{{$value->id}}4" value="85" >
                                                <label class="custom-control-label" for="{{$value->id}}4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>
                                        </tr>

                                      
                                        <tr class="field_wrapper{{$value->id}}"></tr><tr></tr>
                                        @endforeach
                                          
                                          
                                <tr>
                                  <td>
                                      <div class="form-group">
                                        <label for="example-text-input">Other {{ $symptom->category }} (Please Specify)</label>
                                        <input type="text" id="newSymptoms{{$value->id}}" class="form-control new_appearance" id="example-text-input" name="" placeholder="Enter Symptoms">
                                          <br><button type="button" id="addOptions.{{$value->id}}" class="btn btn-primary add_button_apperamce">Add</button>
                                      </div>
                                  </td>
                                </tr>
                                       
                                    </tbody>
                                </table>
                                <script>
                                    $(document).ready(function(){
                                      // for add new type button
                                      var maxField = 30; //Input fields increment limitation
                                      var addButton = $('#addOptions'); //Add button selector
                                      
                                      var wrapper = $('.field_wrapper'); //Input field wrapper
                                      // var fieldHTML = '<div class="form-check"><input class="form-check-input remove_button" type="radio" id="#" name="type" value="'+new_type+'" ><label class="form-check-label" for="example-radios-default1">'+new_type+'</label></div>';
                                      // '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button"><img src="remove-icon.png"/></a></div>'; //New input field html 
                                      var x = 1; //Initial field counter is 1
                                      
                                      //Once add button is clicked
                                      $(addButton).click(function(){
                                          //Check maximum number of input fields

                                          var new_symptoms = $('.new_type').val();
                                          var fieldHTML = '<div class="col-md-4 mb-3"><label for="validationServer01">Option '+x+'</label><input type="text" name="options[]" class="form-control is-valid"  id="validationServer01" placeholder="Please Type In Options '+x+'"></div>';

                                          if(x < maxField ){ 
                                              x++; //Increment field counter
                                              $(wrapper).append(fieldHTML); //Add field html
                                          }
                                      });
                                      
                                      //Once remove button is clicked
                                      $(wrapper).on('click', '.remove_button', function(e){
                                          e.preventDefault();
                                          $(this).parent('div').remove(); //Remove field html
                                          x--;
                                          //Decrement field counter
                                      });
                                      // end add new type button
                                  });
                                </script>
                                @endforeach
                                
                              @endif
                               
                            </div>
                            <div class="col-sm-6">
                              <div class="btn-group" role="group" aria-label="Horizontal Primary">
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                  <button type="button" class="btn btn-danger">Cancel</button>
                              </div>
                            </div>
                          </form>
                        </div>
                    </div>
                    @endif
                    <!-- END Full Table -->
<!-- </form> -->
        <!--end row -->

      <!--end container -->
    </section>
    <!--end section-grey -->

@endsection
