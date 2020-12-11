@extends('layouts.app')
@section('content')
  <!-- ======= Hero Section ======= -->

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">DEMO PROJECT</h1>
          <h2 data-aos="fade-up" >This is a demo project as part of CodeGreen Technologies</h2>
          <div data-aos="fade-up">
            <a href="{{route('index')}}" class="btn-get-started scrollto">Sign In</a>
            <a href="{{route('register')}}" class="btn-get-started">Sign Up</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
          <img src="/vendors/home/assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

 

 @endsection