@extends('layouts.structure')

@section('content')

    <!--begin home section -->
    <section class="home-section" id="home">
      <div class="home-section-overlay"></div>

      <!--begin container -->
      <div class="container">
        <!--begin row -->
        <div class="row">
          <!--begin col-md-8-->
          <div class="col-md-8 mx-auto padding-top-50">
            <h1>About Intrauterine Device (IUD)</h1>
            <!-- <p>
              A brief introductory on MYIUD
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
        <!--begin row -->
        <div class="row">
          <!--begin col-md-12 -->
          <div class="col-md-12 text-center">
          <h4 class="section-title">
              About Intrauterine Device (IUD)
            </h4>

            <p class="section-subtitle">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. In adipisci
              minima corporis ullam at sunt, autem assumenda velit possimus illo ipsam
              dicta a ea quia rerum! Voluptate mollitia sequi libero.
            </p>
            <h5 class="section-title">
              What is an IUD
            </h4>

            <p class="section-subtitle">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. In adipisci
              minima corporis ullam at sunt, autem assumenda velit possimus illo ipsam
              dicta a ea quia rerum! Voluptate mollitia sequi libero.
            </p>

            <h5 class="section-title">
              Why create myIUDexperience
            </h4>

            <p class="section-subtitle">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. In adipisci
              minima corporis ullam at sunt, autem assumenda velit possimus illo ipsam
              dicta a ea quia rerum! Voluptate mollitia sequi libero.
            </p>
          </div>
          <!--end col-md-12 -->

      </div>
      <!--end container -->
    </section>
    <!--end section-grey -->
    <section class="section-grey">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-left">
            <h3 class="section-title">
              The woman behind <br><span style="color: #87cbcf;">{{ config('app.name') }}</span>
            </h3>
            
          </div>
        </div>
      </div>
    </section>

@endsection