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
      
          <div class="block-content">
              <div id="container" style="width: 110%; height: 110%;">
                  <canvas id="myChart"></canvas>
                </div>
            </div>
                <!-- END Page Content -->
        </main>
      </div>
        <!--end row -->

      <!--end container -->
    </section>
    <!--end section-grey -->

   <script>
    var config = {
      type: 'horizontalBar',
      data: {
        labels: ['face',    
        'hairGrowth',
        'bodyAcne',
        'thiningHair',
        'weightGain',
        // 'otherAppear',
        'deviceExpelle',    
        'ruptured',
        'spodaric',
        'cysts',
        'urinary',
        'pelvic',    
        'painDuringSex',
        'bacterial',
        'yeast',
        'unusualVaginal',
        'genitialSores',
        'swollenBreast',
        'perforation',
        'missedMenstrual', 
        'toxicShock',
        'otherGynecological',
        'depression',
        'moodSwings',
        'anger',
        'lostSexualDesire',
        'anxiety',
        // 'otherMental',
        'memoryLoss',    
        'fatigue',
        'lowerBackPain',
        'lostOfBalance',
        'headache',
        'dizziness',
        'nausea',
        'endometriosis',
        'eczema',
        'itchySkin',
        'abdominalPain',
        'anaphylactic',    
        'bloated',
        'dryEyes',
        'muscleWeakness',
        'muscleSpasm',
        'constipation',
        'tingling',
        'edema',
        'bradycardia',
        'breastTenderness',    
        'postIud',
        // 'otherPhysiological'
      ],
        options: {
        title: {
          display: true,
          text: 'Symptoms June 28, 2019',
          position: 'top'
            }
        },
        datasets: [{
          
          label: "Cycle Started June 28, 2019",
          data: [20, 50, 80, 81, 56, 0],
          backgroundColor: "#c45850",
          fill: false
        }]
      },
        options: {
          title: {
          display: true,
          text: 'Symptoms June 28, 2019',
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
                  else
                    return '';
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