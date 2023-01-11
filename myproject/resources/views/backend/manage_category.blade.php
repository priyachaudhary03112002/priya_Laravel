@extends('backend.layout.main')

@section('main_section')

<div class="content-wrapper">
<!-- START PAGE CONTENT-->
<div class="page-heading">
    <h1 class="page-title">Category Tables</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="dashboard"><i class="la la-home font-20"></i></a>
        </li>
        
    </ol>
</div>
<div class="page-content fade-in-up">
  
   
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Manage Category</div>
        </div>
        <div class="ibox-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="50px"></th>
                            <th>Category Id</th>
                            <th>Category Name</th>
                            <th>Category Img</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($fetch as $d)
                        <tr>
                            <td>
                                <label class="ui-checkbox">
                                    <input type="checkbox">
                                    <span class="input-span"></span>
                                </label>
                            </td>
                            <td>{{$d->id}}</td>
                            <td>{{$d->cat_name}}</td>
                            <td> <img class="" src="{{url('backend/assets/img/upload/'.$d->cat_img)}}" width="40px" alt=""></td>
                            
                            <td>
                                <button class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i><a href="editcategory/{{$d->id}}"> Edit</a></button>
                                <button class="btn btn-default btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i><a href="deletecategory/{{$d->id}}"> Delete</a></button>
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