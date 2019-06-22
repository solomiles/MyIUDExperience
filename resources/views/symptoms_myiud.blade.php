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
        <form role="form" action=" {{ route('track-symptoms.store') }} " method="post">
        <div class="row">

          <!--begin col-md-2 -->
          <div class="col-md-4">
            <div class="main-services " style="text-align: left;">
              <h5>Type</h5>
              <hr>
              <div class="form-check">
                <input class="form-check-input" type="radio" id="#" name="type" value="severe" >
                <label class="form-check-label" for="example-radios-default1">Severe</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" id="#" name="type" value="symptoms" >
                <label class="form-check-label" for="example-radios-default1">Symptoms</label>
              </div>
              <div class="field_wrapper"></div>
              <div class="form-group">
                  <label for="example-text-input">Please Specify: <small>(use the box below)</small></label>
                  <input type="text" class="form-control new_type" id="example-text-input" name="example-text-input" placeholder="Enter Symptoms Type">
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-primary add_button_type">Add</button>
                <!-- <button type="button" id="remove_button" class="btn btn-primary ">Remove</button> -->
            </div>
          </div>
          </div>
          <!--end col-md-2 -->
          <!--begin col-md-2 -->
          <div class="col-md-4">
            <div class="main-services" style="text-align: left;">
              <h5>Apperance Change</h5>
              <hr>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="#" name="appearance[]" value="acne" >
                  <label class="form-check-label" for="example-radios-default1">Acne</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="#" name="appearance[]" value="weight gain" >
                  <label class="form-check-label" for="example-radios-default1">Weight Gain</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="#" name="appearance[]" value="Hair got Thinner" >
                  <label class="form-check-label" for="example-radios-default1">Hair got Thinner</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="#" name="appearance[]" value="Severe Pain" >
                  <label class="form-check-label" for="example-radios-default1">Severe Pain</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="#" name="appearance[]" value="Unexplained Fever" >
                  <label class="form-check-label" for="example-radios-default1">Unexplained Fever</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="#" name="appearance[]" value="Numbness" >
                  <label class="form-check-label" for="example-radios-default1">Numbness *specify</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="#" name="appearance[]" value="Pain" >
                  <label class="form-check-label" for="example-radios-default1">Pain</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="#" name="appearance[]" value="Bleeding" >
                  <label class="form-check-label" for="example-radios-default1">Bleeding</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="#" name="appearance[]" value="Dizziness during and after placement" >
                  <label class="form-check-label" for="example-radios-default1">Dizziness during and after placement</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="#" name="appearance[]" value="Hair Loss" >
                  <label class="form-check-label" for="example-radios-default1">Hair Loss</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="#" name="appearance[]" value="Yellowing of the skin or whites of the eyes" >
                  <label class="form-check-label" for="example-radios-default1">Yellowing of the skin or whites of the eyes</label>
                </div>
                <div class="field_wrapper_appearance"></div>
                <div class="form-group">
                    <label for="example-text-input">Please Specify: <small>(use the box below)</small></label>
                    <input type="text" class="form-control new_appearance"  name="example-text-input" placeholder="Enter Appearance Change">
                </div>
                <div class="form-group">
                  <button type="button" class="add_button_appearance btn btn-primary">Add</button>
              </div>
            </div>
          </div>
          @csrf
          <!--end col-md-2 -->
          <!--begin col-md-2 -->
          <div class="col-md-4">
            <div class="main-services" style="text-align: left;">
              <h5>Physical Change</h5>
              <hr>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="example-radios-default" name="physical[]" value="Lower Back Pain" >
                    <label class="form-check-label" for="example-radios-default1">Lower Back Pain</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="example-radios-default" name="physical[]" value="Aches" >
                    <label class="form-check-label" for="example-radios-default1">Aches</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="example-radios-default" name="physical[]" value="Instability" >
                    <label class="form-check-label" for="example-radios-default1">Instability</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="example-radios-default" name="physical[]" value="Hip Pain" >
                    <label class="form-check-label" for="example-radios-default1">Hip Pain</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="example-radios-default" name="physical[]" value="Jaw Joints" >
                    <label class="form-check-label" for="example-radios-default1">Jaw Joints</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="example-radios-default" name="physical[]" value="Feeling of Fatigue" >
                    <label class="form-check-label" for="example-radios-default1">Feeling of Fatigue</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="example-radios-default" name="physical[]" value="Severe or Migraine Headaches" >
                    <label class="form-check-label" for="example-radios-default1">Severe or Migraine Headaches</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="example-radios-default" name="physical[]" value="Flu-like Symptoms or Chills" >
                    <label class="form-check-label" for="example-radios-default1">Flu-like Symptoms or Chills</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="example-radios-default" name="physical[]" value="Pain" >
                    <label class="form-check-label" for="example-radios-default1">Pain</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="example-radios-default" name="physical[]" value="Complication of Device Insertion" >
                    <label class="form-check-label" for="example-radios-default1">Complication of Device Insertion</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="example-radios-default" name="physical[]" value="Erythema Nodosum" >
                    <label class="form-check-label" for="example-radios-default1">Erythema Nodosum</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="example-radios-default" name="physical[]" value="Amenorrhoea" >
                    <label class="form-check-label" for="example-radios-default1">Amenorrhoea</label>
                  </div>
                  <div class="field_wrapper_phy"></div>
                  <div class="form-group">
                      <label for="example-text-input">Please Specify: <small>(use the box below)</small></label>
                      <input type="text" class="form-control new_physical" id="example-text-input" name="example-text-input" placeholder="Enter Physical Changes">
                  </div>
                  <div class="form-group">
                    <button type="button" class="btn btn-primary add_button_physical">Add</button>
                </div>

            </div>
          </div>
          <!--end col-md-2 -->


        </div>
        <!--end row -->
        <!--begin row -->
        <div class="row">

          <div class="col-md-4">
            <div class="main-services" style="text-align: left;">

              <h5>Gynecological Issue</h5>
              <hr>
                    <div class="form-check ">
                      <input class="form-check-input" type="checkbox" id="#" name="gynecological[]" value="Expulsion" >
                      <label class="form-check-label" for="example-radios-default1">Expulsion</label>
                    </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="#" name="gynecological[]" value="Pelvic inflammatory disease (PID)" >
                      <label class="form-check-label" for="example-radios-default1">Pelvic inflammatory disease (PID)</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="#" name="gynecological[]" value="Perforation attached to (embedded) in  uterus" >
                    <label class="form-check-label" for="example-radios-default1">Perforation attached to (embedded) in  uterus</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="#" name="gynecological[]" value="Missed menstrual periods" >
                  <label class="form-check-label" for="example-radios-default1">Missed menstrual periods</label>
              </div>
              <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="#" name="gynecological[]" value="Changes in bleeding" >
                    <label class="form-check-label" for="example-radios-default1">Changes in bleeding</label>
                </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="#" name="gynecological[]" value="Cysts on the ovary" >
                      <label class="form-check-label" for="example-radios-default1">Cysts on the ovary</label>
                  </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="#" name="gynecological[]" value="Pelvic pain or Pain during sex" >
                      <label class="form-check-label" for="example-radios-default1">Pelvic pain or Pain during sex</label>
                  </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="#" name="gynecological[]" value="Breast Tenderness" >
                      <label class="form-check-label" for="example-radios-default1">Breast Tenderness</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="#" name="gynecological[]" value="Bacterial Vaginosis" >
                    <label class="form-check-label" for="example-radios-default1">Bacterial Vaginosis</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="#" name="gynecological[]" value="Yeast Infection" >
                  <label class="form-check-label" for="example-radios-default1">Yeast Infection</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="#" name="gynecological[]" value="Unusual Vaginal Discharge or Genital Sores" >
                  <label class="form-check-label" for="example-radios-default1">Unusual Vaginal Discharge or Genital Sores</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="#" name="gynecological[]" value="Severe Vaginal Bleeding" >
                  <label class="form-check-label" for="example-radios-default1">Severe Vaginal Bleeding</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="#" name="gynecological[]" value="Ovarian Pain" >
                  <label class="form-check-label" for="example-radios-default1">Ovarian Pain</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="#" name="gynecological[]" value="Pregancy Symptoms" >
                  <label class="form-check-label" for="example-radios-default1">Pregancy Symptoms</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="#" name="gynecological[]" value="Spodaric Bleeding" >
                  <label class="form-check-label" for="example-radios-default1">Spodaric Bleeding</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="#" name="gynecological[]" value="Reputured Cyst" >
                  <label class="form-check-label" for="example-radios-default1">Reputured Cyst</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="#" name="gynecological[]" value="Device Expelle" >
                  <label class="form-check-label" for="example-radios-default1">Device Expelle</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="#" name="gynecological[]" value="Toxic Shock Syndrome Streptococcal" >
                  <label class="form-check-label" for="example-radios-default1">Toxic Shock Syndrome Streptococcal</label>
                </div>
                <div class="field_wrapper_gyne"></div>
                <div class="form-group">
                    <label for="example-text-input">Please Specify: <small>(use the box below)</small></label>
                    <input type="text" class="form-control new_gyne" id="" name="example-text-input" placeholder="Enter Gynecological Issues">
                </div>
                <div class="form-group">
                  <button type="button" class="btn btn-primary add_button_gyne">Add</button>
              </div>
            </div>
          </div>
          <!--end col-md-2 -->
          <!--begin col-md-2 -->
          <div class="col-md-4">
            <div class="main-services" style="text-align: left;">
              <h5>Mental & Emotional Health </h5>
              <hr>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="#" name="mental[]" value="Anger" >
                <label class="form-check-label" for="example-radios-default1">Anger</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="#" name="mental[]" value="Decrease Libido" >
                <label class="form-check-label" for="example-radios-default1">Decrease Libido</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="#" name="mental[]" value="Mood Swing" >
                <label class="form-check-label" for="example-radios-default1">Mood Swing</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="#" name="mental[]" value="Anxiety Attack" >
                <label class="form-check-label" for="example-radios-default1">Anxiety Attack</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="#" name="mental[]" value="Sucide & Depression" >
                <label class="form-check-label" for="example-radios-default1">Sucide & Depression</label>
              </div>
              <div class="field_wrapper_mental"></div>
              <div class="form-group">
                  <label for="example-text-input">Please Specify: <small>(use the box below)</small></label>
                  <input type="text" class="form-control new_mental" name="example-text-input" placeholder="Enter Mental & Emootional Health">
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-primary add_button_mental">Add</button>
            </div>
            </div>
          </div>
          <!--end col-md-2 -->
          <!--begin col-md-2 -->
          <div class="col-md-4">
            <div class="main-services" style="text-align: left;">
            <h5>Others</h5>
              <hr>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="#" name="other[]" value="Stroke or Heart Attack" >
                <label class="form-check-label" for="example-radios-default1">Stroke or Heart Attack</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="#" name="other[]" value="Sepsis" >
                <label class="form-check-label" for="example-radios-default1">Sepsis</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="#" name="other[]" value="Breast Tenderness" >
                <label class="form-check-label" for="example-radios-default1">Breast Tenderness</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="#" name="other[]" value="Bradycardia" >
                <label class="form-check-label" for="example-radios-default1">Bradycardia</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="#" name="other[]" value="Swelling" >
                <label class="form-check-label" for="example-radios-default1">Swelling</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="#" name="other[]" value="Memory Impairment" >
                <label class="form-check-label" for="example-radios-default1">Memory Impairment</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="#" name="other[]" value="Fatigue" >
                <label class="form-check-label" for="example-radios-default1">Fatigue</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="#" name="other[]" value="Edema" >
                <label class="form-check-label" for="example-radios-default1">Edema</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="#" name="other[]" value="Memory loss" >
                <label class="form-check-label" for="example-radios-default1">Memory loss</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="#" name="other[]" value="Migraines" >
                <label class="form-check-label" for="example-radios-default1">Migraines</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="#" name="other[]" value="Tingling in the toes" >
                <label class="form-check-label" for="example-radios-default1">Tingling in the toes</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="#" name="other[]" value="Constipation" >
                <label class="form-check-label" for="example-radios-default1">Constipation</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="#" name="other[]" value="Muscle Weakness" >
                <label class="form-check-label" for="example-radios-default1">Muscle Weakness</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="#" name="other[]" value="Twitching" >
                <label class="form-check-label" for="example-radios-default1">Twitching</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="#" name="other[]" value="Dry Eyes" >
                <label class="form-check-label" for="example-radios-default1">Dry Eyes</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="#" name="other[]" value="Bloated" >
                <label class="form-check-label" for="example-radios-default1">Bloated</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="#" name="other[]" value="Myocardial Infarction" >
                <label class="form-check-label" for="example-radios-default1">Myocardial Infarction</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="#" name="other[]" value="Anaphylactic Shock" >
                <label class="form-check-label" for="example-radios-default1">Anaphylactic Shock</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="#" name="other[]" value="Abdominal Pain" >
                <label class="form-check-label" for="example-radios-default1">Abdominal Pain</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="#" name="other[]" value="Itchy skin (pruritus)" >
                <label class="form-check-label" for="example-radios-default1">Itchy skin (pruritus)</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="#" name="other[]" value="Cyst Rupture" >
                <label class="form-check-label" for="example-radios-default1">Cyst Rupture</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="#" name="other[]" value="Hives (urticaria)" >
                <label class="form-check-label" for="example-radios-default1">Hives (urticaria)</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="#" name="other[]" value="Eczema" >
                <label class="form-check-label" for="example-radios-default1">Eczema</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="#" name="other[]" value="Endometriosis" >
                <label class="form-check-label" for="example-radios-default1">Endometriosis</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="#" name="other[]" value="Nausea" >
                <label class="form-check-label" for="example-radios-default1">Nausea</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="#" name="other[]" value="Dizziness" >
                <label class="form-check-label" for="example-radios-default1">Dizziness</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="#" name="other[]" value="Muscle Spasms" >
                <label class="form-check-label" for="example-radios-default1">Muscle Spasms</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="#" name="other[]" value="Headache" >
                <label class="form-check-label" for="example-radios-default1">Headache</label>
              </div>
              <div class="field_wrapper_other"></div>
              <div class="form-group">
                  <label for="example-text-input">Please Specify: <small>(use the box below)</small></label>
                  <input type="text" class="form-control new_other"  name="example-text-input" placeholder="Enter Symptoms Others">
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-primary add_button_other">Add</button>
            </div>
        </div>
        </div>
        

      <div class="col-sm-6 col-xl-4">
              <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
  </form>
      </div>
<!-- </form> -->
        <!--end row -->

      <!--end container -->
    </section>
    <!--end section-grey -->

@endsection
