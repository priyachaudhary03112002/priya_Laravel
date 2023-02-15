@extends('backend.layout.main')

@section('main_section')
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Employee Tables </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Employee tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
           <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Employee table</h4>
                    
                  <form action="{{url('/manage_employee')}}">
                    <div class="table-responsive">
                      <table class="table table-dark">
                        <thead>
                          <tr>
                            <th>Id </th>
                            <th>Name </th>
                            <th> Email </th>
                            <th> Gender </th>
                            <th> Birthdate </th>
                            <th> Lag </th>
                            <th> Img </th>
                            <th> Address </th>
                            <th> Mobile </th>
                            <th> City </th>
                            <th> Country </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($fetch as $d)
                          <tr>
                          <td>{{$d->id}}</td>
                            <td>{{$d->name}}</td>
                            <td>{{$d->email}}</td>
                            <td>{{$d->gender}}</td>
                            <td>{{$d->birthdate}}</td>
                            <td>{{$d->lag}}</td>
                            <td> <img class="" src="{{url('backend/assets/images/upload/'.$d->img)}}" width="40px" alt=""></td>
                            <td>{{$d->address}}</td>
                            <td>{{$d->mobile}}</td>
                            <td>{{$d->city}}</td>
                            <td>{{$d->country}}</td>
                            <td><a href="edit_employee/{{$d->id}}" class="btn btn-outline-primary btn-sm">Edit</a>
                            <a href="delete_employee/{{$d->id}}"class="btn btn-outline-danger btn-sm">Delete</a>
                            
                          </tr>                    
                          @endforeach 
                          
								{{ $fetch->links() }}
							
							 </tbody>
                      </table>
                    </div>
          </form>
                  </div>
                </div>
              </div>
            
            </div>
          </div>
         @endsection