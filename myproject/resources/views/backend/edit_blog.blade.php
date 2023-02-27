@extends('backend.layout.main')

@section('main_section')

<div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Blog Form</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                   
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="row">
                    
                    <div class="col-md-12"> 
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Blog Form</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <form class="form-horizontal"  method="post" action="{{url('edit_blog/'.$fetch->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Blog Title</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" value="{{$fetch->title}}" name="title" type="text" placeholder="Blog Name/Title">
                                        </div> 
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Blog Description</label>
                                        <div class="col-sm-10">
                                        <textarea rows="3" class="form-control" name="description" placeholder="Blog Description">{{$fetch->description}}
                                       </textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">File upload</label>
                                        <div class="col-sm-10">
                                      <input type="file" name="img" class="form-control"/>
                                      <img src="{{url('backend/assets/img/upload/blog/'.$fetch->img)}}" width="50px" alt="">
                                        </div>
                                    </div>
                                   
                                   <div class="form-group row">
                                        <div class="col-sm-10 ml-sm-auto">
                                            <button class="btn btn-info" name="submit" type="submit">Save</button>
                                            &nbsp
                                            <a href="{{url('/manage_blog')}}" class="btn btn-secondary">Back</a>
                                        </div>
                                    </div>
                                   </form>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            @endsection
    
    

