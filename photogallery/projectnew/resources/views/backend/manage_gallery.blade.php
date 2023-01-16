@extends('backend.layout.main')

@section('main_section')

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
     
      <div class="row mt-3">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Basic Table</h5>
			  <div class="table-responsive">
               <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Photo Id</th>
                      <th scope="col">Photo Name</th>
                      <th scope="col">Image</th> 
                      <th scope="col">Multi Img</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($fetch as $d)
                        <tr>
                            <td>{{$d->id}}</td>
                            <td>{{$d->photo_name}}</td>
                           
                            <td><img class="" src="{{url('backend/assets/images/upload/'.$d->photo)}}" width="30px" alt=""></td>
                           
                            <td>                            
                          <?php
                            $string_multi_photo=$d->multi_photo;
                            $arr_multi_photo=explode(',',$string_multi_photo);
                            ?>
                            @foreach($arr_multi_photo as $multi_photo)
                             
                             <img src="{{url('backend/assets/images/upload/'.$multi_photo)}}" width="20px" alt="">
                           
                            @endforeach
                            </td>
</tr>
                            @endforeach
                  </tbody>
                </table>
            </div>
            </div>
          </div>
        </div>
        @endsection