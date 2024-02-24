@extends('client.header')
@section('content')
@include('client.service-enquiry')


<style>
    .project-details-wrapper p {
        margin-bottom: 15px;
    }

    @media (max-width:567px) {
        .menu-button-1 {
            margin-top: -1rem !important;
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
        
        .services-title-style h3 {
            font-size:18px;

    }
</style>

<!--====== Start Page-title-area section ======-->
<section class="page-title-area text-white bg_cover desktop-view" style="background-image: url(assets/images/drone-header-img1.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Drone Services </h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Drone Services </span>
            </div>
        </div>
    </div>
</section>
<section class="mobile-view">
    <section class="page-title-area text-white bg_cover" style="background-image: url(assets/images/drone-header-img1.jpg);">
        <div class="container">
            <!--======  Page-title-Inner ======-->
            <div class="page-title-inner text-center">
                <h1 class="page-title">Drone Services </h1>

            </div>
        </div>
    </section>
    <div class="gd-breadcrumb">
        <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home | </a></span>
        <span class="separator"></span>
        <span class="breadcrumb-entry active">Drone Services </span>
    </div>
</section>
<!--====== End Page-title-area section ======-->

<!--====== Start Project-Details section ======-->
<section class="project-details-section pt-50 ptbmob-30 services-title-style services-img-round">
    <div class="container">
        <div class="project-details-wrapper pb-30">
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-info mb-30 wow fadeInLeft">
                        <h3 class="mb-20 pt-10">Drone Spray Services</h3>

                        <p>Multiplex Drone Services offer a cutting-edge range of over 8 agricultural drone models meticulously crafted with high-strength carbon fibers and aerospace-grade aluminum.
                            These drones, equipped with advanced flight controllers and GPS modules, efficiently cover one acre in 8 to 10 minutes, using 10 liters of inputs for field crops and 20 liters
                            for plantation crops. Harnessing drone technology, farmers benefit from significant reductions: 30-35% in input consumption, 90-95% in water usage, and a remarkable 90% in time
                            savings. Operator safety sees a substantial boost to 99% compared to traditional methods. These versatile drones handle crops from cauliflower to towering Areca trees, showcasing
                            their effectiveness over 20,000 acres across 8 Indian states. Multiplex Drone Services delivers a complete "Total Solution" for agricultural spraying, ensuring heightened efficiency
                            and productivity in farming.</p>

                    </div>
                </div>

            </div>
            <!--<hr />-->
            <div class="row">
                <div class="col-md-4">
                    <div class="block-image wow fadeInDown">
                        <img src="assets/images/drone_new1.jpg" alt="Project Image">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block-image wow fadeInUp">
                        <img src="assets/images/drone_new2.jpg" alt="Project Image">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block-image wow fadeInUp">
                        <img src="assets/images/drone_new3.jpg" alt="Project Image">
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
</section>
<!--====== End Project-Details section ======-->

<section class="service-details-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 text-center">
                <div class="menu-button d-xl-block">
                    <a href="{{ route('contact') }}" data-toggle="modal" data-target="#service-modal" class="main-btn primary-btn menu-button-1">Enquire Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<br />

@endsection
@section('scripts')
@parent
<script>
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