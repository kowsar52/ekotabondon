<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wpocean.com/html/tf/ummah-live/ummah/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Mar 2023 16:31:32 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="wpoceans">
    <title> @yield('title') </title>
    <link href="{{asset('/')}}assets/css/themify-icons.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/css/flaticon.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/css/animate.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/css/owl.carousel.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/css/owl.theme.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/css/slick.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/css/slick-theme.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/css/swiper.min.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/css/owl.transitions.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/css/nice-select.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- start page-wrapper -->
<div class="page-wrapper">
    <!-- start preloader -->
    <div class="preloader">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
    <!-- end preloader -->
    <!-- Start header -->
    <header id="header" class="wpo-site-header wpo-header-style-3">
        <nav class="navigation navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="open-btn">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{route('home')}}"><img src="assets/images/logo.png" alt="logo"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                    <button class="close-navbar"><i class="ti-close"></i></button>

                    <ul class="nav navbar-nav">
                        <li class="menu-item-has-children">
                            <a href="{{route('home')}}">Home</a>
                            <ul class="sub-menu">
                                <li><a href="{{route('home')}}">Home style 1</a></li>
                                <li><a href="index-2.html">Home style 2</a></li>
                                <li><a href="index-3.html">Home style 3</a></li>
                                <li><a href="index-4.html">Home style 4</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('about')}}">About</a></li>
                        <li class="menu-item-has-children">
                            <a href="#">Service</a>
                            <ul class="sub-menu">
                                <li><a href="{{route('service')}}">Service</a></li>
                                <li><a href="{{route('service-single')}}">Service Single</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('donate')}}">Donate</a></li>
                        <li class="menu-item-has-children">
                            <a href="#">Event</a>
                            <ul class="sub-menu">
                                <li><a href="{{route('event')}}">Event</a></li>
                                <li><a href="{{route('event-single')}}">Event Single</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="{{route('blog')}}">Blog right sidebar</a></li>
                                <li><a href="{{route('blog-left')}}">Blog left sidebar</a></li>
                                <li><a href="{{route('blog-full-width')}}">Blog fullwidth</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">Blog details</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{route('blog-single')}}">Blog details right sidebar</a></li>
                                        <li><a href="{{route('blog-single-left')}}">Blog details left sidebar</a></li>
                                        <li><a href="{{route('blog-single-fluid')}}">Blog details fullwidth</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- end of nav-collapse -->
                <div class="cart-search-contact">
                    <div class="btns">
                        <a href="{{route('contact')}}" class="theme-btn">Contact Now</a>
                    </div>
                </div>
            </div><!-- end of container -->
        </nav>
    </header>
    <!-- end of header -->

    @yield('body')

        <!-- start wpo-site-footer -->
        <footer class="wpo-site-footer">
            <div class="wpo-upper-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-3 col-md-3 col-sm-6">
                            <div class="widget about-widget">
                                <div class="logo widget-title">
                                    <img src="assets/images/logo.png" alt="blog">
                                </div>
                                <p>Build and Earn with your online store with lots of cool and exclusive wpo-features </p>
                                <ul>
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    <li><a href="#"><i class="ti-google"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-3 col-sm-6">
                            <div class="widget link-widget">
                                <div class="widget-title">
                                    <h3>Service</h3>
                                </div>
                                <ul>
                                    <li><a href="service-single.html">Islamic School</a></li>
                                    <li><a href="service-single.html">Our Causes</a></li>
                                    <li><a href="#">Our Mission</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="event.html">Our Event</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-2 col-md-3 col-sm-6">
                            <div class="widget link-widget">
                                <div class="widget-title">
                                    <h3>Useful Links</h3>
                                </div>
                                <ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="service-single.html">Services</a></li>
                                    <li><a href="event.html">Semester</a></li>
                                    <li><a href="index-2.html">Prayer Times</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-lg-offset-1 col-md-3 col-sm-6">
                            <div class="widget market-widget wpo-service-link-widget">
                                <div class="widget-title">
                                    <h3>Contact </h3>
                                </div>
                                <p>online store with lots of cool and exclusive wpo-features</p>
                                <div class="contact-ft">
                                    <ul>
                                        <li><i class="fi ti-location-pin"></i>28 Street, New York City, USA</li>
                                        <li><i class="fi flaticon-call"></i>+000123456789</li>
                                        <li><i class="fi flaticon-envelope"></i>ummah@gmail.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </div>
            <div class="wpo-lower-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-xs-12">
                            <p class="copyright">&copy; 2020 Ummah. All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end wpo-site-footer -->
    </div>
</div>
<!-- end of page-wrapper -->
<!-- All JavaScript files
================================================== -->
<script src="{{asset('/')}}assets/js/jquery.min.js"></script>
<script src="{{asset('/')}}assets/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}assets/js/circle-progress.min.js"></script>
<!-- Plugins for this template -->
<script src="{{asset('/')}}assets/js/jquery-plugin-collection.js"></script>
<!-- Custom script for this template -->
<script src="{{asset('/')}}assets/js/script.js"></script>
</body>


<!-- Mirrored from wpocean.com/html/tf/ummah-live/ummah/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Mar 2023 16:31:45 GMT -->
</html>
