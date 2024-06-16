@extends('client.header')
@section('content')
    <style>
        @media (max-width:576px) {

            .banner-section-home {

                background-size: 100% !important;
                background-position: center !important;
                min-height: 100% !important;
            }

            .banner-section-home .hero-wrapper-one .hero-content h1 {
                font-size: 18px !important;
                margin-bottom: 0% !important;
                text-align: left !important;
            }

            .banner-section-home .hero-wrapper-one {
                padding: 66px 0 !important;
            }

            .skills-section.pt-80 {
                padding-top: 30px !important;
            }
        }


        #overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #000;
            filter: alpha(opacity=70);
            -moz-opacity: 0.7;
            -khtml-opacity: 0.7;
            opacity: 0.7;
            z-index: 100;
            display: none;
        }

        .popup-content {
            padding: 40px 10px;
            line-height: 1.5;
        }

        .popup-content img {
            /* border-radius: 5px; */
            border: 8px solid #fff;
            box-shadow: 0 2px 5px #000;
        }

        .close {
            cursor: pointer;
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 18px;
            color: #333;
            opacity: 1;
        }

        .cnt223 a {
            text-decoration: none;
            background-color: #00954d;
            padding: 5px;
            border-radius: 0px;
        }

        .popup-onload {
            margin: 0 auto;
            display: none;
            position: fixed;
            z-index: 101;
            top: 50%;
            left: 50%;
            margin-top: -375px;
            margin-left: -292px;
        }

        .cnt223 {
            min-width: 540px;
            width: 540px;
            min-height: 150px;
            margin: 100px auto;
            background: #f3f3f300;
            position: relative;
            z-index: 103;
            /* padding: 15px 35px; */
            /* border-radius: 5px; */
            /* box-shadow: 0 2px 5px #000; */
        }

        .cnt223 p {
            clear: both;
            color: #555555;
            /* text-align: justify; */
            font-size: 20px;
            font-family: sans-serif;
        }

        .cnt223 p a {
            color: #d91900;
            font-weight: bold;
        }

        

        @media only screen and (max-width: 767px) {
        
        .popup-onload {
            margin: 0 auto;
            display: none;
            position: fixed;
            z-index: 101;
            top: 50%;
            left: 50%;
            margin-top: -227px;
            margin-left: -311px;
        }
        
        
        .cnt223 {
            min-width: 330px;
            width: 330px;
            min-height: 150px;
            margin: 100px 0px 0px 146px;
            /*background: #f3f3f3;*/
            position: relative;
            z-index: 103;
            /*padding: 10px 7px;*/
            /*border-radius: 5px;*/
            /*box-shadow: 0 2px 5px #000;*/
        }
        
        .popup-content img {
            /* border-radius: 5px; */
            border: 5px solid #fff;
            box-shadow: 0 2px 5px #000;
        }
        
        .popup-content {
            padding: 40px 10px;
            line-height: 1.5;
        }
        }

        
        @media (min-width:1679px){
        .skill-two_image-boxss {
            width: 100% !important;
        }
        .features-wrapper-two {
            max-width: 100% !important;
        }
        .about-two_image-box{
        margin-inline-start: -115px !important;}
        .in-img{
            margin-left: 7rem !important;
        }
        }
    </style>


    <div class='popup-onload'>
        <div class='cnt223'>
            <div class="popup-content">
                <a href='' class='close cls'>X</a>
                <img src="{{ asset('images/' . $banner->image) }}">
            </div>
        </div>
    </div>


    <!--====== Start Banner Section - desktop ======-->
    <section class="banner-section banner-section-home home-banner-desktop"
        style="background-image: url({{ asset('images/home-banner-1920x929-new.webp') }});background-repeat: no-repeat; background-size: cover; background-position: center; min-height:565px;">
        <!--=== Hero Wrapper ===-->
        <div class="hero-wrapper-one gray-bg1">
            <div class="container">
                <div class="row align-items-lg-center">
                    <div class="col-xl-6 col-lg-12">
                        <!--=== Hero Content ===-->
                        <div class="hero-content">
                            <h1 class="wow fadeInUp" data-wow-delay=".4s" style="color:#fff;">Innovators in Agricultural
                                Sector
                            </h1>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--====== End Banner Section - desktop ======-->
    
    
    <!--====== Start Banner Section - mobile ======-->
    <section class="banner-section banner-section-home home-banner-mobile"
        style="background-image: url({{ asset('images/home-banner-1920x929-new.webp') }});background-repeat: no-repeat; background-size: cover; background-position: center; min-height:565px;">
        <!--=== Hero Wrapper ===-->
        <div class="hero-wrapper-one gray-bg1">
            <div class="container">
                <div class="row align-items-lg-center">
                    <div class="col-xl-6 col-lg-12">
                        <!--=== Hero Content ===-->
                        <div class="hero-content">
                            <h1 class="wow fadeInUp" data-wow-delay=".4s" style="color:#fff;">Innovators in <br/>Agricultural
                                Sector
                            </h1>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
     <!--====== End Banner Section - mobile ======-->
    
    
    
    

    <!--====== Start About Section  ======-->
    <section class="skills-section pt-80 pb-50">
        <div class="container">
            <div class="row align-items-lg-center">
                <div class="col-xl-7 col-lg-12">
                    <!--====== About Content Box ======-->
                    <div class="skill-content-box mb-35 mr-lg-50 wow fadeInLeft">
                        <!--====== Section-title ======-->
                        <div class="section-title mb-25">
                            <span class="sub-title"><img src="{{ asset('images/leaf-svgrepo-com-new.svg') }}" height="35"
                                    width="35" alt=""></span>
                            <h2 style="display:flex;">About <span style="color:#ee282a;"><img style="max-width: 25%;margin-top: -8px;margin-left: 10px;" src="{{ asset('images/multiplex-text-logo-1.svg') }}"></span></h2>
                        </div>
                        <p class="mb-20">The Multiplex Group has been at the forefront of the agricultural
                            sector since its inception in 1974. As industry leaders,
                            we specialize in manufacturing and distribution of a comprehensive range of agricultural inputs.
                            Our portfolio encompasses fertilizers, pesticides, nutrients
                            (both major and minor), organic manure, bio-fertilizers, bio-pesticides, and bio-stimulants. The
                            reach of Multiplex products extend to more than 17 countries,
                            including Japan, Korea, Ethiopia, Djibouti, Sri Lanka, and various Arab nations.
                        </p>

                        <p class="mb-20">
                            Dedicated to the pursuit of the highest quality in agricultural yields, our devoted team of
                            scientists leverage cutting-edge technologies to develop innovative
                            crop nutrition and plant protection solutions at our facility. To know more about our advanced
                            Research-and-Development facilities,
                            <a class="link_a" href="{{ route('research-and-development') }}" target="_blank">click here.</a>
                        </p>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-12">
                    <!--====== About Image Box ======-->
                    <div class="skill-two_image-box mb-20 p-r z-1 wow fadeInRight motto-image-style">
                        <img src="{{ asset('images/multiplex-building-img.jpg') }}" class="" alt="Skill Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End About Section  ======-->


    <style>
        /* Slick Slider */

        .slick-prev,
        .slick-next {
            position: absolute;
            top: 135%;
            font-size: 1.8rem;
        }

        .slick-prev {
            left: 0;
        }

        .slick-next {
            right: 0;
        }

        .slick-slider {
            position: relative;
            display: block;
            box-sizing: border-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-touch-callout: none;
            -khtml-user-select: none;
            -ms-touch-action: pan-y;
            touch-action: pan-y;
            -webkit-tap-highlight-color: transparent;
        }

        .slick-list {
            position: relative;
            display: block;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }

        .slick-list:focus {
            outline: none;
        }

        .slick-list.dragging {
            cursor: pointer;
            cursor: hand;
        }

        .slick-slider .slick-track,
        .slick-slider .slick-list {
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .slick-track {
            position: relative;
            top: 0;
            left: 0;
            display: block;
        }

        .slick-track:before,
        .slick-track:after {
            display: table;
            content: '';
        }

        .slick-track:after {
            clear: both;
        }

        .slick-loading .slick-track {
            visibility: hidden;
        }

        .slick-slide {
            display: none;
            float: left;
            height: 100%;
            min-height: 1px;
        }

        [dir='rtl'] .slick-slide {
            float: right;
        }

        .slick-slide img {
            display: block;
        }

        .slick-slide.slick-loading img {
            display: none;
        }

        .slick-slide.dragging img {
            pointer-events: none;
        }

        .slick-initialized .slick-slide {
            display: block;
        }

        .slick-loading .slick-slide {
            visibility: hidden;
        }

        .slick-vertical .slick-slide {
            display: block;
            height: auto;
            border: 1px solid transparent;
        }

        .slick-arrow.slick-hidden {
            display: none;
        }

        .slide {
            transition: filter .4s;
            margin: 0px 40px;
        }

        .fas {
            color: #2a7d2e;
        }

        .slick-prev {
            left: 0;
        }

        .slick-prev,
        .slick-next {
            position: absolute;
            top: 35%;
            font-size: 1.8rem;
        }

        /*.section {*/
        /*  max-width: 1200px;*/
        /*  margin: 0 auto;*/
        /*}*/

        .bg-dark-home-goc {
            background: #bfbfbf29;
        }

        .fchoice-bg {
            background: #faead7;
        }

        .silver-jub {

            border-radius: 300px;
        }
        
        .golden h6 {
            font-size:50px;
            font-weight:700;
        }
        
        
        .testimonial-slider-one .slick-dots {
            text-align: center;
            margin-top: 2px; 
        }
        
        .copyright-text p {
             font-size:15px;
        }
        
       .home-banner-desktop {
            display:block;
        }
        
        .home-banner-mobile {
            display:none;
        }
        

        @media (max-width:567px) {
            .counter-area .col-sm-6 {
                width: 50% !important;
                padding-left: 7px !important;
                padding-right: 7px !important;

            }

            .counter-area .col-sm-6 .inner-counter h2 {
                font-size: 18px !important;
            }

            .features-wrapper-two {
                padding: 10px 10px !important;
            }

            .testimonial-slider-one .slick-arrow.prev {
                left: 20px;
            }

            .testimonial-slider-one .slick-arrow.next {
                right: 20px;
            }

            .testimonial-slider-one .slick-arrow {
                width: 35px;
                height: 35px;
            }
            
            .ptbmob-10 {
                padding-top:10px;
                padding-bottom:10px;
            }
            
            .ptbmob-30 {
                padding-top:30px;
            }
            
            .silver-jub {
                border-radius: 20px;
            }
            
            .about-wrapper .about-three_content-box {
                padding-top: 10px;
            }
            
            .golden h6 {
                font-size:34px;
            }
            
            .sambhrama-text p {
                font-size:15px;
            }
            
            .home-banner-desktop {
                display:none;
           }
        
            .home-banner-mobile {
               display:block;
           }
            
            
        }
    </style>


    <section class="trigger section gutter-horizontal bg-dark-home-goc gutter-vertical--m gutter-horizontal pt-50 pb-50">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-12">
                <div class="section-title text-center mb-50 wow fadeInDown">
                    <span class="sub-title"><img src="{{ asset('images/leaf-svgrepo-com-new.svg') }}" height="35"
                            width="35" alt=""></span>
                    <h2>Group of Companies</h2>
                </div>
            </div>
        </div>
        <div class="customer-logos slider">
            <div class="slide-in-right slide"><img src="{{ asset('images/goc/goc-new-one.png') }}"
                    alt="Karnataka Agro Chemicals"></a></div>
            <div class="slide-in-right slide"><img src="{{ asset('images/goc/goc-new-two.png') }}"
                    alt="Multiplex Fertlizer's Pvt. Ltd"></a></div>
            {{-- <div class="slide-in-right slide"><img src="{{ asset('images/goc/goc-new-three.png') }}"
                    alt="Mystique Apparels India Pvt. Ltd"></a></div> --}}
            <div class="slide-in-right slide"><img src="{{ asset('images/goc/goc-new-four.png') }}"
                    alt="Multiplex Agricare Pvt. Ltd"></a></div>
            <div class="slide-in-right slide"><img src="{{ asset('images/goc/goc-new-five.png') }}"
                    alt="Multiplex Movers"></a></div>
            <div class="slide-in-right slide"><img src="{{ asset('images/goc/goc-new-six.png') }}"
                    alt="Multiplex Bio-Tech Pvt. Ltd"></a></div>
            <div class="slide-in-right slide"><img src="{{ asset('images/goc/goc-new-seven.png') }}"
                    alt="Anshul Agro Chemicals"></a></div>
            <div class="slide-in-right slide"><img src="{{ asset('images/goc/goc-new-eight.png') }}"
                    alt="Multiplex Urban Green India Pvt. Ltd"></a></div>
            <div class="slide-in-right slide"><img src="{{ asset('images/goc/goc-new-nine.png') }}"
                    alt="Multiplex Farming"></a></div>
            <div class="slide-in-right slide"><img src="{{ asset('images/goc/goc-new-ten.png') }}"
                    alt="GPS Institute of Agricultural Management"></a></div>
            <div class="slide-in-right slide"><img src="{{ asset('images/goc/goc-new-eleven.png') }}"
                    alt="Multiplex Safe & Farm Fresh"></a></div>
            <div class="slide-in-right slide"><img src="{{ asset('images/goc/goc-new-twelve.png') }}"
                    alt="Agriplex Private Limited"></a></div>
            <div class="slide-in-right slide"><img src="{{ asset('images/goc/goc-new-thirteen.png') }}"
                    alt="Multiplex Drone Pvt. Ltd"></a></div>
            <div class="slide-in-right slide"><img src="{{ asset('images/goc/goc-new-fourteen.png') }}"
                    alt="Multiplex Forest Factree"></a></div>
        </div>
    </section>


    <style>
        .motto-image-style img {
            /*background:#f2f2f2;*/
            text-align: center;
            border-radius: 20px;
        }
    </style>

    <!--====== Start Farmers First Choice Section  ======-->
    <section class="skills-section pt-50 pb-50 ptbmob-10 mt-60 fchoice-bg">
        <div class="container">
            <div class="row align-items-lg-center">
                <div class="col-xl-6 col-lg-12">
                    <!--====== About Image Box ======-->
                    <div class="skill-two_image-box skill-two_image-boxss mb-20 p-r z-1 wow fadeInRight">
                        <img src="{{ asset('images/about-bg-2.jpg') }}" class="" alt="Skill Image">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <!--====== About Content Box ======-->
                    <div class="skill-content-box mb-30 mr-lg-50 wow fadeInLeft">
                        <!--====== Section-title ======-->
                        <div class="section-title mb-25">
                            <span class="sub-title"><img src="{{ asset('images/leaf-svgrepo-com-new.svg') }}"
                                    height="35" width="35" alt=""></span>
                            <h2>Farmers First Choice <br />Since 1974</h2>
                        </div>
                        <p class="mb-20">Multiplex is the leading household brand name for farmers across pan India. We
                            manufacture and export Micro Nutrients, Organic Manure,
                            Bio-Fertilizers, Bio-Activators, Bio-Pesticides & Pesticides</p>

                        <p class="mb-20">With over 49 years of experience in the field of agronomics, we are the pioneers
                            in green farming and providing complete solutions for
                            agriculture and horticulture to increase yield by quantity & quality.</p>

                        <p class="mb-20">We are India's leading manufacturer and exporter of agriculture inputs and
                            provide exceptional solutions for crop nutrition and plant protection.</p>
                    </div>
                    <!--<div class="hero-button mb-30 wow fadeInUp" data-wow-delay=".7s">-->
                    <!--    <a href="{{ url('/') }}" class="main-btn filled-btn mb-10">Download Brochure </a>-->
                    <!--</div>-->
                </div>

            </div>
        </div>
    </section>
    <!--====== End Farmers First Choice Section  ======-->

    <!--====== Start counters Section ======-->
    <section class="features-section-two p-r z-1">
        <!--=== Features Wrapper ===-->
        <div class="features-wrapper-two main-bg wow fadeInDown">
            <!--=== Counter Area ===-->
            <div class="counter-area">
                <div class="row pt-20">
                    <div class="col-lg-2 col-sm-6">
                        <!--=== Counter Item ===-->
                        <div class="single-counter-item-two mb-30 wow fadeInUp">
                            <div class="inner-counter text-center">
                                <img src="{{ asset('images/br1.svg') }}" height="120" width="120" alt="">
                                <h2 class="number"><span class="count">28</span></h2>
                                <p><strong>Branches</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <!--=== Counter Item ===-->
                        <div class="single-counter-item-two mb-30 wow fadeInUp">
                            <div class="inner-counter text-center">
                                <img src="{{ asset('images/emp1.svg') }}" height="120" width="120" alt="">
                                <h2 class="number"><span class="count">1500</span>+</h2>
                                <p><strong>Employees</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <!--=== Counter Item ===-->
                        <div class="single-counter-item-two mb-30 wow fadeInDown">
                            <div class="inner-counter text-center">
                                <img src="{{ asset('images/ad1.svg') }}" height="120" width="120" alt="">
                                <h2 class="number"><span class="count">10</span>K+</h2>
                                <p><strong>Authorized Dealers</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <!--=== Counter Item ===-->
                        <div class="single-counter-item-two mb-30 wow fadeInUp">
                            <div class="inner-counter text-center">
                                <img src="{{ asset('images/pro1.svg') }}" height="120" width="120" alt="">
                                <h2 class="number"><span class="count">250</span>+</h2>
                                <p><strong>Products</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <!--=== Counter Item ===-->
                        <div class="single-counter-item-two mb-30 wow fadeInUp">
                            <div class="inner-counter text-center">
                                <img src="{{ asset('images/manu1.svg') }}" height="120" width="120"
                                    alt="">
                                <h2 class="number"><span class="count">13</span></h2>
                                <p><strong>Manufacturing Units</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <!--=== Counter Item ===-->
                        <div class="single-counter-item-two mb-30 wow fadeInUp">
                            <div class="inner-counter text-center">
                                <img src="{{ asset('images/club1.svg') }}" height="120" width="120"
                                    alt="">
                                <h2 class="number"><span class="count">3.6</span>M+</h2>
                                <p><strong>Farmer Club Members</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--====== End counters Section ======-->

    

    <!--====== Start 50years Section ======-->
    <section class="about-section years mt-50 mb-50 ptbmob-10 silver-jub">
        <div class="container-fluid">
            <!--=== About Wrapper ===-->
            <div class="about-wrapper wow fadeInUp">
                <div class="container">
                    <div class="row align-items-xl-center">
                        <div class="col-xl-7 col-lg-12">
                            <!--=== About Content Box ===-->
                            <div class="about-three_content-box wow fadeInRight">
                                <!--=== Section Title ===-->
                                <div class="section-title mb-25 golden">
                                    <span class="sub-title"><img src="{{ asset('images/leaf-svgrepo-com-new.svg') }}"
                                            height="35" width="35" alt=""></span>
                                    <h3>We are fast approaching the milestone of</h3>
                                    <br/>
                                    <h6>Multiplex <br />Golden Jubilee <br />Celebration</h6>
                                </div>
                                
                                <!--  <p class="mb-40 wow fadeInDown">Sed ut perspiciatis unde omnis iste natus voluptatem accusan inventore</p> -->
                                <div class="hero-button mb-30 wow fadeInUp" data-wow-delay=".7s">
                                    <!-- <a href="about.html" class="main-btn golden-btn mb-10">Explore More</a> -->
                                    <a href="{{ route('timeline') }}" class="main-btn filled-btn mb-10">Know More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-12">
                            <!--=== About Image Box ===-->
                            <div class="about-two_image-box wow fadeInLeft">
                                <img src="{{ asset('images/silver-jubilee-one.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End years Section ======-->


    <style>
        .slick-dots li {
            display: none;
        }
    </style>

    <!--====== Start timeline Section  ======-->
    <section class="testimonial-section pt-50 mt-50">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-12">
                    <div class="section-title text-center mb-20 wow fadeInDown">
                        <span class="sub-title"><img src="{{ asset('images/leaf-svgrepo-com-new.svg') }}" height="35"
                                width="35" alt=""></span>
                        <h2>Our 50 Years Journey</h2>
                    </div>
                </div>
            </div>
            <!--====== timeline Slider  ======-->
            <div class="testimonial-slider-one wow fadeInUp">
                <!--====== timeline Item  ======-->
                <div class="single-testimonial-item">
                    <img src="{{ asset('images/journey/1974.jpg') }}" alt="Gallery Image">
                    <h2 class="tl-year"> 1974</h2>
                    <p>We initially established our presence in the agricultural sector under the name "Karnataka Agro
                        Chemicals," where we introduced our brand "Multiplex."</p>
                </div>
                <!--====== timeline Item  ======-->
                <div class="single-testimonial-item">
                    <img src="{{ asset('images/journey/1975.png') }}" alt="Gallery Image">
                    <h2 class="tl-year"> 1975</h2>
                    <p>Over time, our company has evolved, expanding into various regions continuing to build on our
                        agricultural roots. Multiplex brand was registered in other states and Andhra Pradesh was the first
                        to market our products.</p>
                </div>
                <!--====== timeline Item  ======-->
                <div class="single-testimonial-item">
                    <img src="{{ asset('images/journey/1982.jpg') }}" alt="Gallery Image">
                    <h2 class="tl-year"> 1982</h2>
                    <p>Multiplex Products extended its operation in Tamil Nadu. This geographical expansion enables the
                        company to tap new markets in the southern region enhancing its presence in one of India's key
                        states.</p>
                </div>
                <!--====== timeline Item  ======-->
                <div class="single-testimonial-item">
                    <img src="{{ asset('images/journey/1996.jpg') }}" alt="Gallery Image">
                    <h2 class="tl-year"> 1986</h2>
                    <p>Understanding the need in the market, we focused on research, exclusive formulation, mass production,
                        and marketing of pesticides. Different varieties of seeds were introduced to the market under the
                        Multiplex Brand.</p>
                </div>
                <!--====== timeline Item  ======-->
                <div class="single-testimonial-item">
                    <img src="{{ asset('images/journey/1999.jpg') }}" alt="Gallery Image">
                    <h2 class="tl-year"> 1999</h2>
                    <p>As Multiplex reaches its silver jubilee milestone, it reflects on a quarter-century of dedicated
                        service to the farming community. The company remains steadfast in its commitment to support and
                        uplift the agricultural sector.</p>
                </div>
                <!--====== timeline Item  ======-->
                <div class="single-testimonial-item">
                    <img src="{{ asset('images/journey/2000.jpg') }}" alt="Gallery Image">
                    <h2 class="tl-year">2000</h2>
                    <p>We established a dedicated manufacturing facility for Zinc Sulphate in Peenya, Bangalore, alongside a
                        specialized production unit for organic manure, Biofertilizers, Bio activators, and Biopesticides.
                    </p>
                </div>
                <!--====== timeline Item  ======-->
                <div class="single-testimonial-item">
                    <img src="{{ asset('images/journey/2003.jpg') }}" alt="Gallery Image">
                    <h2 class="tl-year"> 2003</h2>
                    <p>Multiplex achieved a significant milestone by earning a prestigious organic certification from IMO, a
                        reputable certification body in Switzerland. This certification encompasses and validates the entire
                        production process of the company's Bioproducts.</p>
                </div>
                <!--====== timeline Item  ======-->
                <div class="single-testimonial-item">
                    <img src="{{ asset('images/journey/2004.jpg') }}" alt="Gallery Image">
                    <h2 class="tl-year"> 2004</h2>
                    <p>Karnataka Agro Chemicals, Multiplex Biotech Pvt Ltd, and Multiplex Agricare Pvt Ltd obtained ISO 9001
                        and ISO 14001 certifications for their manufacturing facilities. This year, we introduced our
                        biofertilizers and biopesticides in liquid form, expanding our product range.</p>
                </div>
                <!--====== timeline Item  ======-->
                <div class="single-testimonial-item">
                    <img src="{{ asset('images/journey/2006.jpg') }}" alt="Gallery Image">
                    <h2 class="tl-year"> 2006</h2>
                    <p>Multiplex Biotech Pvt Ltd was acknowledged by the Department of Scientific and Industrial Research
                        (DSIR) for its pioneering work in advancing Agri-Biotechnology production methods.</p>
                </div>
                <!--====== timeline Item  ======-->
                <div class="single-testimonial-item">
                    <img src="{{ asset('images/journey/2012.jpg') }}" alt="Gallery Image">
                    <h2 class="tl-year"> 2012</h2>
                    <p>We collaborated with a prestigious organization to open a new venture in the field of mechanized
                        paddy sowing and transplantation. The outcome of this project gave farmers substantial growth in
                        paddy cultivation based on improved yield both in quality and quantity.</p>
                </div>
                <!--====== timeline Item  ======-->
                <div class="single-testimonial-item">
                    <img src="{{ asset('images/journey/2013.jpg') }}" alt="Gallery Image">
                    <h2 class="tl-year"> 2013</h2>
                    <p>In response to the urban organic farming trend, Multiplex Urban Green (MUG) introduced Krushi Garden
                        kits for home vegetable cultivation on terraces, balconies, and backyards. These kits include all
                        essential agriculture components and services.</p>
                </div>
                <!--====== timeline Item  ======-->
                <div class="single-testimonial-item">
                    <img src="{{ asset('images/journey/2015.jpg') }}" alt="Gallery Image">
                    <h2 class="tl-year"> 2015</h2>
                    <p>The Multiplex Group introduced Multiplex Farming, a collaborative agricultural initiative that
                        transforms barren and semi-cultivated land. It also includes scientific analysis to manage soil and
                        crops comprehensively and farm management.</p>
                </div>
                <!--====== timeline Item  ======-->
                <div class="single-testimonial-item">
                    <img src="{{ asset('images/journey/2016.jpg') }}" alt="Gallery Image">
                    <h2 class="tl-year"> 2016</h2>
                    <p>GPS Institute of Agricultural Management was established under the guidance and initiative of Dr. G.
                        P. Shetty's Agri Research and Educational Trust. This prestigious institute offers courses in Post
                        Graduate Diploma in Agricultural Management and Diploma in Agricultural Management (GPSIOAM). </p>
                </div>
                <!--====== timeline Item  ======-->
                <div class="single-testimonial-item">
                    <img src="{{ asset('images/journey/2017.jpg') }}" alt="Gallery Image">
                    <h2 class="tl-year"> 2017</h2>
                    <p>In response to rising demand, Multiplex inaugurated a dedicated manufacturing facility in Ghaziabad.
                        This facility produces Micronutrients, Specialized fertilizers, Soil conditioners, and
                        Biofertilizers to cater to Northern India's agricultural needs.</p>
                </div>
                <!--====== timeline Item  ======-->
                <div class="single-testimonial-item">
                    <img src="{{ asset('images/journey/2019.jpg') }}" alt="Gallery Image">
                    <h2 class="tl-year"> 2019</h2>
                    <p>Multiplex Drone Pvt Ltd was founded with the primary mission of offering cutting-edge drone
                        technology tailored for agricultural applications. The company specializes in providing services
                        such as aerial crop health monitoring and precision spraying using drones.</p>
                </div>
                <!--====== timeline Item  ======-->
                <div class="single-testimonial-item">
                    <img src="{{ asset('images/journey/2021.jpg') }}" alt="Gallery Image">
                    <h2 class="tl-year"> 2021</h2>
                    <p>Multiplex Biotech Pvt Ltd, in Tumkur is a state-of-the-art pharma-grade manufacturing unit with a
                        daily production capacity of 50,000 liters per day. This facility is dedicated to producing
                        high-quality biotech products, underlining the company's commitment to advanced and efficient
                        manufacturing.</p>
                </div>
                <!--====== timeline Item  ======-->
                <div class="single-testimonial-item">
                    <img src="{{ asset('images/journey/2022.jpg') }}" alt="Gallery Image">
                    <h2 class="tl-year"> 2022</h2>
                    <p>The inauguration marked the establishment of a dedicated Research and Development laboratory in
                        Peenya, Bangalore, demonstrating a significant investment in innovative research and technology.
                        This facility will play a pivotal role in fostering scientific breakthroughs and product
                        development.</p>
                </div>
                <!--====== timeline Item  ======-->
                <div class="single-testimonial-item">
                    <img src="{{ asset('images/journey/2023.jpg') }}" alt="Gallery Image">
                    <h2 class="tl-year"> 2023</h2>
                    <p>The inauguration signifies the commencement of in-house production of cocopeat and coir pith products
                        at Hiriyur by Devi Biotech Pvt Ltd, showcasing the company's commitment to self-sufficiency and
                        product quality control in the cocopeat and coir pith sector.</p>
                </div>
            </div>
        </div>
    </section>
    <!--====== End timeline Section  ======-->



    <!--====== Start Blog Section  ======-->
    <section class="blog-section pt-60 pb-10">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-12">
                    <div class="section-title text-center mb-50 wow fadeInDown">
                        <span class="sub-title"><img src="{{ asset('images/leaf-svgrepo-com-new.svg') }}" height="35"
                                width="35" alt=""></span>
                        <h2>Blog Articles</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <!--====== Single Blog Post  ======-->
                    <div class="single-blog-post mb-40 wow fadeInUp" data-wow-delay=".2s">
                        <div class="post-thumbnail">
                            <img src="{{ asset('images/Red-Spider-Mite-Thumbnail.webp') }}" alt="Post Thumbnail">
                        </div>
                        <div class="entry-content">
                            <a href="javascript:void(0);" class="cat-link"></a>
                            <h4 class="entry-title"><a href="{{ route('the-red-spider-mite') }}">The Red Spider Mite</a></h4>
                            <p>The Tetranychidae family, also known as "Spider Mites," are among the most significant phytophagous mite pests of agriculture worldwide.</p>
                            <div class="post-meta">
                                <span class="date"><a href="{{ route('the-red-spider-mite') }}">Read More</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <!--====== Single Blog Post  ======-->
                    <div class="single-blog-post mb-40 wow fadeInUp" data-wow-delay=".2s">
                        <div class="post-thumbnail">
                            <img src="{{ asset('images/blog-thumb.jpg') }}" alt="Post Thumbnail">
                        </div>
                        <div class="entry-content">
                            <a href="javascript:void(0);" class="cat-link"></a>
                            <h4 class="entry-title"><a href="{{ route('micronutrients-in-crop-production') }}">Micronutrients in Crop Production</a></h4>
                            <p>Large numbers of research workers are studying the importance of micronutrients in crop production all over the world.</p>
                            <div class="post-meta">
                                <span class="date"><a href="{{ route('micronutrients-in-crop-production') }}">Read More</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <!--====== Single Blog Post  ======-->
                    <div class="single-blog-post mb-40 wow fadeInUp" data-wow-delay=".2s">
                        <div class="post-thumbnail">
                            <img src="{{ asset('images/minchuplusthumbnail.png') }}" alt="Post Thumbnail">
                        </div>
                        <div class="entry-content">
                            <a href="javascript:void(0);" class="cat-link"></a>
                            <h4 class="entry-title"><a href="{{ route('minchu-plus-for-pink-boll-worm') }}">Minchu Plus for Pink Bollworm</a></h4>
                            <p>Cotton is the most important commercial crop globally, often referred to as "white gold".</p>
                            <div class="post-meta">
                                <span class="date"><a href="{{ route('minchu-plus-for-pink-boll-worm') }}">Read More</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--====== End Blog Section  ======-->

    <!--====== Start SAMBRAMA Section ======-->
    <section class="about-section pt-10 pb-40">
        <div class="container-fluid">
            <!--=== About Wrapper ===-->
            <div class="about-wrapper app-section wow fadeInUp">
                <div class="container">
                    <div class="row align-items-xl-center">
                        <div class="col-xl-2 col-lg-12">
                            <!--=== About Image Box ===-->
                            <div class="about-two_image-box wow fadeInLeft sambrama-app">
                                <img src="{{ asset('images/sambrama-app-logo.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-12">
                            <!--=== About Content Box ===-->
                            <div class="about-three_content-box wow fadeInRight sambhrama-text">
                                <!--=== Section Title ===-->
                                <div class="section-title mb-15 wow text-white fadeInUp">
                                    <h2 style="font-size: 31px; color:#0A4824;">SAMBRAMA by Multiplex</h2>
                                </div>
                                <p class="wow text-dark fadeInDown">In the continuous process of finding new avenues
                                    of making a strong & valuable relationship with our esteemed retailers &
                                    farmers, Multiplex is presenting the Sambrama App.
                                </p>
                                <p class="mb-15 wow text-dark fadeInDown">A fast & convenient way for authorised retailers & farmers to earn reward points and
                                    redeem exciting gifts!
                                </p>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-12 text-dark text-center">
                            <!--=== About Image Box ===-->
                            <h5>Download App Now</h5>
                            <br />
                            <div class="about-two_image-box wow fadeInLeft">
                                <a href="https://play.google.com/store/apps/details?id=com.elevatozloyalty.sambrama&pli=1"
                                    target="_blank"><img src="{{ asset('images/playstore-logo.png') }}"
                                        alt="" class="in-img"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End SAMBRAMA Section ======-->
    
@endsection
@section('scripts')
    @parent

    <script>
        $(function() {
            var overlay = $('<div id="overlay"></div>');
            overlay.show();
            overlay.appendTo(document.body);
            $('.popup-onload').show();
            $('.cls').click(function() {
                $('.popup-onload').hide();
                overlay.appendTo(document.body).remove();
                return false;
            });

            $('.x').click(function() {
                $('.popup').hide();
                overlay.appendTo(document.body).remove();
                return false;
            });
        });
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.customer-logos').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                prevArrow: '<i class="slick-prev fas fa-angle-left"></i>',
                nextArrow: '<i class="slick-next fas fa-angle-right"></i>',
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 1
                    }
                }]
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.customer-logos').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                prevArrow: '<i class="slick-prev fas fa-angle-left"></i>',
                nextArrow: '<i class="slick-next fas fa-angle-right"></i>',
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 3
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 1
                    }
                }]
            });
        });
    </script>
@endsection
