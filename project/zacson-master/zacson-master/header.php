<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gym trainer | Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css"> 
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="black-bg">
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper d-flex align-items-center justify-content-between">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="index">Home</a></li>
                                    <li><a href="about">About</a></li>
                                    <li><a href="contact">Contact</a></li>
                                    <li><a href="courses">Courses</a>
                                         <ul class="submenu">
                                        <li><a href="courses">Courses</a>
                                         <li><a href="gallery">Gallery</a></li>  
                                          <li><a href="pricing">Pricing</a></li> 
                                          
                                          </ul> 
                                    </li>
                                   
                                    <li><a href="blog">Blog</a>
                                        <ul class="submenu">
                                            <li><a href="blog">Blog</a></li>
                                            <li><a href="blog_details">Blog Details</a></li>
                                            <li><a href="elements">Elements</a></li>
                                          </ul>
                                    </li>
                                    
                                    <li class="nav-item"><a class="nav-link" href="login">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="register">Register</a></li>
                        <?php
                            if(isset($_SESSION['name']))
                            {
                            ?>
                           <li>
                        <a href="#">User <?php echo $_SESSION['name']?> <i class="fa fa-angle-down mt-1"></i></a>
                        <ul class="submenu">
                         <li>
                        <a href="profile">profile</a>
                             </li> 
                             </ul>      
                        </li>
                        <li>
                    <a href="logout" class="nav-item nav-link">Logout</a>
                      <?php
                        }
                        else
                        {
                            ?>
                            <?php
                        }
                        ?>
                    </li>
                    
                                </ul>
                            </nav>
                        </div>          
                        <!-- Header-btn -->
                        <!-- <div class="header-btns d-none d-lg-block f-right">
                           <a href="contact" class="btn">Contact me</a>
                       </div> -->
                       <!-- Mobile Menu -->
                       <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>