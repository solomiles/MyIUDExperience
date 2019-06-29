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
                      <div class="table-responsive">
                            <form action=" {{ route('track-symptoms.store') }}" role="form" method="Post">
                               @csrf 
                               <input value=" {{auth::user()->id}} " name="user_id" type="hidden">
                                <table class="table table-striped table-striped table-vcenter">
                                    <tbody>
                                        <tr>
                                            <h5>Apperance Change</h5>
                                            <td>
                                                Face acne
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="face" id="face1" value="0" >
                                                <label class="custom-control-label" for="face1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="face" id="face2" value="20" >
                                                <label class="custom-control-label" for="face2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="face" id="face3" value="50" >
                                                <label class="custom-control-label" for="face3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="face" id="face4" value="85" >
                                                <label class="custom-control-label" for="face4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                Mild to excessive facial hair growth
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="hairGrowth" id="hairGrowth1" value="0" >
                                                <label class="custom-control-label" for="hairGrowth1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="hairGrowth" id="hairGrowth2" value="20" >
                                                <label class="custom-control-label" for="hairGrowth2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="hairGrowth" id="hairGrowth3" value="50" >
                                                <label class="custom-control-label" for="hairGrowth3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="hairGrowth" id="hairGrowth4" value="85" >
                                                <label class="custom-control-label" for="hairGrowth4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                Body Acne
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="bodyAcne" id="bodyAcne1" value="0" >
                                                <label class="custom-control-label" for="bodyAcne1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="bodyAcne" id="bodyAcne2" value="20" >
                                                <label class="custom-control-label" for="bodyAcne2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="bodyAcne" id="bodyAcne3" value="50" >
                                                <label class="custom-control-label" for="bodyAcne3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="bodyAcne" id="bodyAcne4" value="85" >
                                                <label class="custom-control-label" for="bodyAcne4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                Thining Hair
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="thiningHair" id="thiningHair1" value="0" >
                                                <label class="custom-control-label" for="thiningHair1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="thiningHair" id="thiningHair2" value="20" >
                                                <label class="custom-control-label" for="thiningHair2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="thiningHair" id="thiningHair3" value="50" >
                                                <label class="custom-control-label" for="thiningHair3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="thiningHair" id="thiningHair4" value="85" >
                                                <label class="custom-control-label" for="thiningHair4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Weight Gain
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="weightGain" id="weightGain1" value="0" >
                                                <label class="custom-control-label" for="weightGain1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="weightGain" id="weightGain2" value="20" >
                                                <label class="custom-control-label" for="weightGain2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="weightGain" id="weightGain3" value="50" >
                                                <label class="custom-control-label" for="weightGain3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="weightGain" id="weightGain4" value="85" >
                                                <label class="custom-control-label" for="weightGain4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>
                                        <tr class="field_wrapper"></tr><tr></tr>
                                          <tr>
                                            <td>
                                                <div class="form-group">
                                                  <label for="example-text-input">Others Symptoms (Please Specify)</label>
                                                  <input type="text" class="form-control new_appearance" id="example-text-input" name="" placeholder="Enter Symptoms">
                                                    <br><button type="button" class="btn btn-primary add_button_apperamce">Add</button>
                                                </div>
                                            </td>
                                          </tr>
                                    </tbody>
                                </table>
                                <table class="table table-striped table-striped table-vcenter">
                                    <tbody>
                                        <tr>
                                            <h5>Gynecological Pain</h5>
                                            <td>
                                                Device Expelle
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="deviceExpelle" id="deviceExpelle1" value="0" >
                                                <label class="custom-control-label" for="deviceExpelle1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="deviceExpelle" id="deviceExpelle2" value="20" >
                                                <label class="custom-control-label" for="deviceExpelle2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="deviceExpelle" id="deviceExpelle3" value="50" >
                                                <label class="custom-control-label" for="deviceExpelle3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="deviceExpelle" id="deviceExpelle4" value="85" >
                                                <label class="custom-control-label" for="deviceExpelle4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                              Reputured Cyst
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="ruptured" id="ruptured1" value="0" >
                                                <label class="custom-control-label" for="ruptured1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="ruptured" id="ruptured2" value="20" >
                                                <label class="custom-control-label" for="ruptured2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="ruptured" id="ruptured3" value="50" >
                                                <label class="custom-control-label" for="ruptured3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="ruptured" id="ruptured4" value="85" >
                                                <label class="custom-control-label" for="ruptured4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                              Spodaric Bleeding
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="spodaric" id="spodaric1" value="0" >
                                                <label class="custom-control-label" for="spodaric1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="spodaric" id="spodaric2" value="20" >
                                                <label class="custom-control-label" for="spodaric2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="spodaric" id="spodaric3" value="50" >
                                                <label class="custom-control-label" for="spodaric3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="spodaric" id="spodaric4" value="85" >
                                                <label class="custom-control-label" for="spodaric4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Cysts on the ovary
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="cysts" id="cysts1" value="0" >
                                                <label class="custom-control-label" for="cysts1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="cysts" id="cysts2" value="20" >
                                                <label class="custom-control-label" for="cysts2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="cysts" id="cysts3" value="50" >
                                                <label class="custom-control-label" for="cysts3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="cysts" id="cysts4" value="85" >
                                                <label class="custom-control-label" for="cysts4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Urinary Tract Infection (UTI)
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="urinary" id="urinary1" value="0" >
                                                <label class="custom-control-label" for="urinary1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="urinary" id="urinary2" value="20" >
                                                <label class="custom-control-label" for="urinary2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="urinary" id="urinary3" value="50" >
                                                <label class="custom-control-label" for="urinary3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="urinary" id="urinary4" value="85" >
                                                <label class="custom-control-label" for="urinary4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Pelvic Pain
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="pelvic" id="pelvic1" value="0" >
                                                <label class="custom-control-label" for="pelvic1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="pelvic" id="pelvic2" value="20" >
                                                <label class="custom-control-label" for="pelvic2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="pelvic" id="pelvic3" value="50" >
                                                <label class="custom-control-label" for="pelvic3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="pelvic" id="pelvic4" value="85" >
                                                <label class="custom-control-label" for="pelvic4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Pain During Sex
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="painDuringSex" id="painDuringSex1" value="0" >
                                                <label class="custom-control-label" for="painDuringSex1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="painDuringSex" id="painDuringSex2" value="20" >
                                                <label class="custom-control-label" for="painDuringSex2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="painDuringSex" id="painDuringSex3" value="50" >
                                                <label class="custom-control-label" for="painDuringSex3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="painDuringSex" id="painDuringSex4" value="85" >
                                                <label class="custom-control-label" for="painDuringSex4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Bacterial Vaginosis
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="bacterial" id="bacterial1" value="0" >
                                                <label class="custom-control-label" for="bacterial1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="bacterial" id="bacterial2" value="20" >
                                                <label class="custom-control-label" for="bacterial2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="bacterial" id="bacterial3" value="50" >
                                                <label class="custom-control-label" for="bacterial3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="bacterial" id="bacterial4" value="85" >
                                                <label class="custom-control-label" for="bacterial4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>
                                                Yeast Infection
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="yeast" id="yeast1" value="0" >
                                                <label class="custom-control-label" for="yeast1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="yeast" id="yeast2" value="20" >
                                                <label class="custom-control-label" for="yeast2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="yeast" id="yeast3" value="50" >
                                                <label class="custom-control-label" for="yeast3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="yeast" id="yeast4" value="85" >
                                                <label class="custom-control-label" for="yeast4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Unusual Vaginal Discharge (White, Thick Discharge)
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="unusualVaginal" id="unusualVaginal1" value="0" >
                                                <label class="custom-control-label" for="unusualVaginal1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="unusualVaginal" id="unusualVaginal2" value="20" >
                                                <label class="custom-control-label" for="unusualVaginal2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="unusualVaginal" id="unusualVaginal3" value="50" >
                                                <label class="custom-control-label" for="unusualVaginal3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="unusualVaginal" id="unusualVaginal4" value="85" >
                                                <label class="custom-control-label" for="unusualVaginal4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Genital Sores
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="genitialSores" id="genitialSores1" value="0" >
                                                <label class="custom-control-label" for="genitialSores1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="genitialSores" id="genitialSores2" value="20" >
                                                <label class="custom-control-label" for="genitialSores2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="genitialSores" id="genitialSores3" value="50" >
                                                <label class="custom-control-label" for="genitialSores3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="genitialSores" id="genitialSores4" value="85" >
                                                <label class="custom-control-label" for="genitialSores4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Swollen Breast
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="swollenBreast" id="swollenBreast1" value="0" >
                                                <label class="custom-control-label" for="swollenBreast1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="swollenBreast" id="swollenBreast2" value="20" >
                                                <label class="custom-control-label" for="swollenBreast2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="swollenBreast" id="swollenBreast3" value="50" >
                                                <label class="custom-control-label" for="swollenBreast3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="swollenBreast" id="swollenBreast4" value="85" >
                                                <label class="custom-control-label" for="swollenBreast4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                              Perforation (attached to/embedded in uterus)
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="perforation" id="perforation1" value="0" >
                                                <label class="custom-control-label" for="perforation1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="perforation" id="perforation2" value="20" >
                                                <label class="custom-control-label" for="perforation2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="perforation" id="perforation3" value="50" >
                                                <label class="custom-control-label" for="perforation3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="perforation" id="perforation4" value="85" >
                                                <label class="custom-control-label" for="perforation4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                              Missed Menstrual Periods
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="missedMenstrual" id="missedMenstrual1" value="0" >
                                                <label class="custom-control-label" for="missedMenstrual1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="missedMenstrual" id="missedMenstrual2" value="20" >
                                                <label class="custom-control-label" for="missedMenstrual2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="missedMenstrual" id="missedMenstrual3" value="50" >
                                                <label class="custom-control-label" for="missedMenstrual3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="missedMenstrual" id="missedMenstrual4" value="85" >
                                                <label class="custom-control-label" for="missedMenstrual4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                            Toxic Shock Syndrome Streptococcal
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="toxicShock" id="toxicShock1" value="0" >
                                                <label class="custom-control-label" for="toxicShock1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="toxicShock" id="toxicShock2" value="20" >
                                                <label class="custom-control-label" for="toxicShock2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="toxicShock" id="toxicShock3" value="50" >
                                                <label class="custom-control-label" for="toxicShock3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="toxicShock" id="toxicShock4" value="85" >
                                                <label class="custom-control-label" for="toxicShock4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>
                                        <tr class="field_wrapper_gynecological"></tr><tr></tr>
                                          <tr>
                                            <td>
                                                <div class="form-group">
                                                  <label for="example-text-input">Others Symptoms (Please Specify)</label>
                                                  <input type="text" class="form-control new_gynecological" id="example-text-input" name="" placeholder="Enter Symptoms">
                                                    <br><button type="button" class="add_button_gynecological btn btn-primary">Add</button>
                                                </div>
                                            </td>
                                          </tr>
                                    </tbody>
                                </table>
                                <table class="table table-striped table-striped table-vcenter">
                                    <tbody>
                                        <tr>
                                            <h5>Mental and Emotional Health</h5>
                                            <td>
                                                Depression
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="depression" id="depression1" value="0" >
                                                <label class="custom-control-label" for="depression1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="depression" id="depression2" value="20" >
                                                <label class="custom-control-label" for="depression2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="depression" id="depression3" value="50" >
                                                <label class="custom-control-label" for="depression3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="depression" id="depression4" value="85" >
                                                <label class="custom-control-label" for="depression4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                              Mood Swings
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="moodSwings" id="moodSwings1" value="0" >
                                                <label class="custom-control-label" for="moodSwings1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="moodSwings" id="moodSwings2" value="20" >
                                                <label class="custom-control-label" for="moodSwings2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="moodSwings" id="moodSwings3" value="50" >
                                                <label class="custom-control-label" for="moodSwings3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="moodSwings" id="moodSwings4" value="85" >
                                                <label class="custom-control-label" for="moodSwings4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Anger
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="anger" id="anger1" value="0" >
                                                <label class="custom-control-label" for="anger1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="anger" id="anger2" value="20" >
                                                <label class="custom-control-label" for="anger2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="anger" id="anger3" value="50" >
                                                <label class="custom-control-label" for="anger3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="anger" id="anger4" value="85" >
                                                <label class="custom-control-label" for="anger4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Lost sexual desire (low sex drive)
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="lostSexualDesire" id="lostSexualDesire1" value="0" >
                                                <label class="custom-control-label" for="lostSexualDesire1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="lostSexualDesire" id="lostSexualDesire2" value="20" >
                                                <label class="custom-control-label" for="lostSexualDesire2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="lostSexualDesire" id="lostSexualDesire3" value="50" >
                                                <label class="custom-control-label" for="lostSexualDesire3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="lostSexualDesire" id="lostSexualDesire4" value="85" >
                                                <label class="custom-control-label" for="lostSexualDesire4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Anxiety
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="anxiety" id="anxiety1" value="0" >
                                                <label class="custom-control-label" for="anxiety1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="anxiety" id="anxiety2" value="20" >
                                                <label class="custom-control-label" for="anxiety2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="anxiety" id="anxiety3" value="50" >
                                                <label class="custom-control-label" for="anxiety3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="anxiety" id="anxiety4" value="85" >
                                                <label class="custom-control-label" for="anxiety4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>
                                        <tr class="field_wrapper_mental"></tr><tr></tr>
                                        <tr>
                                          <td>
                                              <div class="form-group">
                                                <label for="example-text-input">Others Symptoms (Please Specify)</label>
                                                <input type="text" class="form-control new_mental" id="example-text-input" name="" placeholder="Enter Symptoms">
                                                  <br><button type="button" class="btn btn-primary add_button_mental">Add</button>
                                              </div>
                                          </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-striped table-striped table-vcenter">
                                    <tbody>
                                        <tr>
                                            <h5>Physiological</h5>
                                            <td>
                                                Memory Loss
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="memoryLoss" id="memoryLoss1" value="0" >
                                                <label class="custom-control-label" for="memoryLoss1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="memoryLoss" id="memoryLoss2" value="20" >
                                                <label class="custom-control-label" for="memoryLoss2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="memoryLoss" id="memoryLoss3" value="50" >
                                                <label class="custom-control-label" for="memoryLoss3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="memoryLoss" id="memoryLoss4" value="85" >
                                                <label class="custom-control-label" for="memoryLoss4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Fatigue
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="fatigue" id="fatigue1" value="0" >
                                                <label class="custom-control-label" for="fatigue1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="fatigue" id="fatigue2" value="20" >
                                                <label class="custom-control-label" for="fatigue2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="fatigue" id="fatigue3" value="50" >
                                                <label class="custom-control-label" for="fatigue3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="fatigue" id="fatigue4" value="85" >
                                                <label class="custom-control-label" for="fatigue4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                              Lower back pain
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="lowerBackPain" id="lowerBackPain1" value="0" >
                                                <label class="custom-control-label" for="lowerBackPain1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="lowerBackPain" id="lowerBackPain2" value="20" >
                                                <label class="custom-control-label" for="lowerBackPain2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="lowerBackPain" id="lowerBackPain3" value="50" >
                                                <label class="custom-control-label" for="lowerBackPain3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="lowerBackPain" id="lowerBackPain4" value="85" >
                                                <label class="custom-control-label" for="lowerBackPain4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Lost of balance
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="lostOfBalance" id="lostOfBalance1" value="0" >
                                                <label class="custom-control-label" for="lostOfBalance1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="lostOfBalance" id="lostOfBalance2" value="20" >
                                                <label class="custom-control-label" for="lostOfBalance2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="lostOfBalance" id="lostOfBalance3" value="50" >
                                                <label class="custom-control-label" for="lostOfBalance3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="lostOfBalance" id="lostOfBalance4" value="85" >
                                                <label class="custom-control-label" for="lostOfBalance4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Headache
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="headache" id="headache1" value="0" >
                                                <label class="custom-control-label" for="headache1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="headache" id="headache2" value="20" >
                                                <label class="custom-control-label" for="headache2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="headache" id="headache3" value="50" >
                                                <label class="custom-control-label" for="headache3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="headache" id="headache4" value="85" >
                                                <label class="custom-control-label" for="headache4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Dizziness
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="dizziness" id="dizziness1" value="0" >
                                                <label class="custom-control-label" for="dizziness1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="dizziness" id="dizziness2" value="20" >
                                                <label class="custom-control-label" for="dizziness2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="dizziness" id="dizziness3" value="50" >
                                                <label class="custom-control-label" for="dizziness3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="dizziness" id="dizziness4" value="85" >
                                                <label class="custom-control-label" for="dizziness4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Nausea
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="nausea" id="nausea1" value="0" >
                                                <label class="custom-control-label" for="nausea1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="nausea" id="nausea2" value="20" >
                                                <label class="custom-control-label" for="nausea2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="nausea" id="nausea3" value="50" >
                                                <label class="custom-control-label" for="nausea3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="nausea" id="nausea4" value="85" >
                                                <label class="custom-control-label" for="nausea4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Endometriosis
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="endometriosis" id="endometriosis1" value="0" >
                                                <label class="custom-control-label" for="endometriosis1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="endometriosis" id="endometriosis2" value="20" >
                                                <label class="custom-control-label" for="endometriosis2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="endometriosis" id="endometriosis3" value="50" >
                                                <label class="custom-control-label" for="endometriosis3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="endometriosis" id="endometriosis4" value="85" >
                                                <label class="custom-control-label" for="endometriosis4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Eczema
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="eczema" id="eczema1" value="0" >
                                                <label class="custom-control-label" for="eczema1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="eczema" id="eczema2" value="20" >
                                                <label class="custom-control-label" for="eczema2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="eczema" id="eczema3" value="50" >
                                                <label class="custom-control-label" for="eczema3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="eczema" id="eczema4" value="85" >
                                                <label class="custom-control-label" for="eczema4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Itchy skin (pruritus)
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="itchySkin" id="itchySkin1" value="0" >
                                                <label class="custom-control-label" for="itchySkin1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="itchySkin" id="itchySkin2" value="20" >
                                                <label class="custom-control-label" for="itchySkin2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="itchySkin" id="itchySkin3" value="50" >
                                                <label class="custom-control-label" for="itchySkin3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="itchySkin" id="itchySkin4" value="85" >
                                                <label class="custom-control-label" for="itchySkin4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Abdominal pain
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="abdominalPain" id="abdominalPain1" value="0" >
                                                <label class="custom-control-label" for="abdominalPain1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="abdominalPain" id="abdominalPain2" value="20" >
                                                <label class="custom-control-label" for="abdominalPain2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="abdominalPain" id="abdominalPain3" value="50" >
                                                <label class="custom-control-label" for="abdominalPain3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="abdominalPain" id="abdominalPain4" value="85" >
                                                <label class="custom-control-label" for="abdominalPain4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                Anaphylactic shock
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="anaphylactic" id="anaphylactic1" value="0" >
                                                <label class="custom-control-label" for="anaphylactic1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="anaphylactic" id="anaphylactic2" value="20" >
                                                <label class="custom-control-label" for="anaphylactic2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="anaphylactic" id="anaphylactic3" value="50" >
                                                <label class="custom-control-label" for="anaphylactic3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="anaphylactic" id="anaphylactic4" value="85" >
                                                <label class="custom-control-label" for="anaphylactic4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                              Bloated
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="bloated" id="bloated1" value="0" >
                                                <label class="custom-control-label" for="bloated1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="bloated" id="bloated2" value="20" >
                                                <label class="custom-control-label" for="bloated2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="bloated" id="bloated3" value="50" >
                                                <label class="custom-control-label" for="bloated3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="bloated" id="bloated4" value="85" >
                                                <label class="custom-control-label" for="bloated4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                              Dry eyes
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="dryEyes" id="dryEyes1" value="0" >
                                                <label class="custom-control-label" for="dryEyes1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="dryEyes" id="dryEyes2" value="20" >
                                                <label class="custom-control-label" for="dryEyes2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="dryEyes" id="dryEyes3" value="50" >
                                                <label class="custom-control-label" for="dryEyes3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="dryEyes" id="dryEyes4" value="85" >
                                                <label class="custom-control-label" for="dryEyes4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                            Muscle weakness
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="muscleWeakness" id="muscleWeakness1" value="0" >
                                                <label class="custom-control-label" for="muscleWeakness1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="muscleWeakness" id="muscleWeakness2" value="20" >
                                                <label class="custom-control-label" for="muscleWeakness2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="muscleWeakness" id="muscleWeakness3" value="50" >
                                                <label class="custom-control-label" for="muscleWeakness3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="muscleWeakness" id="muscleWeakness4" value="85" >
                                                <label class="custom-control-label" for="muscleWeakness4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                            Muscle spasm
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="muscleSpasm" id="muscleSpasm1" value="0" >
                                                <label class="custom-control-label" for="muscleSpasm1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="muscleSpasm" id="muscleSpasm2" value="20" >
                                                <label class="custom-control-label" for="muscleSpasm2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="muscleSpasm" id="muscleSpasm3" value="50" >
                                                <label class="custom-control-label" for="muscleSpasm3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="muscleSpasm" id="muscleSpasm4" value="85" >
                                                <label class="custom-control-label" for="muscleSpasm4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                            Constipation
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="constipation" id="constipation1" value="0" >
                                                <label class="custom-control-label" for="constipation1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="constipation" id="constipation2" value="20" >
                                                <label class="custom-control-label" for="constipation2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="constipation" id="constipation3" value="50" >
                                                <label class="custom-control-label" for="constipation3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="constipation" id="constipation4" value="85" >
                                                <label class="custom-control-label" for="constipation4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <td>
                                            Tingling in the toes
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="tingling" id="tingling1" value="0" >
                                                <label class="custom-control-label" for="tingling1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="tingling" id="tingling2" value="20" >
                                                <label class="custom-control-label" for="tingling2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="tingling" id="tingling3" value="50" >
                                                <label class="custom-control-label" for="tingling3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="tingling" id="tingling4" value="85" >
                                                <label class="custom-control-label" for="tingling4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <td>
                                            Edema (swelling)
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="edema" id="edema1" value="0" >
                                                <label class="custom-control-label" for="edema1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="edema" id="edema2" value="20" >
                                                <label class="custom-control-label" for="edema2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="edema" id="edema3" value="50" >
                                                <label class="custom-control-label" for="edema3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="edema" id="edema4" value="85" >
                                                <label class="custom-control-label" for="edema4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <td>
                                            Bradycardia (fast heart beat)
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="bradycardia" id="bradycardia1" value="0" >
                                                <label class="custom-control-label" for="bradycardia1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="bradycardia" id="bradycardia2" value="20" >
                                                <label class="custom-control-label" for="bradycardia2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="bradycardia" id="bradycardia3" value="50" >
                                                <label class="custom-control-label" for="bradycardia3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="bradycardia" id="bradycardia4" value="85" >
                                                <label class="custom-control-label" for="bradycardia4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <td>
                                            Breast tenderness
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="breastTenderness" id="breastTenderness1" value="0" >
                                                <label class="custom-control-label" for="breastTenderness1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="breastTenderness" id="breastTenderness2" value="20" >
                                                <label class="custom-control-label" for="breastTenderness2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="breastTenderness" id="breastTenderness3" value="50" >
                                                <label class="custom-control-label" for="breastTenderness3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="breastTenderness" id="breastTenderness4" value="85" >
                                                <label class="custom-control-label" for="breastTenderness4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <td>
                                            Post IUD removal crash
                                            </td>

                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="postIud" id="postIud1" value="0" >
                                                <label class="custom-control-label" for="postIud1">
                                                    None
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="postIud" id="postIud2" value="20" >
                                                <label class="custom-control-label" for="postIud2">
                                                    Mild
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="postIud" id="postIud3" value="50" >
                                                <label class="custom-control-label" for="postIud3">
                                                    Moderate
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" name="postIud" id="postIud4" value="85" >
                                                <label class="custom-control-label" for="postIud4">
                                                    Severe
                                                </label>
                                              </div>
                                            </td>

                                        </tr>
                                        <tr class="field_wrapper_physiological"></tr>
                                        <tr>
                                          <td>
                                              <div class="form-group">
                                                <label for="example-text-input">Others Symptoms (Please Specify)</label>
                                                <input type="text" class="form-control new_physiological" id="example-text-input" name="" placeholder="Enter Symptoms">
                                                  <br><button type="button" class="btn btn-primary add_button_physiological">Add</button>
                                              </div>
                                          </td>
                                        </tr>
                                    </tbody>
                                </table>
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
                    <!-- END Full Table -->
<!-- </form> -->
        <!--end row -->

      <!--end container -->
    </section>
    <!--end section-grey -->

@endsection
