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
            background: #2a7d2e;
            text-align: center;
            font-size: 15px !important;
            color: #e3e3e3 !important;
            font-weight: 500;
            border-top: 1px dashed #fff;
            border-bottom: 1px dashed #fff;
            font-family: "Roboto", sans-serif;
        }

        .mobile-view .bg_cover {
            background-size: 100% 100% !important;

        }
    }
</style>

<!--====== Start Page-title-area section ======-->
<section class="page-title-area text-white bg_cover desktop-view" style="background-image: url(assets/images/water-lab-header-img.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Water Analysis Laboratory </h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry"><a href="{{ route('quality-testing') }}">Quality Testing </a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Water Analysis Laboratory </span>
            </div>
        </div>
    </div>
</section>
<section class="mobile-view"><section class="page-title-area text-white bg_cover" style="background-image: url(assets/images/water-lab-header-img.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Water Analysis Laboratory </h1>
          
        </div>
    </div>
</section>
<div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home |</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry"><a href="{{ route('quality-testing') }}">Quality Testing |</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Water Analysis Laboratory </span>
            </div></section>
<!--====== End Page-title-area section ======-->

<!--====== Start Project-Details section ======-->
<section class="project-details-section pt-50 ptbmob-30 services-img-round">
    <div class="container">
        <div class="project-details-wrapper pb-30">
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-info mb-30 wow fadeInLeft">
                        <!--<h3 class="title">Water Analysis Laboratory</h3>-->
                        <p>The primary objectives of chemical water analysis in the Multiplex NABL Accredited laboratory are to comprehensively assess the chemical composition of water samples, ensuring their compliance with relevant quality standards and regulatory requirements. This analysis serves various purposes, including evaluating water safety, suitability for specific uses, and environmental impact assessment.</p>
                        <!--{{-- <ul class="check-style-one mb-60">-->
                        <!--    <li><i class="fa fa-check"></i>We’re Experience Gardening</li>-->
                        <!--    <li><i class="fa fa-check"></i>Awards Winning & Professional Team Member</li>-->
                        <!--</ul> --}}-->
                    </div>
                </div>
                <!--<div class="col-lg-5">-->
                <!--    <img src="assets/images/water-lab1.jpg" alt="Project Image">-->
                <!--</div>-->
            </div>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="block-image wow fadeInDown">
                        <img src="assets/images/water-lab1.jpg" alt="Project Image">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block-image wow fadeInDown">
                        <img src="assets/images/water-lab2.jpg" alt="Project Image">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block-image wow fadeInDown">
                        <img src="assets/images/water-lab3.jpg" alt="Project Image">
                    </div>
                </div>
            </div>
            <!--{{-- <h3>Sub Heading Here</h3> --}}-->
            <p>Key parameters for chemical water analysis encompasses an array of indicators, such as pH, which measures the acidity or alkalinity of water, total dissolved solids (TDS), which quantifies the concentration of dissolved substances, and turbidity, indicating water clarity. Additionally, the analysis includes the assessment of ions and chemical contaminants, such as heavy metals (e.g., lead, arsenic), nutrients (e.g., nitrate, phosphate), and various organic compounds (e.g., pesticides, volatile organic compounds). The presence and concentration of these substances are critical in determining water quality, whether for drinking, industrial processes, agricultural irrigation, or environmental preservation. By systematically examining these parameters, the laboratory aims to provide comprehensive data that supports informed decision-making and ensures the safety and sustainability of water resources.</p>
            <!--{{-- <div class="row justify-content-center">-->
            <!--    <div class="col-lg-4 col-md-6 col-sm-12">-->
            <!--        <div class="block-image wow fadeInDown">-->
            <!--            <img src="assets/images/gl-3.jpg" alt="Project Image">-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="col-lg-4 col-md-6 col-sm-12">-->
            <!--        <div class="block-image wow fadeInUp">-->
            <!--            <img src="assets/images/gl-3.jpg" alt="Project Image">-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="col-lg-4 col-md-6 col-sm-12">-->
            <!--        <div class="block-image wow fadeInDown">-->
            <!--            <img src="assets/images/gl-3.jpg" alt="Project Image">-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div> --}}-->
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
            </div>
        </div>
    </div>
</section>

<br />

@endsection
@section('scripts')
@parent
<script type="text/javascript">
 function validateDomainDrone() {
        var emailInput1 = document.getElementById('emailField1');
        var emailValue = emailInput1.value;

        // Simplified regular expression for email validation
        var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(com|in|org|net|gov|edu|co)$/;

        if (!emailRegex.test(emailValue)) {
            emailInput1.setCustomValidity("Please enter a valid email address.");
        } else {
            emailInput1.setCustomValidity('');
        }
    }
</script>
@endsection
