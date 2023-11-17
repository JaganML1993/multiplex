@extends('client.header')
@section('content')
@include('client.service-enquiry')

<!--====== Start Page-title-area section ======-->
<section class="page-title-area text-white bg_cover"
    style="background-image: url(assets/images/soil-lab-header-img.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Soil Analysis Laboratory </h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="index.html">Home</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Quality Testing </span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Soil Analysis Laboratory </span>
            </div>
        </div>
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
                        <h3 class="mb-20 pt-10">Soil Sampling & Its Importance</h3>
                         <!--<h3 class="mb-10"></h3>-->
                        <p>Soil is important for plant growth and development and helps to increase the food production and productivity of crops. Hence maintainance of soil health is an important task in the field of agriculture because soils are heterogeneous in nature. Soil has to be studied and analyzed for the various Physical, Chemical and biological properties that help to maintain the fertility of the soil. The best method to study the soil is soil sampling and nutrient analysis.</p>
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
            
            <div class="row">
                <div class="col-md-4">
                    <div class="block-image wow fadeInDown">
                        <img src="assets/images/soil-1.jpg" alt="Project Image">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block-image wow fadeInUp">
                        <img src="assets/images/soil-2.jpg" alt="Project Image">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block-image wow fadeInUp">
                        <img src="assets/images/soil-3.jpg" alt="Project Image">
                    </div>
                </div>
            </div>
           <p>A soil test is a process by which elements (phosphorus, potassium, calcium, magnesium, sodium, sulfur, manganese, iron, copper and zinc) are chemically removed from the soil and measured for their "Plant available" content within the sample. The quantity of available nutrients in the sample determines the amount of fertilizer that is recommended. A soil test also measures soil pH, humic matter and exchangeable acidity.</p>
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

</script>
@endsection
