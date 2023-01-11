@extends('backend.layout.main')

@section('main_section')

<div class="content-wrapper">
<!-- START PAGE CONTENT-->
<div class="page-heading">
    <h1 class="page-title">Product Tables</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index"><i class="la la-home font-20"></i></a>
        </li>
        
    </ol>
</div> 
<div class="page-content fade-in-up">
  
   
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Manage Product</div>
        </div>
        <div class="ibox-body">
        <div class="table-responsive">
        <div style="overflow-x:auto;">
            <table class="table">
                    <thead>
                        
                    <tr>
                            <th> Product Id </th>
                            <th>Category Name</th>
                            <th>Product Name</th>
                            <th>Short Description</th>
                           <th> Long Description</th>
                           <th> Product Img</th>
                            <th>Product Multi Img</th>
                           <th> Product Mainprice</th>
                           <th> Discount price </th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($fetch as $d)
                        <tr>
                            <td>{{$d->id}}</td>
                            <td>{{$d->cat_name}}</td>
                            <td>{{$d->prod_name}}</td>
                            <td>{{$d->short_desc}}</td>
                            <td>{{$d->long_desc}}</td>
                            <td><img class="" src="{{url('backend/assets/img/upload/product/'.$d->prod_img)}}" width="30px" alt=""></td>
                        
                          <?php
                            $string_multi_img=$d->multi_img;
                            $arr_multi_img=explode(',',$string_multi_img);
                            ?>
                            @foreach($arr_multi_img as $multi_img)
                             <td>
                                <img src="{{url('backend/assets/img/upload/product/'.$multi_img)}}" width="30px" alt="">
                            </td>
                            @endforeach
                           
                            <!-- <td>{{$d->multi_img}}</td> -->
                            <td>{{$d->main_price}}</td>
                            <td>{{$d->dis_price}}</td>
                            <td>
                                <button class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i><a href="editproduct/{{$d->id}}"> Edit</a></button>
                                <button class="btn btn-default btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i><a href="deleteproduct/{{$d->id}}">Delete</a></button>
                            </td>
                        </tr>
                       
                       @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
    
   
</div>
@endsection

<!-- <a class="moreless-button" href="#"> Read more
                                 <p id="text"> </p> -->