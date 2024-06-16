@php
    use App\Actions\CategoryAct;
    $categories = CategoryAct::run();
@endphp
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

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


    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Include jQuery UI -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <style>
        .page-title-area {
            margin-top: 0 !important;
        }

        .nice-select {
            display: none !important;
        }

        select {
            background: #ffffff;
            color: currentColor;
            display: block !important;
        }

        @media (max-width:567px) {
            .ptbmob-30 {
                padding-top: 30px;
            }

            .copyright-text p {
                font-size: 15px;
            }

            .form-main-title-style h3 {
                font-size: 18px;
            }

            @media (max-width: 1199px) {
                .sidebar-panel-wrapper .sidebar-wrapper {
                    overflow-y: auto;
                    padding: 60px 20px 40px;
                }

                .main-btn.primary-btn,
                .main-bg {
                    background-color: #1a9f53;
                    width: 100%;
                }

                .main-btn.filled-btn {
                    padding: 17px 40px;
                    background-color: transparent;
                    border: 2px solid #008448;
                    width: 100%;
                }
            }
        }

        #random_number {
            margin-top: -42px;
            margin-left: 15px;
            background: #2a7d2e30;
            padding: 14px;
            border-radius: 10px;
        }
<<<<<<< HEAD
        
        .whatsapp-chat img {
           position:fixed;
           z-index:9999;
           float:right
          }

        .whatsapp-chat img {
           top:80%;
           right:2%
          }
        
=======
>>>>>>> b98541034009a1de1c9c8b7339ba381e79a30171
    </style>
</head>

<body>
    <!--====== Start Preloader ======-->
    <div class="preloader">
        <div class="loader">
            <div class="corners">
                <img src="{{ asset('/images/loader-new1.png') }}" alt="Site Logo">
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
                        <input type="search" class="form_control search-input" placeholder="Search here" name="search"
                            id="search">
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
<<<<<<< HEAD

=======
                                    <!--<p style="color:#000;">Our team will get back to you shortly.</p>-->
                                    <!--=== Review Form ===-->
>>>>>>> b98541034009a1de1c9c8b7339ba381e79a30171
                                    <div class="review-form-area mt-10 mb-10">

                                        <form class="review-form general-form" id="review-form" method="post"
                                            action="{{ route('home.save_enquiry') }}">
                                            @csrf
                                            {{-- <div class="my-3 d-none success-message" style="width: 100%">
                                                <div class="btn btn-success">Form Submitted Successfully</div>
                                            </div> --}}
                                            <input type="hidden" name="type" value="1">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form_group">
                                                        <input type="text" class="form_control"
                                                            onkeypress="return /[a-zA-Z,' ']/i.test(event.key)"
                                                            placeholder="Your Name" name="name" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form_group">
<<<<<<< HEAD
                                                        <input type="text" class="form_control" onkeypress="num_validate(event)" 
                                                        oninput="maxLengthCheck(this)" onpaste="stripSpacesOnPaste(event)"
                                                        maxlength="10" minlength="10" placeholder="Phone Number" name="phone" required>
=======
                                                        <input type="text" class="form_control"
                                                            onkeypress="num_validate(event)"
                                                            oninput="maxLengthCheck(this)" maxlength="10" minlength="10"
                                                            placeholder="Phone Number" name="phone" required>
>>>>>>> b98541034009a1de1c9c8b7339ba381e79a30171
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form_group">
<<<<<<< HEAD
                                                        <input type="email" class="form_control"
=======
                                                        <input type="text" class="form_control"
>>>>>>> b98541034009a1de1c9c8b7339ba381e79a30171
                                                            placeholder="Email Address" name="email"
                                                            id="emailField" required oninput="validateDomain()">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form_group">
                                                        <input type="text" class="form_control"
                                                            placeholder="Location" name="loc" required>
                                                    </div>
                                                </div>
                                                @php

                                                    $departments = \App\Models\Department::where('type', 1)->get();

                                                @endphp
                                                <div class="col-lg-4">
                                                    <div class="form_group dept-style">
                                                        <select class="form_control" id="department"
                                                            name="department" required>
                                                            <option value="" selected disabled>Select Department
                                                            </option>
                                                            @foreach ($departments as $department)
                                                                <option value="{{ $department->id }}">
                                                                    {{ $department->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form_group">
                                                        <textarea name="message" class="form_control" placeholder="Message" required></textarea>
                                                    </div>
                                                </div>
                                                <!--success message-->
                                                <div class="d-none review-message" style="width: 100%">
                                                    <h4>Thank you, we will get back to you.</h4>
                                                </div>

<<<<<<< HEAD
                                                
                                                <!-- Add the reCAPTCHA widget -->
                                                <div class="g-recaptcha" data-sitekey="6Lenl4MpAAAAAEfTqadLxml4QXrAYov6coa3AE8V"></div>
=======
                                                <div class="col-lg-6 captcha-style" style="display: flex; align-items: center;">
                                                    <div class="form_group" style="flex: 1;">
                                                        {{-- <label for="verification_code"
                                                            style="margin-right: 10px;">Enter CAPTCHA Code</label> --}}
                                                        <input type="text" class="form_control" id="verification_code" placeholder="Enter CAPTCHA Code" name="verification_code"
                                                            pattern="\d{4}" title="Please enter a 4-digit number"
                                                            required style="margin-right: 10px;">
                                                    </div>
                                                    <h3 id="random_number"></h3>
                                                </div>
>>>>>>> b98541034009a1de1c9c8b7339ba381e79a30171

                                                <div class="col-lg-12">
                                                    <div class="form_group success-below">
                                                        <button type="submit" class="main-btn primary-btn">Submit</button>
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


    <!-- UPI Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">UPI Payment</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <img src="{{ asset('/images/upi_payment.jpg') }}" alt="">
                </div>

            </div>
        </div>
    </div>
    
    

    <!--====== Header Area ======-->
    <header class="header-area header-one transparent-header1">
        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin: 10px;">
                {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <!--<div id="google_translate_element"></div>-->
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
                                src="{{ asset('/images/logo/multiplex-logo2.png') }}" alt="Site Logo"></a>
                    </div>
                    <!--====== Nav Menu ======-->
                    <div class="nav-menu">
                        <!--====== Site Branding ======-->
                        <div class="mobile-logo mb-30 d-block d-xl-none">
                            <a href="{{ url('/') }}" class="brand-logo"><img
                                    src="{{ asset('/images/logo/multiplex-logo.png') }}" alt="Site Logo"></a>
                        </div>
                        <!--=== Nav Search ===-->
                        <div class="nav-search mb-30 d-block d-xl-none ">
                            <form>
                                <div class="form_group">
                                    <input type="search" class="form_control search-input" placeholder="Search Here"
                                        name="search" required>
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
                                        <li><a href="{{ route('vision-and-misssion') }}">Vision & Mission</a></li>
                                        <li><a href="{{ route('founder-and-management') }}">Founder & Management </a>
                                        </li>
                                        <li><a href="{{ route('group-of-companies') }}">Group of Companies </a></li>
                                        <li><a href="{{ route('awards-and-recognitions') }}">Awards & Recognitions</a>
                                        </li>
                                        <li><a href="{{ route('team') }}">Team </a></li>
                                        <li><a href="{{ route('timeline') }}">Our 50 Years Journey</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item has-children"><a href="#">Corporate</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('research-and-development') }}">R & D</a></li>
                                        <li><a href="{{ route('infrastructure') }}">Infrastructure</a></li>
                                        <li><a href="{{ route('branches') }}">Branches </a></li>
                                        <li><a href="{{ route('global-connect') }}">Global/International Connect</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item has-children"><a
                                        href="{{ route('products.index') }}">Products</a>
                                    <ul class="sub-menu">
                                        @foreach ($categories as $category)
                                            <li><a href="{{ route($category->slug) }}">{{ $category->name }}</a></li>
                                        @endforeach

                                    </ul>
                                </li>
                                <li class="menu-item has-children"><a href="#">Services</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('quality-testing') }}">Quality Testing</a></li>
                                        {{-- <li><a href="{{ route('microbial-analysis-laboratory') }}">Microbial Analysis
                                        Laboratory</a>
                                </li> --}}
                                        <li><a href="{{ route('drone-services') }}">Drone Services</a></li>
                                        <li><a href="{{ route('gardening-services') }}">Gardening Services</a></li>

                                    </ul>
                                </li>
                                <li class="menu-item has-children"><a href="#">Community</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('farmers-club') }}">Farmers Club</a></li>
                                        <li><a href="{{ route('dealers-meet') }}">Dealers Meet</a></li>
                                        <li><a href="{{ route('farmers-meet') }}">Farmers Meet</a></li>
                                        <li><a href="{{ route('multiplex-vaahini') }}">Multiplex Vaahini</a></li>
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
                            <a href="{{ route('contact') }}" data-toggle="modal" data-target="#sidebar-modal"
                                class="main-btn secondary-btn">Quick Enquiry</a>
                        </div>
                    </div>
                    <!--====== Nav Right Item ======-->
                    <div class="nav-right-item">
                        <div class="menu-button d-xl-block d-none">
                            <a href="{{ route('contact') }}" data-toggle="modal" data-target="#sidebar-modal"
                                class="main-btn primary-btn">Quick Enquiry</a>
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
            <div class="footer-widget-area pt-80 pb-10 ptbmob-30">
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
                                    <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                    <li><a href="{{ route('success-stories') }}">Success Stories</a></li>
<<<<<<< HEAD
                                    <li><a href="{{ route('blogs') }}">Blog Articles</a></li>
                                    <li><a href="#" data-toggle="modal" data-target="#myModal">Digital Payment</a></li>
=======
                                    <!--<li><a href="#">News & Media</a></li>-->
                                    <li><a href="#" data-toggle="modal" data-target="#myModal">Digital
                                            Payment</a></li>
                                    <!-- <li><a href="#">FAQs</a></li> -->
>>>>>>> b98541034009a1de1c9c8b7339ba381e79a30171
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

                                    <li><a href="{{ route('home.life-at-multiplex') }}">Life @ Multiplex</a></li>
                                    <div class="hero-button wow fadeInUp" data-wow-delay=".7s">
                                        <a href="{{ route('home.current-openings') }}"
                                            class="main-btn golden-btn mb-10">Current Openings</a>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <!--====== Footer Widget ======-->
                        <div class="footer-widget footer-nav-widget mb-40 wow fadeInUp">
                            <h4 class="widget-title">Other Info</h4>
                            <div class="widget-content">
                                <ul class="footer-nav">
                                    <li><a href="{{ route('terms-and-conditions') }}">Terms & Conditions</a></li>
                                    <li><a href="/assets/doc/one-brand-total-solution-brochure.pdf"
                                            target="_blank">Fertilizers & Micro-Nutrients</a></li>
                                    <li><a href="/assets/doc/bio-products-brochure.pdf"
                                            target="_blank">Bio-Products</a></li>
                                    <li><a href="/assets/doc/pesticides-brochure.pdf" target="_blank">Pesticides</a>
                                    </li>

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
                            <P>Copyright &copy; 2024 Multiplex Group of Companies. All Rights Reserved.</P>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="whatsapp-chat">
            <a href="https://web.whatsapp.com/send?phone=917760003049&text=Hello%20Multiplex" target="_blank"><img src="{{ asset('/images/whatsapp64.png') }}" alt="Multiplex Group"></a>
        </div>
        
    </footer>
    <style>
        .nice-select:after {
            display: none !important;
        }

        .nice-select .list {
            width: 100% !important;
        }
    </style>
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
    <script src="{{ asset('/vendor/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
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
   

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
    
    <!--<script src="https://www.google.com/recaptcha/api.js" async defer></script>-->

    <script>
        function validateDomain() {
            var emailInput = document.getElementById('emailField');
            var emailValue = emailInput.value;
<<<<<<< HEAD
    
            // Regular expression for email validation excluding .ru, .site, and .store extensions
            var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(com|net|org|gov|edu|co|in)(?<!\.ru)(?<!\.site)(?<!\.store)$/;
    
=======

            // Simplified regular expression for email validation
            var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(com|in|org|net|gov|edu|co)$/;

>>>>>>> b98541034009a1de1c9c8b7339ba381e79a30171
            if (!emailRegex.test(emailValue)) {
                emailInput.setCustomValidity("Please enter a valid email address.");
            } else {
                emailInput.setCustomValidity('');
            }
        }
    </script>

    <script>
    
        function num_validate(event) {
        // Ensure only numeric characters are allowed
        var charCode = event.which ? event.which : event.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            event.preventDefault();
        }
     }

        function maxLengthCheck(object) {
        // Ensure the entered value has exactly 10 digits
        if (object.value.length !== 10) {
            object.setCustomValidity("Phone number must be 10 digits long.");
        } else {
            object.setCustomValidity("");
        }
    }
    
        function stripSpacesOnPaste(event) {
        // Prevent default paste behavior
        event.preventDefault();
        
        // Get pasted data from clipboard
        var clipboardData = event.clipboardData || window.clipboardData;
        var pastedData = clipboardData.getData('text');
        
        // Remove spaces from the pasted data
        pastedData = pastedData.replace(/\s/g, '');

        // Insert modified data into the input field
        document.execCommand('insertText', false, pastedData);
    }

        
        var route = "{{ url('autocomplete-global') }}";

        $('.search-input').typeahead({
            source: function(query, process) {
                return $.get(route, {
                    query: query
                }, function(data) {
                    var suggestions = data.map(function(item) {
                        return {
                            id: item.slug,
                            name: item.name
                        };
                    });

                    // Remove the existing suggestions list before creating a new one
                    $('.suggestions-list').remove();

                    // Additional code to display suggestions in a list
                    var suggestionsList = $(
                        '<ul class="suggestions-list" style="background-color: white;"></ul>');
                    suggestions.forEach(function(item) {
                        suggestionsList.append('<li data-id="' + item.id + '">' + item.name +
                            '</li>');
                    });

                    // Append the suggestions list below the input form
                    $('.search-input').after(suggestionsList);
                });
            }
        });

        // Handle the selection of a suggestion
        $(document).on('click', '.suggestions-list li', function() {
            var selectedId = $(this).data('id');

            // Navigate to the URL using the item.id
            window.location.href = "{{ url('product') }}/" + selectedId;

            // Remove the suggestions list
            $('.suggestions-list').remove();
        });

        // Add CSS to change cursor to pointer
        $(document).on('mouseenter', '.suggestions-list li', function() {
            $(this).css('cursor', 'pointer');
        });

        $(document).on('mouseleave', '.suggestions-list li', function() {
            $(this).css('cursor', 'default');
        });
        // Disable the "Enter" key for the input field
        $('.search-input').keydown(function(e) {
            if (e.which === 13) {
                e.preventDefault();
                return false;
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.product-form').submit(function(e) {
                e.preventDefault();


                var form = $(this);
                form.find(':submit').prop('disabled', true);
                $.ajax({
                    type: 'POST',
                    url: form.attr('action'),
                    data: form.serialize(),
                    success: function(response) {
                        // Show the success message
                        form.find('.success-message').removeClass('d-none').addClass('d-block');

                        // Reset the form after 5 seconds
                        setTimeout(function() {
                            // Hide the success message
                            form.find('.success-message').removeClass('d-block')
                                .addClass('d-none');

                            form[0].reset();

                            // Clear the selected value in the select element
                            form.find('select[name="department"]').prop('selectedIndex',
                                0);

                            // Close the modal (adjust the modal ID if needed)
                            $('#sidebar-modal').modal('hide');
                        }, 5000);


                    },
                    error: function(error) {
                        // Handle error if needed
                    }
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.service-form').submit(function(e) {
                e.preventDefault();

                var form = $(this);
                form.find(':submit').prop('disabled', true);
                $.ajax({
                    type: 'POST',
                    url: form.attr('action'),
                    data: form.serialize(),
                    success: function(response) {
                        // Handle the success response here
                        console.log(response);

                        // Show the success message
                        form.find('.service-message').removeClass('d-none').addClass('d-block');

                        // Reset the form and hide the service message after 5 seconds
                        setTimeout(function() {
                            form.find('.service-message').removeClass('d-block')
                                .addClass('d-none');
                            form[0].reset();
                        }, 5000);
                    },
                    error: function(error) {
                        // Handle the error response here
                        console.log(error);
                    }
                });
            });
        });
    </script>

    <script>
<<<<<<< HEAD
    $(document).ready(function() {
    $('.general-form').submit(function (e) {
        var response = grecaptcha.getResponse();
        var form = $(this);
    
        if (response.length == 0) {
            // reCAPTCHA not selected, prevent form submission
            e.preventDefault();
            alert('Please complete the reCAPTCHA.');
        } else {
            // reCAPTCHA selected, prevent default form submission
            e.preventDefault();
    
            // Your existing form submission logic here
            form.find(':submit').prop('disabled', true);
            $.ajax({
                type: 'POST',
                url: form.attr('action'),
                data: form.serialize(),
                success: function (response) {
                    // Handle the success response here
                    // console.log(response);
    
                    // Show the success message
                    form.find('.review-message').removeClass('d-none').addClass('d-block');
    
                    // Reset the form and hide the review message after 5 seconds
                    setTimeout(function () {
                        form.find('.review-message').removeClass('d-block')
                            .addClass('d-none');
                        form[0].reset();
                        form.find(':submit').prop('disabled', false); // Enable the submit button again
                        $('.g-recaptcha').hide();
                        document.getElementById('sidebar-modal').style.display = 'none';
                        document.body.classList.remove('modal-open');
                        document.getElementsByClassName('modal-backdrop')[0].style.display = 'none';
                        location.reload(); // Reload the page
                        
                    }, 4000);
                },
                error: function (error) {
                    // Handle the error response here
                    console.log(error);
                    form.find(':submit').prop('disabled', false); // Enable the submit button again
                }
            });
        }
    });

});

        // $(document).ready(function() {

        //     var randomCode = Math.floor(1000 + Math.random() * 9000);
        //     document.getElementById('random_number').innerText = randomCode; // Removed brackets

        //     $('.general-form').submit(function(e) {
        //         e.preventDefault();
                
        //         // Check if reCAPTCHA is selected
        //         if (!$('.g-recaptcha-response').val()) {
        //             alert('Please complete the reCAPTCHA verification.');
        //             return false;
        //         }

        //         // var enteredCode = $('#verification_code').val();
        //         // if (enteredCode != randomCode) {
        //         //     alert('Verification code does not match. Please try again.');
        //         //     return false;
        //         // }

        //         var selectElement = document.getElementById('department');
        //         if (!selectElement.value) {
        //             alert('Please select the department');
        //             return false;
        //         }

        //         var form = $(this);
        //         form.find(':submit').prop('disabled', true);
        //         $.ajax({
        //             type: 'POST',
        //             url: form.attr('action'),
        //             data: form.serialize(),
        //             success: function(response) {
        //                 // Handle the success response here
        //                 console.log(response);

        //                 // Show the success message
        //                 form.find('.review-message').removeClass('d-none').addClass('d-block');

        //                 // Reset the form and hide the review message after 5 seconds
        //                 setTimeout(function() {
        //                     form.find('.review-message').removeClass('d-block')
        //                         .addClass('d-none');
        //                     form[0].reset();
        //                 }, 5000);
        //             },
        //             error: function(error) {
        //                 // Handle the error response here
        //                 console.log(error);
        //             }
        //         });
        //     });
        // });
=======
        $(document).ready(function() {

            var randomCode = Math.floor(1000 + Math.random() * 9000);
            document.getElementById('random_number').innerText = randomCode; // Remove brackets

            $('.general-form').submit(function(e) {
                e.preventDefault();

                var enteredCode = $('#verification_code').val();
                if (enteredCode != randomCode) {
                    alert('Verification code does not match. Please try again.');
                    return false;
                }

                var selectElement = document.getElementById('department');
                if (!selectElement.value) {
                    alert('Please select the department');
                    return false;
                }

                var form = $(this);
                form.find(':submit').prop('disabled', true);
                $.ajax({
                    type: 'POST',
                    url: form.attr('action'),
                    data: form.serialize(),
                    success: function(response) {
                        // Handle the success response here
                        console.log(response);

                        // Show the success message
                        form.find('.review-message').removeClass('d-none').addClass('d-block');

                        // Reset the form and hide the review message after 5 seconds
                        setTimeout(function() {
                            form.find('.review-message').removeClass('d-block')
                                .addClass('d-none');
                            form[0].reset();
                        }, 5000);
                    },
                    error: function(error) {
                        // Handle the error response here
                        console.log(error);
                    }
                });
            });
        });
>>>>>>> b98541034009a1de1c9c8b7339ba381e79a30171
    </script>


    <!-- Content -->
    @yield('scripts')
    <!-- / Content -->
</body>

</html>