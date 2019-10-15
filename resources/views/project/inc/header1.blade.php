<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from ecologytheme.com/theme/travelstar/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Oct 2019 06:19:15 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="TravelStar - Tour, Travel, Travel Agency Template">
    <meta name="keywords" content="Tour, Travel, Travel Agency Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelStar - Tour, Travel & Travel Agency Template</title>
    <!-- Google Fonts Includes -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- Favi icon -->
     <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('frontend/images/images/favicon.ico')}}">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{URL::asset('frontend/css/assets/bootstrap.min.css')}}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{URL::asset('frontend/css/assets/animate.css')}}">
    <!-- Button Hover animate css -->
    <link rel="stylesheet" href="{{URL::asset('frontend/css/assets/hover-min.css')}}">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="{{URL::asset('frontend/css/assets/jquery-ui.min.css')}}">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{URL::asset('frontend/css/assets/meanmenu.min.css')}}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{URL::asset('frontend/css/assets/owl.carousel.min.css')}}">
    <!-- slick css -->
    <link rel="stylesheet" href="{{URL::asset('frontend/css/assets/slick.css')}}">
    <!-- chosen.min-->
    <link rel="stylesheet" href="{{URL::asset('frontend/css/assets/jquery-customselect.css')}}">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{URL::asset('frontend/css/assets/font-awesome.min.css')}}">
    <!-- magnific Css -->
    <link rel="stylesheet" href="{{URL::asset('frontend/css/assets/magnific-popup.css')}}">
    <!-- Revolution Slider -->
    <link rel="stylesheet" href="{{URL::asset('frontend/css/assets/revolution/layers.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/assets/revolution/navigation.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/assets/revolution/settings.css')}}">
    <!-- Preloader css -->
    <link rel="stylesheet" href="{{URL::asset('frontend/css/assets/preloader.css')}}"> 
    <!-- custome css -->
    <link rel="stylesheet" href="{{URL::asset('frontend/css/style.css')}}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{URL::asset('frontend/css/responsive.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/master.css')}}">
    <!-- modernizr css -->
    <script src="{{URL::asset('frontend/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>
</head>
<body>
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- header area start here -->
<header class="index-2">
    <div class="header_top_area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="contact_wrapper_top">
                        <ul class="header_top_contact">
                            <li><i class="fa fa-phone" aria-hidden="true"></i>+123-456-7890</li>
                            <li><i class="fa fa-envelope-o" aria-hidden="true"></i>info@yourcompany.com</li>
                        </ul>
                        <div class="book-btn">
                            <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- header top end -->

    <div class="main_nav">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-12 tap-v-responsive">
                    <div class="logo-area">
                        <a href="index.html"><img src="images/logo2.png" alt="">
                        </a>
                    </div>
                </div>
                <!-- main menu start here -->
                <div class="col-md-10">
                    <nav>
                        <ul class="main-menu text-right">
                            <li class="active"><a href="index.html">Home</a>
                                <ul class="dropdown">
                                    <li><a href="index.html">Home V1</a></li>
                                    <li><a href="index-2.html">Home V2</a></li>
                                    <li><a href="index-3.html">Home V3</a></li>
                                    <li><a href="index-4.html">Home V4</a></li>
                                </ul>
                            </li>
                            <li><a href="package-version-one.html">Package List</a>
                                <ul class="dropdown">
                                    <li><a href="package-version-one.html">Package One</a></li>
                                    <li><a href="package-version-two.html">Package Two</a></li>
                                    <li><a href="single-package.html">Package Details</a></li>
                                </ul>
                            </li>
                            <li><a href="hotel-version-one.html">Hotels</a>
                                <ul class="dropdown">
                                    <li><a href="hotel-version-one.html">Hotel One</a></li>
                                    <li><a href="hotel-version-two.html">Hotel Two</a></li>
                                    <li><a href="hotel-details.html">Hotel Details</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Flights</a></li>
                            <li><a href="blog-version-one.html">Blog</a>
                                <ul class="dropdown">
                                    <li><a href="blog-version-one.html">Blog One</a></li>
                                    <li><a href="blog-version-two.html">Blog Two</a></li>
                                    <li><a href="blog-single.html">Blog Post</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="package-version-one.html">Package One</a></li>
                                    <li><a href="package-version-two.html">Package Two</a></li>
                                    <li><a href="single-package.html">single package</a></li>
                                    <li><a href="hotel-version-one.html">Hotel One</a></li>
                                    <li><a href="hotel-version-two.html">Hotel Two</a></li>
                                    <li><a href="blog-version-one.html">Blog One</a></li>
                                    <li><a href="hotel-version-two.html">Blog Two </a></li>
                                    <li><a href="blog-single.html">Single Blog</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div> <!-- main menu end here -->
            </div>
        </div>
    </div> <!-- header-bottom area end here -->
</header> <!-- header area end here -->

 @yield('content')  
                 @include('project/inc/footer')