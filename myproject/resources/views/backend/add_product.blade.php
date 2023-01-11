@extends('backend.layout.main')

@section('main_section')

<div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Product Form</h1>
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
                                <div class="ibox-title">Product Form</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <form class="form-horizontal" method="post" action="{{url('/add_product')}}" enctype="multipart/form-data">
                                @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Category Name</label>
                                        <div class="col-sm-10">
                                        <select name="cate_id" class="form-control">
                                             <option value="">Select Category</option>
                                             <?php
										foreach($category as $c)
										{
										?>
										<option value="<?php echo $c->id?>">
														<?php echo $c->cat_name?>
										</option>
										<?php		
										}
										?>
                                         </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Product Name</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="prod_name" type="text" placeholder="Product Name">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Short Description</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="short_desc" type="text" placeholder="Short Description">
                                        </div>
                                    </div>
                                   
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Long Description</label>
                                        <div class="col-sm-10">
                                            <textarea rows="3" class="form-control" name="long_desc"  placeholder="Long Description">
                                    </textarea>
                                        </div>
                                    </div>
                                
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Product Img</label>
                                        <div class="col-sm-10">
                                      <input type="file" name="prod_img" class="form-control"/>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Product Multi Img</label>
                                        <div class="col-sm-10">
                                      <input type="file" name="multi_img[]" class="form-control" multiple/>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Product Mainprice</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="main_price" type="text" placeholder="Product Mainprice">
                                        </div> 
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Discount price</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="dis_price" type="text" placeholder="Discount price">
                                        </div>
                                    </div>

                                   <div class="form-group row">
                                        <div class="col-sm-10 ml-sm-auto">
                                            <button class="btn btn-info" name="submit" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            @endsection
    
    

