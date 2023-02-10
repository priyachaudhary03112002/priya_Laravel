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
        <div class="col-md-2">
        </div>
          <div class="col-md-8 order-md-last d-flex">
            <form action="{{url('editprofile1/'.$fetch->id)}}" class="bg-white p-5 contact-form" method="post" enctype="multipart/form-data">
            @csrf
              <div class="form-group">
                <input type="text" name="name" value="{{$fetch->name}}" class="form-control" auto off>
                <!-- @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror -->
              </div>
              <div class="form-group">
                <input type="text" name="username" value="{{$fetch->username}}" class="form-control"  readonly>
                <!-- @error('username')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror -->
              </div>
            <div class="form-group">
                <input type="text" value="{{$fetch->email}}" name="email" class="form-control" auto off>
                <!-- @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror -->
              </div>
              <div class="form-group">
                <input type="number" name="mobile" value="{{$fetch->mobile}}" class="form-control" placeholder="Mobile">
                <!-- @error('number')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror -->
              </div>
              <div class="control-group">
              <input type="file" name="img" class="form-control">
              <img src="{{url('frontend/images/upload/'.$fetch->img)}}" width="50px" alt="">
            </div>
                 <div class="control-group">
                        <label>Gender</label><br>
                        <div class="form-check-inline">
                        <label class="form-check-label" for="radio1">
                        <input type="radio" class="form-check-input" id="radio1" name="gender" value="male" <?php 
                                    $gender=$fetch->gender;
                                    if($gender=="male")
                                    {
                                        echo "checked";
                                    }
                                    ?>>Male
                        </label>
                        </div>
                        <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                        <input type="radio" class="form-check-input" id="radio2" name="gender" value="female" <?php 
                                    $gender=$fetch->gender;
                                    if($gender=="female")
                                    {
                                        echo "checked";
                                    }
                                    ?>>Female
                        </label>
                     </div> 
                 </div>
                 <div class="col-8 control-group">
                    <h6>Choose Lag</h6>
                    <?php
                        $lag=$fetch->lag;
                        $lag_arr=explode(",",$lag);
                        ?>
                    Hindi: <input type="checkbox" name="lag[]" value="Hindi" <?php
                    if(in_array("Hindi",$lag_arr))
                        {
                            echo "checked";
                        }
                        ?>>
                    English: <input type="checkbox" name="lag[]" value="English"<?php
                        if(in_array("English",$lag_arr))
                        {
                            echo "checked";
                        }
                        ?>>
                    Gujarati: <input type="checkbox" name="lag[]" value="Gujarati" <?php
                        if(in_array("Gujarati",$lag_arr))
                        {
                            echo "checked";
                        }
                        ?>>
                    </div> 
                    <div class="form-group">
                <input type="date" name="birthdate" value="{{$fetch->birthdate}}" class="form-control" placeholder="BirthDate">
              </div>
              <div class="form-group">
                <textarea name="address"  cols="30" rows="4" class="form-control" placeholder="Address">{{$fetch->address}}</textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Save" name="submit" class="btn btn-primary py-2 px-4">
              </div>
              <div class="form-group ">
              <a href="{{url('/profile1')}}">Back</a> 
              </div>             
		 </form>
          
          </div>

          <!-- <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white"></div>
          </div> -->
        </div>
      </div>
    </section>

    @endsection