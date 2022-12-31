@extends('frontend.layout.main')

@section('main_section')

    <div class="hero-wrap hero-bread" style="background-image: url({{url('frontend/images/back5.jpg')}});">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index">Home</a></span> <span>Contact us</span></p>
            <h1 class="mb-0 bread">Register</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section bg-light">
      <div class="container">
      	<!-- <div class="row d-flex mb-5 contact-info"> -->          
          
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="#" class="bg-white p-5 contact-form" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Your Username">
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Your Password">
              </div>
              <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="number" name="number" class="form-control" placeholder="Mobile">
              </div>
              <div class="control-group">
              <input type="file" name="img" class="form-control" name="img">
                 </div>
                 <div class="control-group">
                        <label>Gender</label><br>
                        <div class="form-check-inline">
                        <label class="form-check-label" for="radio1">
                        <input type="radio" class="form-check-input" id="radio1" name="gender" value="male" checked>Male
                        </label>
                        </div>
                        <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                        <input type="radio" class="form-check-input" id="radio2" name="gender" value="female">Female
                        </label>
                     </div>
                 </div>
                 <div class="col-8 control-group">
                    <h6>Choose Lag</h6>
                    Hindi: <input type="checkbox" name="lag[]" value="Hindi" >
                    English: <input type="checkbox" name="lag[]" value="English">
                    Gujarati: <input type="checkbox" name="lag[]" value="Gujarati">
                    </div> 
              <div class="form-group">
                <input type="submit" value="Submit" name="submit" class="btn btn-primary py-2 px-4">
              </div>
              <div class=" form-group">
                 <a href="login1">CLICK HERE FOR LOGIN</a>
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