<!DOCTYPE html>
<html lang="zxx">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--====== Title ======-->
    <title>Multiplex Group</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/png">
    <!--====== Google Fonts ======-->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <!--====== Flaticon css ======-->
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/flaticon_gadden.css') }}">
    <!--====== FontAwesome css ======-->
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome/css/all.min.css') }}">
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--====== magnific-popup css ======-->
    <link rel="stylesheet" href="{{ asset('vendor/magnific-popup/dist/magnific-popup.css') }}">
    <!--====== Slick-popup css ======-->
    <link rel="stylesheet" href="{{ asset('vendor/slick/slick.css') }}">
    <!--====== Jquery UI css ======-->
    <link rel="stylesheet" href="{{ asset('vendor/jquery-ui/jquery-ui.min.css') }}">
    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="{{ asset('vendor/nice-select/css/nice-select.css') }}">
    <!--====== Animate css ======-->
    <link rel="stylesheet" href="{{ asset('vendor/animate.css') }}">
    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .page-title-area {
            margin-top: 0 !important;
        }

    </style>
</head>

<body>
    <!--====== Start Preloader ======-->
    <div class="preloader">
        <div class="loader">
            <div class="corners">
                <div class="corner corner--1"></div>
                <div class="corner corner--2"></div>
                <div class="corner corner--3"></div>
                <div class="corner corner--4"></div>
            </div>
        </div>
    </div>
    <!--====== End Preloader ======-->
    <!--====== Search From ======-->
    <div class="modal fade search-modal" id="search-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form>
                    <div class="form_group">
                        <input type="search" class="form_control" placeholder="Search here" name="search">
                        <label><i class="fa fa-search"></i></label>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--====== Search From ======-->

    <!--====== Enquiry Wrapper ======-->
    <div class="modal fade sidebar-panel-wrapper" id="sidebar-modal">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <button class="close" data-dismiss="modal" style="color:#000;"><i class="fa fa-times"></i></button>
                <div class="sidebar-wrapper">
                    <div class="sidebar-information-area">
                        <div class="row no-gutters">
                            <div class="col-xl-12 col-lg-12 sidebar-widget">
                                <div class="description-wrapper mt-30">
                                    <h3 class="title" style="color:#000;">Drop us a message</h3>
                                    <p style="color:#000;">Our team will get back to you shortly.</p>
                                    <!--=== Review Form ===-->
                                    <div class="review-form-area wow fadeInUp mt-10 mb-10">
                                        <form class="review-form" method="post"
                                            action="{{ route('home.save_enquiry') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form_group">
                                                        <input type="text" class="form_control" placeholder="Your Name"
                                                            name="name" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form_group">
                                                        <input type="text" class="form_control"
                                                            onkeypress="num_validate(event)" placeholder="Phone Number"
                                                            name="phone" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form_group">
                                                        <input type="email" class="form_control"
                                                            placeholder="Email Address" name="email" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form_group">
                                                        <input type="text" class="form_control" placeholder="Location"
                                                            name="loc" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form_group">
                                                        <textarea name="message" class="form_control"
                                                            placeholder="Message"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form_group">
                                                        <button type="submit"
                                                            class="main-btn primary-btn">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== Enquiry Wrapper ======-->

    <!--====== Header Area ======-->
    <header class="header-area header-one transparent-header1">
        @if(session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin: 10px;">
                {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="container-fluid">
            <!--====== Header Top Bar ======-->
            <div class="header-top-bar text-white main-bg d-none d-xl-block">
                <div class="row">
                    <div class="col-lg-6">
                        <!--====== Top Left ======-->
                        <div class="top-left">
                            <span>Welcome to Multiplex Group</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!--====== Top Right ======-->
                        <div class="top-right float-lg-right">
                            <ul class="social-link">
                                <li><a href="https://www.facebook.com/MultiplexGroupofCompanies" target="_blank"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/multiplexgroup/" target="_blank"><i
                                            class="fab fa-instagram"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/multiplex-group-of-companies"
                                        target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="https://www.youtube.com/@MultiplexFarmer/videos" target="_blank"><i
                                            class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== Header Navigation ======-->
        <div class="header-navigation">
            <div class="nav-overlay"></div>
            <div class="container-fluid">
                <div class="primary-menu">
                    <!--====== Site Branding ======-->
                    <div class="site-branding">
                        <a href="{{ url('/') }}" class="brand-logo"><img
                                src="{{ asset('/images/logo/multiplex-logo1.png') }}"
                                alt="Site Logo"></a>
                    </div>
                    <!--====== Nav Menu ======-->
                    <div class="nav-menu">
                        <!--====== Site Branding ======-->
                        <div class="mobile-logo mb-30 d-block d-xl-none">
                            <a href="{{ url('/') }}" class="brand-logo"><img
                                    src="{{ asset('/images/logo/multiplex-logo.png') }}"
                                    alt="Site Logo"></a>
                        </div>
                        <!--=== Nav Search ===-->
                        <div class="nav-search mb-30 d-block d-xl-none ">
                            <form>
                                <div class="form_group">
                                    <input type="email" class="form_control" placeholder="Search Here" name="email"
                                        required>
                                    <button class="search-btn"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <!--====== main Menu ======-->
                        <nav class="main-menu">
                            <ul>
                                <li class="menu-item"><a href="{{ url('/') }}">Home</a>
                                </li>
                                <li class="menu-item has-children"><a href="#">About Us</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('vision-and-misssion') }}">Vision &
                                                Mission</a></li>
                                        <li><a href="{{ route('founder-and-management') }}">Founder &
                                                Management </a></li>
                                        <li><a href="{{ route('group-of-companies') }}">Group of
                                                Companies </a></li>
                                        <li><a href="{{ route('awards-and-accreditations') }}">Awards
                                                & Accreditations</a></li>
                                        <li><a href="#">Team </a></li>
                                        <li><a href="{{ route('timeline') }}">Our 50 Years Journey
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="menu-item has-children"><a href="#">Corporate</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Domestic/PAN </a></li>
                                        <li><a href="{{ route('global-connect') }}">Global/International
                                                Connect</a></li>
                                        <li><a href="#">R & D</a></li>
                                        <li><a href="{{ route('infrastructure') }}">Infrastructure</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item has-children"><a href="products.html">Products</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('fertilizers') }}">Fertilizers</a></li>
                                        <li><a href="#">Plant Growth Regulators</a></li>
                                        <li><a href="#">Adjuvants & PH Balancer</a></li>
                                        <li><a href="#">Bio Products</a></li>
                                        <li><a href="#">Pesticides</a></li>
                                        <li><a href="#">Pheromones</a></li>
                                        <li><a href="#">Seeds</a></li>
                                        <li><a href="#">Sprayers</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item has-children"><a href="#">Services</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('soil-analysis-laboratory') }}">Soil
                                                Analysis Laboratory</a></li>
                                        <li><a href="{{ route('water-analysis-laboratory') }}">Water
                                                Analysis Laboratory</a></li>
                                        <li><a href="{{ route('leaf-analysis-laboratory') }}">Leaf
                                                Analysis Laboratory</a></li>
                                        <li><a href="{{ route('microbial-analysis-laboratory') }}">Microbial
                                                Analysis
                                                Laboratory</a></li>
                                        <li><a href="{{ route('drone-services') }}">Drone Services</a>
                                        </li>
                                        <li><a href="{{ route('bull-work-services') }}">Bull Work
                                                Services</a></li>

                                    </ul>
                                </li>
                                <li class="menu-item has-children"><a href="#">Community</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('farmer-club') }}">Farmer Club</a></li>
                                        <li><a href="{{ route('dealers-meet') }}">Dealer's Meet</a>
                                        </li>
                                        <li><a href="{{ route('multiplex-vahini') }}">Multiplex
                                                Vahini</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <div class="search-btn" data-toggle="modal" data-target="#search-modal"><i
                                            class="fa-solid fa-magnifying-glass"></i></div>
                                </li>
                            </ul>
                        </nav>
                        <!--====== Menu Button ======-->
                        <!-- mobile button -->
                        <div class="menu-button mt-40 d-xl-none">
                            <a href="{{ route('contact') }}" data-toggle="modal"
                                data-target="#sidebar-modal" class="main-btn secondary-btn">Quick Enquiry</a>
                        </div>
                    </div>
                    <!--====== Nav Right Item ======-->
                    <div class="nav-right-item">
                        <div class="menu-button d-xl-block d-none">
                            <a href="{{ route('contact') }}" data-toggle="modal"
                                data-target="#sidebar-modal" class="main-btn primary-btn">Quick Enquiry</a>
                        </div>
                        <div class="navbar-toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--====== End Area ======-->
    <!-- Content -->
    @yield('content')
    <!-- / Content -->
    <!--====== Start Footer ======-->
    <footer class="footer-area text-white main-bg">
        <div class="container">
            <!--====== Footer Widget ======-->
            <div class="footer-widget-area pt-80 pb-40">
                <div class="row">

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!--====== Footer Widget ======-->
                        <div class="footer-widget contact-info-widget mb-40 wow fadeInDown">
                            <h4 class="widget-title">Get In Touch</h4>
                            <div class="widget-content">
                                <ul class="info-list">
                                    <li><a href="https://goo.gl/maps/LD4cyicrsdxSUta16" target="_blank">No. 180, 1st
                                            Main Road, Mahalakshmi Layout Extension, Bengaluru - 560 086</a></li>
                                    <li><a href="mailto:corporate@multiplexgroup.com">corporate@multiplexgroup.com</a>
                                    </li>
                                    <li><a href="mailto:multiplex@multiplexgroup.com">multiplex@multiplexgroup.com</a>
                                    </li>
                                    <li><a href="tel:080 23497464">080 23497464</a></li>
                                    <li><a href="tel:080 23494406">080 23494406 / 23497360</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <!--====== Footer Widget ======-->
                        <div class="footer-widget footer-nav-widget mb-40 wow fadeInUp">
                            <h4 class="widget-title">Quick Links</h4>
                            <div class="widget-content">
                                <ul class="footer-nav">
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="success-stories.html">Success Stories</a></li>
                                    <li><a href="#">News & Media</a></li>
                                    <li><a href="#">Digital Payment</a></li>
                                    <!-- <li><a href="#">FAQs</a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <!--====== Footer Widget ======-->
                        <div class="footer-widget footer-nav-widget mb-40 wow fadeInUp">
                            <h4 class="widget-title">Careers</h4>
                            <div class="widget-content">
                                <ul class="footer-nav">
                                    <li><a href="#">Life @ Multiplex</a></li>
                                    <div class="hero-button mb-30 wow fadeInUp" data-wow-delay=".7s">
                                        <!-- <a href="about.html" class="main-btn golden-btn mb-10">Explore More</a> -->
                                        <a href="{{ route('home.current_openings') }}"
                                            class="main-btn golden-btn mb-10">Current
                                            Openings</a>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <!--====== Footer Widget ======-->
                        <div class="footer-widget footer-nav-widget mb-40 wow fadeInUp">
                            <h4 class="widget-title">&nbsp;</h4>
                            <div class="widget-content">
                                <ul class="footer-nav">
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Refund Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=== Copyright Area ===-->
            <div class="copyright-area">
                <div class="row">
                    <div class="col-lg-6">
                        <!--====== Copyright Text ======-->
                        <div class="copyright-text">
                            <P>Copy&copy; 2023 Multiplex Group of Companies. All Rights Reserved.</P>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!--====== End Footer ======-->
    <!--====== Back To Top  ======-->
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    <!--====== Jquery js ======-->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('/vendor/jquery-3.6.0.min.js') }}"></script>
    <!--====== Bootstrap js ======-->
    <script src="{{ asset('/vendor/popper/popper.min.js') }}"></script>
    <!--====== Bootstrap js ======-->
    <script src="{{ asset('/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--====== Slick js ======-->
    <script src="{{ asset('/vendor/slick/slick.min.js') }}"></script>
    <!--====== Magnific js ======-->
    <script src="{{ asset('/vendor/magnific-popup/dist/jquery.magnific-popup.min.js') }}">
    </script>
    <!--====== Isotope js ======-->
    <script src="{{ asset('/vendor/isotope.min.js') }}"></script>
    <!--====== Imagesloaded js ======-->
    <script src="{{ asset('/vendor/imagesloaded.min.js') }}"></script>
    <!--====== Counterup js ======-->
    <script src="{{ asset('/vendor/jquery.counterup.min.js') }}"></script>
    <!--====== Waypoints js ======-->
    <script src="{{ asset('/vendor/jquery.waypoints.js') }}"></script>
    <!--====== Nice-select js ======-->
    <script src="{{ asset('/vendor/nice-select/js/jquery.nice-select.min.js') }}"></script>
    <!--====== jquery UI js ======-->
    <script src="{{ asset('/vendor/jquery-ui/jquery-ui.min.js') }}"></script>
    <!--====== WOW js ======-->
    <script src="{{ asset('/vendor/wow.min.js') }}"></script>
    <!--====== Main js ======-->
    <script src="{{ asset('/js/theme.js') }}"></script>
    <script>
        function num_validate(evt) {
            var theEvent = evt || window.event;

            // Handle paste
            if (theEvent.type === 'paste') {
                key = event.clipboardData.getData('text/plain');
            } else {
                // Handle key press
                var key = theEvent.keyCode || theEvent.which;
                key = String.fromCharCode(key);
            }
            var regex = /[0-9]|\./;
            if (!regex.test(key)) {
                theEvent.returnValue = false;
                if (theEvent.preventDefault) theEvent.preventDefault();
            }
        }

    </script>

</body>

</html>
