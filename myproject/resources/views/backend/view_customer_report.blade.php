@extends('backend.layout.main')

@section('main_section')

<div class="content-wrapper">
<!-- START PAGE CONTENT-->
<div class="page-heading">
    <h1 class="page-title">Contact Tables</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="dashboard"><i class="la la-home font-20"></i></a>
        </li>
        
    </ol>
</div>
<div class="page-content fade-in-up">
  
   
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Manage contact</div>
        </div>
        <!-- <div class="ibox-body">  -->
            <div class="table-responsive">
            <div style="overflow-x:auto;"> 
                <table class="table">
                    <thead>
                        <tr>                            
                            <th>Customer Id</th>
                            <th> Name</th>
                            <th>Username</th>
                            <!-- <th>Password</th> -->
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>address</th>
                            <th>Img</th>
                            <th>Gender</th>
                            <th>lag<th>
                            <th>birthdate</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($fetch as $d)
                        <tr>                            
                            <td>{{$d->id}}</td>
                            <td>{{$d->name}}</td>
                            <td>{{$d->username}}</td>
                            <!-- <td>{{$d->password}}</td> -->
                            <td>{{$d->email}}</td>
                            <td>{{$d->mobile}}</td>
                            <td>{{$d->address}}</td>
                            <td>{{$d->img}}</td>
                            <td>{{$d->gender}}</td>
                            <td>{{$d->lag}}</td>
                            <td>{{$d->birthdate}}</td>                            
                          </tr>
                        @endforeach
 
                    </tbody>
                </table>
            </div>
        <!-- </div> -->
    </div>
    
   
</div>
@endsection