@extends('backend.layout.main')

@section('main_section')
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title"> Your Profile</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index"><i class="la la-home font-20"></i></a>
                    </li>
                   <h5> <li class="breadcrumb-item"> Hii {{$fetch->name}}..!</li></h5>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-lg-5 col-md-4">
                        <div class="ibox" style="background-image: url({{url('frontend/images/bk9.jpg')}})">
                            <div class="ibox-body text-center">
                                <div class="m-t-20">
                                    <img class="img-circle" src="{{url('backend/assets/img/upload/admin/'.$fetch->img)}}" width="100px" height="100px" alt="" />
                                </div>
                                <h5 class="font-strong m-b-10 m-t-10">Meet Your Self</h5>                                
                                <div class="m-b-20 text-muted">Name:{{$fetch->name}}                               
                                <div class="m-b-20 text-muted">Email: {{$fetch->email}} 
                                <div class="m-b-20 text-muted">Mobile:{{$fetch->mobile}}           
                             </div>
						   
                            <button class="btn btn-info btn-rounded m-b-5"><a href="editprofile/{{$fetch->id}}"> Edit</button>
                                   
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    
                </div>
                <style>
                    .profile-social a {
                        font-size: 16px;
                        margin: 0 10px;
                        color: #999;
                    }

                    .profile-social a:hover {
                        color: #485b6f;
                    }

                    .profile-stat-count {
                        font-size: 22px
                    }
                </style>
                
            </div>
            @endsection