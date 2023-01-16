@extends('backend.layout.main')

@section('main_section')

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

    <div class="row mt-3">
      <div class="col-lg-12">
         <div class="card"> 
           <div class="card-body">
           <div class="card-title">Vertical Form</div>
           <hr>
            <form method="post" action="{{url('/add_gallery')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">         
            <label for="input-1">Photo Name</label>
            <input type="text" class="form-control" id="input-1" name="photo_name" placeholder="Enter Your Name">
           </div>
           <div class="form-group">
            <label for="input-2">Add Photos</label>
            <input type="file" class="form-control" id="input-2" name="photo">
           </div>
           <div class="form-group">
           <label for="input-2">Multi Photo</label>                         
            <input type="file" name="multi_photo[]" class="form-control" multiple/>
              </div>
          
           
           <div class="form-group">
            <button type="submit"  name="submit" class="btn btn-light px-5"> submit</button>
          </div>
          </form>
         </div>
         </div>
      </div>

      @endsection