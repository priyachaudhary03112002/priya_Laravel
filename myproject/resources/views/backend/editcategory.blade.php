@extends('backend.layout.main')

@section('main_section')

<div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Category Form</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="dashboard"><i class="la la-home font-20"></i></a>
                    </li>
                   
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Category Form</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <form class="form-horizontal"  method="post" action="{{url('editcategory/'.$fetch->id)}}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Category Name</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" value="{{$fetch->cat_name}}" name="cat_name" type="text" placeholder="Category Name/Title">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">File upload</label>
                                        <div class="col-sm-10">
                                      <input type="file" name="cat_img" class="form-control"/>
                                      <img src="{{url('backend/assets/img/upload/'.$fetch->cat_img)}}" width="50px" alt="">
                                        </div>
                                    </div>
                                   
                                   <div class="form-group row">
                                        <div class="col-sm-10 ml-sm-auto">
                                            <button class="btn btn-info" type="submit">Save</button>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <div class="col-sm-10 ml-sm-auto">
									<a href="{{url('/manage_category')}}">Back</a>
                                    </div>
								</div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            @endsection
    
    

