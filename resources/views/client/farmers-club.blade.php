@extends('client.header')
@section('content')
<style>


     @media (max-width:567px){

         .text-a{
             font-size:17px !important;
         }
     }
     .desktop-view {
        display: block !important;
    }

    .mobile-view {
        display: none !important;
    }

    @media (max-width:567px) {


        .desktop-view {
            display: none !important;
        }

        .mobile-view {
            display: block !important;
        }

        .mobile-view .page-title-area {
            padding-top: 0px !important;
        }

        .mobile-view .page-title-area .page-title-inner h1.page-title {
            font-size: 18px !important;

            padding: 3.5rem 0rem !important;
            text-align: center !important;
        }

        .mobile-view .gd-breadcrumb {
            background: #dee2e6;
            text-align: center;
            font-size: 16px !important;
            color: #1a9f53 !important;
            font-weight: 500;
        }

        .mobile-view .bg_cover {
            background-size: 100% 100% !important;

        }

    }
</style>
    <!--====== Start Page-title-area section ======-->
    <section class="page-title-area text-white bg_cover desktop-view"
        style="background-image: url(assets/images/fc-header-img1.jpg);">
        <div class="container">
            <!--======  Page-title-Inner ======-->
            <div class="page-title-inner text-center">
                <h1 class="page-title">Farmers Club </h1>
                <div class="gd-breadcrumb">
                    <span class="breadcrumb-entry"><a href="index.html">Home</a></span>
                    <span class="separator"></span>
                    <span class="breadcrumb-entry active">Farmers Club </span>
                </div>
            </div>
        </div>
    </section>
    <section class="mobile-view">
    <section class="page-title-area text-white bg_cover"
        style="background-image: url(assets/images/fc-header-img1.jpg);">
        <div class="container">
            <!--======  Page-title-Inner ======-->
            <div class="page-title-inner text-center">
                <h1 class="page-title">Farmers Club </h1>
               
            </div>
        </div>
    </section>
    <div class="gd-breadcrumb">
                    <span class="breadcrumb-entry"><a href="index.html">Home |</a></span>
                    <span class="separator"></span>
                    <span class="breadcrumb-entry active">Farmers Club </span>
                </div>
    </section>
    <!--====== End Page-title-area section ======-->

    <section class="shop-details-section pt-60 pb-30 services-img-round">
        <div class="container">
            <div class="product-details-wrapper">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <h3 class="title text-a" style="font-size:25px;font-weight:700;">Multiplex Farmers Club: Empowering Indian Agriculture</h3>
                        <div class="description-wrapper mt-30">
                            <div class="tab-content wow fadeInUp">
                                <div class="tab-pane fade show active">
                                    <div class="content-box">
                                        <p>At Multiplex, we've launched the Multiplex Farmers Club to unite farmers across India and provide them with valuable resources and knowledge. Our club serves as a platform for farmers to access scientific information on crop management, all from the comfort of their doorstep.
                                        </p>
                                        <p>Empowering Farmers: The Multiplex Farmers Club is dedicated to empowering farmers. We understand that farmers are the backbone of our nation, and their success is crucial for our food security and economic prosperity.</p>
                                        
                                        <h3 class="mb-20 pt-30 text-a">Benefits for Members</h3>
                                        <ul class="check-style-one">
                                            <li><i class="fa fa-check"></i>Priority Service: Members receive priority delivery for their farming requirements, ensuring they get what they need when they need it.</li>
                                            <li><i class="fa fa-check"></i>Expert Guidance: Our experienced executives provide precise technical information, helping farmers make informed decisions.</li>
                                            <li><i class="fa fa-check"></i>On-Field Product Demonstrations: We offer free on-field product demonstrations, allowing members to see our products in action.</li>
                                            <li><i class="fa fa-check"></i>Farmers Kit: Members receive a farmers kit filled with products worth more than the registration fee, providing essential tools for their farming needs.</li>
                                            <li><i class="fa fa-check"></i>Insurance Coverage: We provide Accidental Death insurance coverage of Rs 50,000/-, offering financial security to our members.</li>
                                            <li><i class="fa fa-check"></i>Lucky Draw: Members are eligible to participate in a lucky draw for a chance to win exciting prizes.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <br/> <br/>
                
                <div class="row">
                <div class="col-xl-12 col-lg-12">
                        <div class="container">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                <!--<div class="carousel-item active">-->
                                <!--  <img class="d-block w-100" src="assets/images/fc1.jpg" alt="First slide">-->
                                <!--</div>-->
                                <div class="carousel-item active">
                                  <img class="d-block w-100" src="assets/images/fc2.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="assets/images/fc3.jpg" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="assets/images/fc4.jpg" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="assets/images/fc5.jpg" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="assets/images/fc6.jpg" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="assets/images/fc7.jpg" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="assets/images/fc8.jpg" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="assets/images/fc9.jpg" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="assets/images/fc10.jpg" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="assets/images/fc11.jpg" alt="Third slide">
                                </div>
                              </div>
                              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>
    
    <section class="shop-details-section pb-30">
    <div class="container">
        <div class="product-details-wrapper">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <p>For more information and to join Multiplex Farmers Club, please contact your nearest <a href="#" style="color:#1a9f53;text-decoration:underline;">branch</a>. Together, we can empower Indian agriculture and promote prosperity among our farming community. Join us in building a brighter future for our farmers and our nation.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Shop Details Section ======-->
    
    
    
    
    <!--====== End Shop Details Section ======-->

    <!--<section class="cta-section">-->
    <!--    <div class="container">-->
            <!--====== CTA Wrapper ======-->
    <!--        <div class="cta-wrapper pt-60 border-top-1">-->
    <!--            <div class="row align-items-center">-->
    <!--                <div class="col-lg-9">-->
                        <!--====== CTA Content Box ======-->
    <!--                    <div class="cta-content-box d-flex align-items-center mb-40 wow fadeInLeft">-->
    <!--                        <img src="assets/images/motto.png" class="circle-logo" alt="Circle Logo">-->
    <!--                        <h2>Contact us for more information.</h2>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col-lg-3">-->
                        <!--====== CTA Button ======-->
    <!--                    <div class="cta-button float-lg-right mb-40 wow fadeInRight">-->
    <!--                        <a href="#" data-toggle="modal" data-target="#sidebar-modal"-->
    <!--                            class="main-btn golden-btn">Enquire-->
    <!--                            Now</a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!--====== End CTA Section ======-->

    <br />
@endsection
@section('scripts')
    @parent
    <script type="text/javascript"></script>
@endsection
