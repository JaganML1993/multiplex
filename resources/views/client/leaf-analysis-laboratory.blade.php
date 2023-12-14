@extends('client.header')
@section('content')
@include('client.service-enquiry')
<style>
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
    style="background-image: url(assets/images/leaf-analysys-header-img.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Leaf Analysis Laboratory </h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry"><a href="{{ route('quality-testing') }}">Quality Testing </a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Leaf Analysis Laboratory </span>
            </div>
        </div>
    </div>
</section>
<section class="mobile-view"><section class="page-title-area text-white bg_cover"
    style="background-image: url(assets/images/leaf-analysys-header-img.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Leaf Analysis Laboratory </h1> 
        </div>
    </div>
</section>
<div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home | </a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry"><a href="{{ route('quality-testing') }}">Quality Testing |</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Leaf Analysis Laboratory </span>
            </div></section>
<!--====== End Page-title-area section ======-->

<!--====== Start Project-Details section ======-->
<section class="project-details-section pt-60 services-img-round">
    <div class="container">
        <div class="project-details-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-info mb-30 wow fadeInLeft">
                        <!--<h3 class="title">Leaf Analysis Laboratory</h3>-->
                        <p>The objective of leaf analysis at the Multiplex NABL Laboratory is to assess the nutrient status of plant leaves and provide essential data for optimizing crop management practices. Our laboratory conducts an in-depth analysis of various chemical parameters in leaf samples, including macronutrients such as nitrogen (N), phosphorus (P), potassium (K), calcium (Ca), magnesium (Mg), and sulphur (S), as well as micronutrients like iron (Fe), manganese (Mn), zinc (Zn), copper (Cu), and boron (B). </p>
                        {{-- <ul class="check-style-one mb-60">
                            <li><i class="fa fa-check"></i>We’re Experience Gardening</li>
                            <li><i class="fa fa-check"></i>Awards Winning & Professional Team Member</li>
                        </ul> --}}
                    </div>
                </div>
                <!--<div class="col-lg-5">-->
                <!--    <img src="assets/images/leaf-lab1.jpg" alt="Project Image">-->
                <!--</div>-->
            </div>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="block-image wow fadeInDown">
                        <img src="assets/images/leaf-lab1.jpg" alt="Project Image">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block-image wow fadeInDown">
                        <img src="assets/images/leaf-lab2.jpg" alt="Project Image">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block-image wow fadeInDown">
                        <img src="assets/images/leaf-lab3.jpg" alt="Project Image">
                    </div>
                </div>
            </div>
            <p>These analyses aim to determine nutrient deficiencies or imbalances, allowing for precise fertilizer recommendations and nutrient management strategies to enhance crop yield, quality, and overall plant health. Our state-of-the-art laboratory and experienced team ensure the accuracy and reliability of these analyses, contributing to sustainable agriculture and improved crop performance.</p>
            {{-- <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="block-image wow fadeInDown">
                        <img src="assets/images/gl-3.jpg" alt="Project Image">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="block-image wow fadeInUp">
                        <img src="assets/images/gl-3.jpg" alt="Project Image">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="block-image wow fadeInDown">
                        <img src="assets/images/gl-3.jpg" alt="Project Image">
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
<!--====== End Project-Details section ======-->

<section class="service-details-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 text-center">
                <div class="menu-button d-xl-block">
                    <a href="{{ route('contact') }}" data-toggle="modal"
                                data-target="#service-modal" class="main-btn primary-btn">Enquire Now</a>
                </div>

                <!-- <div class="menu-button d-xl-block d-none"> -->
                <!-- <a href="contact.html" data-toggle="modal" data-target="#sidebar-modal" class="main-btn primary-btn">Quick Enquiry</a> -->
                <!-- </div> -->
            </div>
        </div>
    </div>
</section>

<br />

@endsection
@section('scripts')
@parent
<script type="text/javascript">

</script>
@endsection
