@extends('frontend.layout.main')

@section('main_section')

        <!-- Product Catagories Area Start -->
        <div class="products-catagories-area clearfix">
            <div class="amado-pro-catagory clearfix">

                <!-- Single Catagory -->
                
			@foreach($data as $d)
			
			     <div class="single-products-catagory clearfix">
                    <a href="shop">
                        <img src="{{url('backend/assets/images/upload/'.$d->photo)}}" alt="">
                        <?php
                            $string_multi_photo=$d->multi_photo;
                            $arr_multi_photo=explode(',',$string_multi_photo);
                            ?>
                            @foreach($arr_multi_photo as $multi_photo)
                             
                             <img src="{{url('backend/assets/images/upload/'.$multi_photo)}}" width="20px" alt="">
                           
                            @endforeach
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            
                            <h4>{{$d->photo_name}}</h4>
                        </div>
                    </a>
                </div>
                @endforeach
               </div>
        </div>
        <!-- Product Catagories Area End -->
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

  
    <!-- ##### Newsletter Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row align-items-center">
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-4">
                    <div class="single_widget_area">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="index"><img src="{{url('frontend/img/core-img/logo1.png')}}" alt=""></a>
                        </div>
                        <!-- Copywrite Text -->
                        <p class="copywrite"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> & Re-distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-8">
                    <div class="single_widget_area">

                    @endsection
                        