@extends('frontend.layout.main')

@section('main_section')

    <div class="hero-wrap hero-bread" style="background-image: url({{url('frontend/images/back5.jpg')}});">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index">Home</a></span> <span>Contact us</span></p>
            <h1 class="mb-0 bread">Login us</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section bg-light">
      <div class="container">
      	<!-- <div class="row d-flex mb-5 contact-info"> -->          
          
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="{{url('/login1')}}" class="bg-white p-5 contact-form" method="post" enctype="multipart/form-data">
            @csrf
              <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Your Password">
              </div> 
              <div class="form-group">
                  <input type="checkbox" name="rem" class="p-4"> : Remember Me
                </div>           
              <div class="form-group">
                <input type="submit" value="Login" name="login" class="btn btn-primary py-2 px-4">
              </div>
              <div class=" form-group">Don't have an account?<a href="registration">Create</a>
             </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white"></div>
          </div>
        </div>
      </div>
    </section>

    @endsection