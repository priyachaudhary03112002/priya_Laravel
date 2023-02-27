@extends('frontend.layout.main')

@section('main_section')

    <div class="hero-wrap hero-bread" style="background-image: url({{url('frontend/images/back5.jpg')}});">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index">Home</a></span> <span class="mr-2"><a href="index">Product</a></span> <span>Product Single</span></p>
            <h1 class="mb-0 bread">Profile Page</h1>
          </div>
        </div>
      </div>
    </div>  

				<div class="container mt-4 mb-4 p-3 d-flex justify-content-center"> 
			<div class="card p-4" style="background-image: url({{url('frontend/images/bk1.jpg')}})"> 
				<div class=" image d-flex flex-column justify-content-center align-items-center"> 
				<button class="btn_p btn_p-secondary"> 
				<img src="{{url('frontend/images/upload/'.$fetch->img)}}" height="100" width="100" />
				</button> 
				<span class="name mt-3">Name:{{$fetch->name}}</span> 
				<span class="idd">Username: {{$fetch->username}} </span> 
				<div class="d-flex flex-row justify-content-center align-items-center gap-2"> 
				<span class="idd">Email:{{$fetch->email}}</span>
				</div>
				<div class="d-flex flex-row justify-content-center align-items-center gap-2"> 
				<span class="idd">Mobile:{{$fetch->mobile}}</span>
			</div>
			<div class="d-flex flex-row justify-content-center align-items-center gap-2"> 
				<span class="idd">Address:{{$fetch->address}}</span>
			</div>
			<div class="d-flex flex-row justify-content-center align-items-center gap-2"> 
				<span class="idd">Gender:{{$fetch->gender}}</span>
			</div>
			<div class="d-flex flex-row justify-content-center align-items-center gap-2"> 
				<span class="idd">Lag:{{$fetch->lag}}</span>
			</div>
			<div class="d-flex flex-row justify-content-center align-items-center gap-2"> 
				<span class="idd">Birthdate:{{$fetch->birthdate}}</span>
			</div>
					
				 
					<div class=" d-flex mt-2"> 
					<button class="btn1 btn-dark"> <a href="editprofile1/{{$fetch->id}}">Edit Profile</button> 
					</div> 
					
					  <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> <span><i class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span> <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> </div> 
					  <div class=" px-2 rounded mt-4 date "> 
					  </div> </div> </div>
					</div>


   

    @endsection