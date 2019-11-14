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
                    <script>
                    Swal.fire({
                                                       
                      type: 'error',
                      html: '<b style="color:red"> {{!! $message !!}}</b> ',
                        showCloseButton: true,
                      showConfirmButton: true,  
                      focusConfirm: true,
                      animation: false,
                      customClass: {
                        popup: 'animated tada'
                      }
                    
                    })
                  </script>

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
                            <option disabled >No Tracked Dates Found</option>
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
          <script>
            Swal.fire({
                                                
              type: 'success',
              html: '<b style="color:#a5dc86"> Tracked successfully</b> ',
                showCloseButton: true,
              showConfirmButton: true,  
              focusConfirm: true,
              animation: false,
              customClass: {
                popup: 'animated tada'
              }
            
            })
          </script>
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
          @if(count($symptoms) > 0)
                      <div class="table-responsive">
                            <form action=" {{ route('track-symptoms.store') }}" role="form" method="Post">
                               @csrf 
                               <input value=" {{auth::user()->id}} " name="user_id" type="hidden">
                               
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
                                        <!-- <form id="addForm" action="#" > -->
                                        @csrf
                                          <input id="categoryId{{$symptom->id}}" value="{{$symptom->id}}" type="hidden">
                                        <input type="text" id="" class="form-control newSymptoms{{$symptom->id}}" value="" placeholder="Enter Symptoms">
                                          <br><button type="button" id="addOptions{{$symptom->id}}" class="btn btn-primary">
                                          <span id="loading{{$symptom->id}}" style="display:none" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                             Add</button>
                                          
                                        <!-- </form> -->
                                        <script>
                                          $(document).ready(function () {
                                            $('#addOptions{{$symptom->id}}').click(function (e) {
                                              // $('#addForm').submit(function(e) {
                                              //   // 
                                              // });
                                              buttonText = $('#addOptions{{$symptom->id}}');
                                              var symptomsName = $(".newSymptoms{{$symptom->id}}").val();
                                              var categoryId = $("#categoryId{{$symptom->id}}").val();
                                              var loading = $('#loading{{$symptom->id}}');
                                              if (symptomsName !== "") {
                                                e.preventDefault();
                                              
                                                  // console.log(categoryId);
                                                $.ajaxSetup({
                                                  headers: {
                                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                  }
                                                });

                                                $.ajax({
                                                  url: "{{url('add-new-symptoms/store')}}",
                                                  data: { categoryId: categoryId, symptomsName: symptomsName},
                                                  type: "POST",
                                                  dataType: "json",
                                                  beforeSend(xhr,data){

                                                    loading.show();
                                                    buttonText.text('Loading...');
                                                    console.log(data);
                                                  },
                                                  success: function (data) {
                                                      // displayMessage
                                                      loading.hide();
                                                      buttonText.text('Add');
                                                      
                                                      displayMessage("Added Successfully");
                                                      window.location.reload();
                                                  }
                                                });

                                               var value =  "{{url('track-symptoms')}}"
                                              }
                                            });
                                            function displayMessage(message) {
                                              Swal.fire({
                                                       
                                                       type: 'success',
                                                       html:
                                                       message,
                                                         showCloseButton: true,
                                                       showConfirmButton: true,  
                                                       focusConfirm: true,
                                                       animation: false,
                                                       customClass: {
                                                         popup: 'animated tada'
                                                       }
                                                     
                                                     })
                                            }
                                          });
                                        </script>
                                      </div>
                                  </td>
                                </tr>
                                       
                                    </tbody>
                                </table>

                                    
                                @endforeach
                                
                             
                               
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
                    
                    @endif
                    <!-- END Full Table -->
<!-- </form> -->
        <!--end row -->

      <!--end container -->
    </section>
    <!--end section-grey -->

@endsection
