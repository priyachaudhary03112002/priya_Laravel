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
            <form action="{{url('/manage_product')}}" method="post">
                @csrf
            <div class="input-group">
                <input type="search" class="form-control" name="search" value="{{$search}}" placeholder="search">
                <div class="input-group-btn">
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                </div>
            </div>
            </form>
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
                           <th>status</th>
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
                            <td>
                          <?php
                            $string_multi_img=$d->multi_img;
                            $arr_multi_img=explode(',',$string_multi_img);
                            ?>
                            @foreach($arr_multi_img as $multi_img)
                             
                             <img src="{{url('backend/assets/img/upload/product/'.$multi_img)}}" width="20px" alt="">
                           
                            @endforeach
                            </td>
                            <!-- <td>{{$d->multi_img}}</td> -->
                            <td>{{$d->main_price}}</td>
                            <td>{{$d->dis_price}}</td>
                            <td>
                            @if($d->status=="Stock")
                            <a href="product_status/<?php echo $d->id?>" class="btn btn-success btn-xs btn-rounded"><i class="fa fa-check font-14">{{$d->status}}</a></td>
                            @elseif($d->status=="Out of Stock")
                            <a href="product_status/<?php echo $d->id?>" class="btn btn-danger btn-xs btn-rounded"><i class="fa fa-times font-14">{{$d->status}}</a></td>
                            @endif
                            <td>
                                <a href="editproduct/{{$d->id}}" class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil font-14"></i> Edit</a>
                                <a href="deleteproduct/{{$d->id}}" class="btn btn-default btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i>Delete</a></button>
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