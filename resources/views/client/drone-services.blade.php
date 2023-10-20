@extends('client.header')
@section('content')

<style>
    .project-details-wrapper p {
    margin-bottom: 15px;
}
</style>

<!--====== Start Page-title-area section ======-->
<section class="page-title-area text-white bg_cover"
    style="background-image: url(assets/images/drone-header-img1.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Drone Services </h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="index.html">Home</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Drone Services </span>
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
                        <h3 class="title">Drone Spray Services</h3>
                        <!--<h3 class="mb-10"></h3>-->
                        <p>Agricultural spraying drone takes 8 to 10 min to spray inputs for an acre. Ten liters of agricultural input will be sprayed for field crops and Twenty liters will be sprayed for plantation crops. By taking spray through drones, farmers can save agricultural input consumption by 30 to 35% and water consumption by 90 to 95%.</p>
                        <p>We have experience in spraying over 20,000 acres on 56 crops in 8 states.</p>
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
                                data-target="#sidebar-modal" class="main-btn primary-btn">Enquire Now</a>
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
