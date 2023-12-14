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
        .pt-100 {
            padding-top: 40px !important;
        }

        .pad-top-150 {
            padding-top: 0px !important;
        }

        .mangmnt-name h2 {
            font-size: 18px;
            text-align: center;
        }

        .sub-title {
            font-size: 18px;
        }

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
    style="background-image: url(assets/images/vaahini-banner1140x406.webp);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Multiplex Vaahini </h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Multiplex Vaahini </span>
            </div>
        </div>
    </div>
</section>
<section class="mobile-view">
<section class="page-title-area text-white bg_cover"
    style="background-image: url(assets/images/vaahini-banner1140x406.webp);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Multiplex Vaahini </h1>
           
        </div>
    </div>
</section>
<div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home | </a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Multiplex Vaahini </span>
            </div>
</section>
<!--====== End Page-title-area section ======-->

<section class="shop-details-section pt-60 pb-60 services-img-round">
    <div class="container">
        <div class="product-details-wrapper">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                     <!--====== Section-title ======-->
                    <div class="section-title mb-25">
                        <h2>Multiplex Vaahini: Cultivating Agriculture Wisdom</h2>
                    </div>
                    <div class="description-wrapper mt-30">
                        <div class="tab-content wow fadeInUp">
                            <div class="tab-pane fade show active">
                                <div class="content-box">
                                    <p>Multiplex Group proudly presents Multiplex Vaahini, a bi-monthly magazine in the Kannada language, dedicated to enriching farmers' knowledge in the fields of Agriculture and Horticulture. Crafted by a team of seasoned experts in the realm of Agriculture and Horticulture, this publication covers a diverse range of topics. From Soil Management and Water Management to Crop Management, Pest Management, and Harvest and Post-Harvest Management, we delve into a plethora of subjects aimed at empowering our farming community.</p>
                                    <p>Multiplex Vaahini wholeheartedly advocates for a holistic approach to sustainable agriculture, aspiring to elevate the prosperity of our dedicated farmers. Each issue features insightful messages from our esteemed founder and visionary leader, Dr. G.P. Shetty.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <h6 style="text-transform:uppercase;margin-top: 28px;" class="text-a">Current Edition</h6>
                    <div class="sidebar-widget-area mt-30">
                        <img src="assets/images/magazine-main-cover.jpg" alt="Banner Image">
                    </div>
                    <div class="hero-button mb-30 mt-15 wow fadeInUp text-center" data-wow-delay=".7s">
                        <a href="#" class="main-btn filled-btn mb-10">Download Magazine </a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <h6 style="text-transform:uppercase;margin-top: 28px;"class="text-a" >Previous Edition</h6>
                    <div class="sidebar-widget-area mt-30">
                        <img src="assets/images/magazine-470x211-01.jpg" style="border:1px solid #00844e26;" alt="Banner Image">
                    </div>
                    <div class="hero-button mb-30 mt-10 wow fadeInUp" data-wow-delay=".7s">
                        <a href="#" class="main-btn filled-btn mb-10">Download </a>
                    </div>
                     <h6 style="text-transform:uppercase;margin-top: 28px;"class="text-a" >October Edition</h6>
                     <div class="sidebar-widget-area mt-30">
                        <img src="assets/images/magazine-470x211-02.jpg"  style="border:1px solid #00844e26;" alt="Banner Image">
                    </div>
                    <div class="hero-button mb-30 mt-10 wow fadeInUp" data-wow-delay=".7s">
                        <a href="#" class="main-btn filled-btn mb-10">Download </a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!--====== End Shop Details Section ======-->

<section class="shop-details-section pt-30 pb-30 services-img-round bg-dark-home">
    <div class="container">
        <div class="product-details-wrapper">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h3 class="mb-10 text-a">Benefits of Multiplex Vaahini Magazine</h3>
                    <p class="mb-15">This bi-monthly agricultural magazine is a testament to Multiplex Group's commitment to extending our reach through meaningful initiatives. Vaahini serves as a beacon of scientific knowledge, offering valuable insights into sustainable farming practices, crop-specific guidelines, and well-researched articles. Farmers across the region rely on our technical journals to adopt cutting-edge crop management techniques.</p>
                    <p class="mb-15">Multiplex Vaahini is your gateway to a wealth of scientific insights into sustainable farming. It's designed to provide unwavering support to farmers throughout the crop cycle, helping them effectively manage pests, diseases, and nutrients to enhance both the quality and quantity of their yields.</p>
                    <p class="mb-15">Furthermore, our magazine dedicates a special section to share updates from the Department of Agriculture, Government of Karnataka. This invaluable resource keeps you abreast of policy changes and the latest trends in agricultural technology, ensuring you remain at the forefront of the farming industry.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Shop Details Section ======-->



<br />

@endsection
@section('scripts')
@parent
<script type="text/javascript">

</script>
@endsection
