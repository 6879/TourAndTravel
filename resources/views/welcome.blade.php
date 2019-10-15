@extends('project/inc/header')
@section('content')
@include('project/inc/slider')
<section class="search_area">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="search_form">
                    <form action="#" method="post">
                        <div class="form-group keywork_type">
                            <label><i class="fa fa-map-marker"></i></label>
                            <input type="search" name="s" id="keyword2" class="hotel-input-first" placeholder="Type Keyword">
                        </div>
                        <div class="form-group">
                            <label><i class="fa fa-calendar"></i></label>
                            <input type="button" name="s" value="Date" id="datepicker2" class="hotel-input-first">
                        </div>
                        <div class="form-group">
                            <label><i class="fa fa-user"></i></label>
                            <input type="number" name="s" id="number1" class="hotel-input-first" placeholder="Person">
                        </div>
                        <div class="form-group searc-btn-7">
                            <button type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> <!-- header tab based search area end-->



<section class="popular-packages">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h2>Our Most Popular Packges</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam at ipsum at ligula vestibulum sodales Sed luctus orci vel nibh aliquam laoreet Aenean accumsan </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-package">
                    <div class="package-image">
                        <a href="#"><img src="images/packages/1.jpg" alt=""></a>
                    </div>
                    <div class="package-content">
                        <h3><a href="#" title="">Dubai – All Stunning Places</a></h3>
                        <p>4 Days, 5 Nights Start From <span>$500</span>
                        </p>
                    </div>
                    <div class="package-calto-action">
                        <ul class="ct-action">
                            <li><a href="#" class="travel-booking-btn hvr-shutter-out-horizontal">Book Now</a></li>
                            <li>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> <!-- single package end -->

            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-package">
                    <div class="package-image">
                        <a href="#"><img src="images/packages/2.jpg" alt=""></a>
                    </div>
                    <div class="package-content">
                        <h3><a href="#" title="">Thailand – All Stunning Places</a></h3>
                        <p>4 Days, 5 Nights Start From <span>$500</span>
                        </p>
                    </div>
                    <div class="package-calto-action">
                        <ul class="ct-action">
                            <li><a href="#" class="travel-booking-btn hvr-shutter-out-horizontal">Book Now</a>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> <!-- single package end -->

            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-package">
                    <div class="package-image">
                        <a href="#"><img src="images/packages/3.jpg" alt="">
                        </a>
                    </div>
                    <div class="package-content">
                        <h3><a href="#" title="">England – All Stunning Places</a></h3>
                        <p>4 Days, 5 Nights Start From <span>$500</span>
                        </p>
                    </div>
                    <div class="package-calto-action">
                        <ul class="ct-action">
                            <li><a href="#" class="travel-booking-btn hvr-shutter-out-horizontal">Book Now</a>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> <!-- single package end -->

            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-package">
                    <div class="package-image">
                        <a href="#"><img src="images/packages/4.jpg" alt="">
                        </a>
                    </div>
                    <div class="package-content">
                        <h3><a href="#" title="">Italy – All Stunning Places</a></h3>
                        <p>4 Days, 5 Nights Start From <span>$500</span>
                        </p>
                    </div>
                    <div class="package-calto-action">
                        <ul class="ct-action">
                            <li><a href="#" class="travel-booking-btn hvr-shutter-out-horizontal">Book Now</a>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> <!-- single package end -->

            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-package">
                    <div class="package-image">
                        <a href="#"><img src="images/packages/5.jpg" alt="">
                        </a>
                    </div>
                    <div class="package-content">
                        <h3><a href="#" title="">Brazil – All Stunning Places</a></h3>
                        <p>4 Days, 5 Nights Start From <span>$500</span>
                        </p>
                    </div>
                    <div class="package-calto-action">
                        <ul class="ct-action">
                            <li><a href="#" class="travel-booking-btn hvr-shutter-out-horizontal">Book Now</a>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> <!-- single package end -->

            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-package">
                    <div class="package-image">
                        <a href="#"><img src="images/packages/6.jpg" alt="">
                        </a>
                    </div>
                    <div class="package-content">
                        <h3><a href="#" title="">India – All Stunning Places</a></h3>
                        <p>4 Days, 5 Nights Start From <span>$500</span>
                        </p>
                    </div>
                    <div class="package-calto-action">
                        <ul class="ct-action">
                            <li><a href="#" class="travel-booking-btn hvr-shutter-out-horizontal">Book Now</a>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> <!-- single package end -->
        </div>
    </div>
</section> <!--end  popular packajge -->

<section class="countdown count-down-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12-col-xs-12">
                <div class="count-down-titile">
                    <h2>Special Tour in May, Discover <span class="color-one">Thailand</span> for 50 <br> customers with <span class="color-two">Discount 30%</span> </h2>
                </div>
                <div class="count-timer text-center">
                    <div class="time-wrapper">
                        <p>It’s limited seating! Hurry up</p>
                        <div class="timer">
                            <div data-countdown="2019/5/15"></div>
                        </div>
                    </div>
                </div>
                <div class="buy-now text-center">
                    <a href="#" class="travel-primary-btn hvr-fade">Book Now</a>
                </div>
            </div>
        </div>
    </div>
</section>  <!--end  countdown -->

<section class="destinations_1">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-title text-center">
                    <h2>Most popular Destinations</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam at ipsum at ligula vestibulum sodales Sed luctus orci vel nibh aliquam laoreet Aenean accumsan </p>
                </div>
            </div>
        </div>
        <div class="destination-slider-active owl-carousel">
            <div class="single-destination">
                <figure>
                    <a href="#"><img src="images/destination/1.jpg" alt="">
                    </a>
                    <figcaption>
                        <a href="#" class="travel-booking-btn hvr-shutter-out-horizontal">Read More</a>
                    </figcaption>
                </figure>
                <div class="des-city">
                    <a href="#"><i class="fa fa-map-marker"></i>Sydney, Australia</a>
                    <h4>Opera House <span>3 Tours</span></h4>
                </div>
            </div> <!-- single popular destination  end-->

            <div class="single-destination">
                <figure>
                    <a href="#"><img src="images/destination/5.jpg" alt="">
                    </a>
                    <figcaption>
                        <a href="#" class="travel-booking-btn hvr-shutter-out-horizontal">Read More</a>
                    </figcaption>
                </figure>
                <div class="des-city">
                    <a href="#"><i class="fa fa-map-marker"></i>London, Eangland</a>
                    <h4>Tower Bridge<span>5 Tours</span></h4>
                </div>
            </div> <!-- single popular destination  end-->

            <div class="single-destination">
                <figure>
                    <a href="#"><img src="images/destination/3.jpg" alt="">
                    </a>
                    <figcaption>
                        <a href="#" class="travel-booking-btn hvr-shutter-out-horizontal">Read More</a>
                    </figcaption>
                </figure>
                <div class="des-city">
                    <a href="#"><i class="fa fa-map-marker"></i>Paris, France</a>
                    <h4>Eiffel Tower<span>4 Tours</span></h4>
                </div>
            </div> <!-- single popular destination  end-->

            <div class="single-destination">
                <figure>
                    <a href="#"><img src="images/destination/4.jpg" alt="">
                    </a>
                    <figcaption>
                        <a href="#" class="travel-booking-btn hvr-shutter-out-horizontal">Read More</a>
                    </figcaption>
                </figure>
                <div class="des-city">
                    <a href="#"><i class="fa fa-map-marker"></i>New york, USA</a>
                    <h4>Statue Of Liberty<span>3 Tours</span></h4>
                </div>
            </div> <!-- single popular destination  end-->

            <div class="single-destination">
                <figure>
                    <a href="#"><img src="images/destination/5.jpg" alt="">
                    </a>
                    <figcaption>
                        <a href="#" class="travel-booking-btn hvr-shutter-out-horizontal">Read More</a>
                    </figcaption>
                </figure>
                <div class="des-city">
                    <a href="#"><i class="fa fa-map-marker"></i>Agra, India</a>
                    <h4>Tajmahal<span>5 Tours</span></h4>
                </div>
            </div> <!-- single popular destination  end-->
        </div>
    </div>
</section> <!-- end popular destination-->

<section class="travelsers-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-title-white text-center">
                    <h2>Why Choose travlestar</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam at ipsum at ligula vestibulum sodales Sed luctus orci vel nibh aliquam laoreet Aenean accumsan </p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- single travel start -->
            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-travel">
                    <div class="media">
                        <div class="media-body travel-content">
                            <h4>Travel Arrangements</h4>
                            <p>Lorem ipsum dolor sit amet consect adiu piscing elit sed diam nonum euismo tincidunt ut.</p>
                        </div>
                    </div>
                </div>
            </div> <!-- single travel end -->

            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-travel">
                    <div class="media">
                        <div class="media-body travel-content">
                            <h4>Cheap Flights</h4>
                            <p>Lorem ipsum dolor sit amet consect adiu piscing elit sed diam nonum euismo tincidunt ut.</p>
                        </div>
                    </div>
                </div>
            </div> <!-- single travel end -->

            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-travel">
                    <div class="media">
                        <div class="media-body travel-content">
                            <h4>Hand-picked tours</h4>
                            <p>Lorem ipsum dolor sit amet consect adiu piscing elit sed diam nonum euismo tincidunt ut.</p>
                        </div>
                    </div>
                </div>
            </div> <!-- single travel end -->

            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-travel">
                    <div class="media">
                        <div class="media-body travel-content">
                            <h4>Privet Guide</h4>
                            <p>Lorem ipsum dolor sit amet consect adiu piscing elit sed diam nonum euismo tincidunt ut.</p>
                        </div>
                    </div>
                </div>
            </div> <!-- single travel end -->

            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-travel">
                    <div class="media">
                        <div class="media-body travel-content">
                            <h4>Special Activities</h4>
                            <p>Lorem ipsum dolor sit amet consect adiu piscing elit sed diam nonum euismo tincidunt ut.</p>
                        </div>
                    </div>
                </div>
            </div> <!-- single travel end -->

            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-travel">
                    <div class="media">
                        <div class="media-body travel-content">
                            <h4>Best Price Guarantee</h4>
                            <p>Lorem ipsum dolor sit amet consect adiu piscing elit sed diam nonum euismo tincidunt ut.</p>
                        </div>
                    </div>
                </div>
            </div> <!-- single travel end -->
        </div>
    </div>
</section> <!-- choose travelsers end here -->

<!-- guide and Expert Advice strat -->
<section class="blog_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-title text-center">
                    <h2>Travel guide and Expert Advice</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam at ipsum at ligula vestibulum sodales Sed luctus orci vel nibh aliquam laoreet Aenean accumsan </p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- single travel blog-->
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 phone-layout-s">
                <div class="single-travel-blog">
                    <div class="blog-image">
                        <a href="#"><img src="images/blog/1.jpg" alt="">
                        </a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <div class="post-date">
                                <span>12 July, 2019</span>
                            </div>
                            <ul class="post-social">
                                <li><a href="#"><i class="fa fa-comments"></i>3</a>
                                </li>
                                <li><a href="#"><i class="fa fa-heart-o"></i>43</a>
                                </li>
                            </ul>
                        </div>
                        <div class="blog-post-content">
                            <h4><a href="#" title="">Tips for taking a long-term trip with kids.</a></h4>
                            <p>Lorem ipsum dolor sit amet consepctetur adipiscing elit Etiam at ipsum at ligula vestibulum sodales Sed luctus.</p>
                            <a href="#">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div> <!--end single travel guide & security-->

            <div class="col-12 col-sm-6 col-md-6 col-lg-4 phone-layout-s">
                <div class="single-travel-blog">
                    <div class="blog-image">
                        <a href="#"><img src="images/blog/2.jpg" alt="">
                        </a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <div class="post-date">
                                <span>12 July, 2019</span>
                            </div>
                            <ul class="post-social">
                                <li><a href="#"><i class="fa fa-comments"></i>3</a>
                                </li>
                                <li><a href="#"><i class="fa fa-heart-o active"></i>43</a>
                                </li>
                            </ul>
                        </div>
                        <div class="blog-post-content">
                            <h4><a href="#" title="">Tips for taking a long-term trip with kids.</a></h4>
                            <p>Lorem ipsum dolor sit amet consepctetur adipiscing elit Etiam at ipsum at ligula vestibulum sodales Sed luctus.</p>
                            <a href="#">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div> <!--end single travel guide & security-->

            <div class="col-12 col-sm-6 col-md-6 col-lg-4 phone-layout-s">
                <div class="single-travel-blog">
                    <div class="blog-image">
                        <a href="#"><img src="images/blog/3.jpg" alt="">
                        </a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <div class="post-date">
                                <span>12 July, 2019</span>
                            </div>
                            <ul class="post-social">
                                <li><a href="#"><i class="fa fa-comments"></i>3</a>
                                </li>
                                <li><a href="#"><i class="fa fa-heart-o"></i>43</a>
                                </li>
                            </ul>
                        </div>
                        <div class="blog-post-content">
                            <h4><a href="#" title="">Tips for taking a long-term trip with kids.</a></h4>
                            <p>Lorem ipsum dolor sit amet consepctetur adipiscing elit Etiam at ipsum at ligula vestibulum sodales Sed luctus.</p>
                            <a href="#">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div> <!-- single travel guide & security end-->
        </div>
    </div>
</section> <!--End guide and Expert Advice strat -->





<!-- testimonial area start here -->
<section class="section-paddings testimonial-two" id="testimonial_one">
    <div class="testimonial-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>What Our Happy Travelers Say</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam at ipsum at ligula .</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <!-- start top media -->
                    <div class="top-testimonial-image slick-pagination">
                        <div class="carousel-images slider-nav-two">
                            <div class="images_single"><img src="images/client/3.jpg" alt="1" class="img-responsive img-circle"></div>
                            <div class="images_single"><img src="images/client/9.jpg" alt="3" class="img-responsive img-circle"></div>
                            <div class="images_single"><img src="images/client/6.jpg" alt="2" class="img-responsive img-circle"></div>
                            <div class="images_single"><img src="images/client/9.jpg" alt="3" class="img-responsive img-circle"></div>
                        </div>
                    </div><!-- end top media images -->

                    <!-- bottom testimonial message -->
                    <div class="block-text">
                        <div class="carousel-text slider-for-two">
                            <div class="single-box">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt utrinyi dolore magna aliqimbf adiminim veniamp nostrud exer tatjhion ullamc orperea commodo consequ euismod laoreet dolore magna.
                                </p>
                                <div class="client-bio">
                                    <h3>Jhonthan Smith</h3>
                                    <span>London Trip Traveler</span>
                                </div>
                                <ul class="rating d-flex justify-content-center">
                                    <li><i class="fa fa-star"></i></li>                                    
                                    <li><i class="fa fa-star"></i></li>                                    
                                    <li><i class="fa fa-star"></i></li>                                    
                                    <li><i class="fa fa-star"></i></li>                                    
                                    <li><i class="fa fa-star"></i></li>                                    
                                </ul>
                            </div>
                            <div class="single-box">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,  utrinyi dolore magna aliquam erat volutpat Upt wisi enimbf adiminim veniamp nostrud exer tatjhion ullamc orperea commodo consequ euismod laoreetore magna.
                                </p>
                                <div class="client-bio">
                                    <h3>Blake Lively</h3>
                                    <span>Martin, Parent</span>
                                </div>
                                <ul class="rating d-flex justify-content-center">
                                    <li><i class="fa fa-star"></i></li>                                    
                                    <li><i class="fa fa-star"></i></li>                                    
                                    <li><i class="fa fa-star"></i></li>                                    
                                    <li><i class="fa fa-star"></i></li>                                    
                                    <li><i class="fa fa-star"></i></li>                                    
                                </ul>
                            </div>
                            <div class="single-box">
                                <p>Lorem ipsum dolor sit amet, consected diam nonummy nibh euismod tincidunt utrinyi dolore magna aliquam erat volutpat Upt wisi enimbf adiminim veniamp nostrud exer tatjhion ullamc orperea commodo consequ euismo dolore magna.
                                </p>
                                <div class="client-bio">
                                    <h3>Charlie Puth</h3>
                                    <span>Martin, Parent</span>
                                </div>
                                <ul class="rating d-flex justify-content-center">
                                    <li><i class="fa fa-star"></i></li>                                    
                                    <li><i class="fa fa-star"></i></li>                                    
                                    <li><i class="fa fa-star"></i></li>                                    
                                    <li><i class="fa fa-star"></i></li>                                    
                                    <li><i class="fa fa-star"></i></li>                                    
                                </ul>
                            </div>
                            <div class="single-box">
                                <p>Lorem ipsum dolor sit amet, consectit, sed diam nonummy nibh euismod tincidunt utrinyi dolore magna alpat Upt wisi enimbf adiminim veniamp nostrud exer tatjhion ullamc orperea commodo consequ euismod laoreetna.
                                </p>
                                <div class="client-bio">
                                    <h3>Jessica Alba</h3>
                                    <span>Martin, Parent</span>
                                </div>
                                <ul class="rating d-flex justify-content-center">
                                    <li><i class="fa fa-star"></i></li>                                    
                                    <li><i class="fa fa-star"></i></li>                                    
                                    <li><i class="fa fa-star"></i></li>                                    
                                    <li><i class="fa fa-star"></i></li>                                    
                                    <li><i class="fa fa-star"></i></li>                                    
                                </ul>
                            </div>
                        </div>
                    </div><!-- bottom testimonial message -->
                </div><!-- /.block-text -->
            </div>
        </div>
    </div>
</section><!-- testimonial area end here -->







<div class="section-paddings incredible-places">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-title text-center">
                    <h2>Incredible Place</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam at ipsum at ligula vestibulum sodales Sed luctus orci vel nibh aliquam laoreet Aenean accumsan</p>
                </div>
            </div>
        </div>
        <div class="row places_img_wrapper">
            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-place">
                    <figure>
                        <img src="images/place/1.jpg" alt="">
                        <figcaption>
                            <a href="images/place/1.jpg" title=""><i class="fa fa-eye"></i></a>
                            <h4>Place <span>Eiffel Tower</span></h4>
                            <h3>Caption By: <span>Michel Jusi</span></h3>
                        </figcaption>
                    </figure>
                </div>
            </div> <!-- end single place -->

            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-place">
                    <figure>
                        <img src="images/place/2.jpg" alt="">
                        <figcaption>
                            <a href="images/place/2.jpg" title=""><i class="fa fa-eye"></i></a>
                            <h4>Place <span>China Town</span></h4>
                            <h3>Caption By: <span>Daniel Baci</span></h3>
                        </figcaption>
                    </figure>
                </div>
            </div> <!-- end single place -->

            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-place">
                    <figure>
                        <img src="images/place/3.jpg" alt="">
                        <figcaption>
                            <a href="images/place/3.jpg" title=""><i class="fa fa-eye"></i></a>
                            <h4>Place <span>England Bridge</span></h4>
                            <h3>Caption By: <span>John Adam</span></h3>
                        </figcaption>
                    </figure>
                </div>
            </div> <!-- end single place -->

            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-place">
                    <figure>
                        <img src="images/place/4.jpg" alt="">
                        <figcaption>
                            <a href="images/place/4.jpg" title=""><i class="fa fa-eye"></i></a>
                            <h4>Place <span>Eiffel Tower</span></h4>
                            <h3>Caption By: <span>Michel Jusi</span></h3>
                        </figcaption>
                    </figure>
                </div>
            </div> <!-- end single place -->

            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-place">
                    <figure>
                        <img src="images/place/5.jpg" alt="">
                        <figcaption>
                            <a href="images/place/5.jpg" title=""><i class="fa fa-eye"></i></a>
                            <h4>Place <span>China Town</span></h4>
                            <h3>Caption By: <span>Daniel Baci</span></h3>
                        </figcaption>
                    </figure>
                </div>
            </div> <!-- end single place -->

            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-place">
                    <figure>
                        <img src="images/place/6.jpg" alt="">
                        <figcaption>
                            <a href="images/place/6.jpg" title=""><i class="fa fa-eye"></i></a>
                            <h4>Place <span>England Bridge</span></h4>
                            <h3>Caption By: <span>John Adam</span></h3>
                        </figcaption>
                    </figure>
                </div>
            </div> <!-- end single place -->
        </div>
    </div>
</div> <!-- incredible place end here -->



<section class="our_partners">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-title text-center">
                    <h2>Our Trusted Partners</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam at ipsum at ligula vestibulum sodales Sed luctus orci vel nibh aliquam laoreet Aenean accumsan </p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- partners images -->
            <div class="partner-slider-active owl-carousel">
                <div class="single-pertner">
                    <div class="partner-image">
                        <a href="#"><img src="images/partner/1.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="single-pertner">
                    <div class="partner-image">
                        <a href="#"><img src="images/partner/2.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="single-pertner">
                    <div class="partner-image">
                        <a href="#"><img src="images/partner/3.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="single-pertner">
                    <div class="partner-image">
                        <a href="#"><img src="images/partner/4.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="single-pertner">
                    <div class="partner-image">
                        <a href="#"><img src="images/partner/5.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- partners images -->
        <div class="row">
            <!-- partners images -->
            <div class="partner-slider-active owl-carousel">
                <div class="single-pertner">
                    <div class="partner-image">
                        <a href="#"><img src="images/partner/1.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="single-pertner">
                    <div class="partner-image">
                        <a href="#"><img src="images/partner/2.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="single-pertner">
                    <div class="partner-image">
                        <a href="#"><img src="images/partner/3.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="single-pertner">
                    <div class="partner-image">
                        <a href="#"><img src="images/partner/4.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="single-pertner">
                    <div class="partner-image">
                        <a href="#"><img src="images/partner/5.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>  <!-- end partners images -->
    </div>
</section> <!--end partner section -->



            
        @stop