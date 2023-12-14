@extends('client.header')
@section('content')
@include('client.service-enquiry')


<style>
    .project-details-wrapper p {
    margin-bottom: 15px;
}

     @media (max-width:567px){
.menu-button-1{
   margin-top:-1rem !important;
}}
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
    style="background-image: url(assets/images/drone-header-img1.jpg);">
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
<section class="page-title-area text-white bg_cover"
    style="background-image: url(assets/images/drone-header-img1.jpg);">
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
<section class="project-details-section pt-60 services-img-round">
    <div class="container">
        <div class="project-details-wrapper pb-30">
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-info mb-30 wow fadeInLeft">
                        <h3 class="title">Drone Spray Services</h3>
                        <!--<h3 class="mb-10"></h3>-->
                        <!--<p>Agricultural spraying drone takes 8 to 10 min to spray inputs for an acre. Ten liters of agricultural input will be sprayed for field crops and Twenty liters will be sprayed for plantation crops. By taking spray through drones, farmers can save agricultural input consumption by 30 to 35% and water consumption by 90 to 95%.</p>-->
                        <!--<p>We have experience in spraying over 20,000 acres on 56 crops in 8 states.</p>-->
                        <p>Multiplex Drone Services offer a cutting-edge range of over 8 agricultural drone models meticulously crafted with high-strength carbon fibers and aerospace-grade aluminum. 
                        These drones, equipped with advanced flight controllers and GPS modules, efficiently cover one acre in 8 to 10 minutes, using 10 liters of inputs for field crops and 20 liters 
                        for plantation crops. Harnessing drone technology, farmers benefit from significant reductions: 30-35% in input consumption, 90-95% in water usage, and a remarkable 90% in time
                        savings. Operator safety sees a substantial boost to 99% compared to traditional methods. These versatile drones handle crops from cauliflower to towering Areca trees, showcasing 
                        their effectiveness over 20,000 acres across 8 Indian states. Multiplex Drone Services delivers a complete "Total Solution" for agricultural spraying, ensuring heightened efficiency 
                        and productivity in farming.</p>
                        <!--<ul class="check-style-one mb-60">-->
                        <!--    <li><i class="fa fa-check"></i>We’re Experience Gardening</li>-->
                        <!--    <li><i class="fa fa-check"></i>Awards Winning & Professional Team Member</li>-->
                        <!--</ul>-->
                    </div>
                </div>
                <!--<div class="col-lg-5">-->
                <!--    <img src="assets/images/gl-3.jpg" alt="Project Image">-->
                <!--</div>-->
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
                   <a href="{{ route('contact') }}" data-toggle="modal"
                                data-target="#service-modal" class="main-btn primary-btn menu-button-1">Enquire Now</a>
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

</script>
@endsection
