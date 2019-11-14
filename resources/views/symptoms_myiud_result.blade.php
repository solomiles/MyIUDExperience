@extends('layouts.structure')

@section('content')
    
    <!--begin home section -->
    <section class="home-section">
      <div class="home-section-overlay"></div>

      <!--begin container -->
      <div class="container">
        <!--begin row -->
        <div class="row">
          <!--begin col-md-8-->
          <div class="col-md-8 mx-auto padding-top-50">
            <h4>Symptoms Tracker Result</h4>

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
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

        <main id="main-container">
        @if(Session::has('success'))
          <div class="alert alert-success">
              {{Session::get('success')}}
          </div>
        @endif
      
          
                <!-- END Page Content -->
        </main>
      </div>
        <!--end row -->
        <div class="block-content">
          <div id="container" style="width: auto; height: auto;">
              <canvas id="myChart"></canvas>
            </div>
        </div>
      <!--end container -->
    </section>
    <!--end section-grey -->
    @foreach($results as $result)
      
        <input type="hidden" value="{{$result->symptoms->symptoms_name}}"> 
      
    @endforeach

   <script>
   var shows = @json($results->toArray());
   var symptoms = [];
   var symptomsDate = [];
   var levels = [];
   shows.forEach(show => {
    //  show.symptoms_level
  //  console.table(show.symptoms_id);
    symptoms.push(show.symptoms.symptoms_name);
    levels.push(show.symptoms_level);
    symptomsDate.push(show.created_at);

   })
  //  var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric'}
   var day = new Date(symptomsDate[0]);
  //  console.log(day.toDateString())
   
  //  var face = result.symptoms_id;
    var config = {
      type: 'horizontalBar',
      data: {
        labels:   symptoms  
        
      ,
        options: {
        title: {
          display: true,
          text: 'Symptoms '+day.toDateString(),
          position: 'top'
            }
        },
        datasets: [{
          
          label: "Cycle Started "+day.toDateString(),
          data: levels,
          backgroundColor: ["#76b1f1", "#6f42c1","#e83e8c",],
          hoverBackgroundColor: "#2189f9",
          fill: false
        }]
      },
        options: {
          title: {
          display: true,
          text: 'Symptoms '+day.toDateString(),
          position: 'top',
          fontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",
          fontColor: '#880cbb',
          fontSize: 20,
          },
          scales: {
            xAxes: [{
              ticks: {
                callback: function(value) {
                  if (value === 0)
                  return 'None';
                 else if (value === 20)
                    return 'Mild';
                  else if (value === 50)
                    return 'Moderate';
                  else if (value === 80)
                    return 'Severe';
                  
                },
                display: true,
              fontColor: '#2196f3',
              }
              
            }]
          }
        }
      };

          var ctx = document.getElementById("myChart").getContext("2d");
          new Chart(ctx, config);
   </script>

 
@endsection