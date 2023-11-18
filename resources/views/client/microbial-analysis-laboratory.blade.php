@extends('client.header')
@section('content')
@include('client.service-enquiry')
<style>
     @media (max-width:567px){
.menu-button-1{
   margin-top:-1rem !important;
}}
</style>
<!--====== Start Page-title-area section ======-->
<section class="page-title-area text-white bg_cover"
    style="background-image: url(assets/images/microbial-lab-header-img.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Microbial Analysis Laboratory </h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="index.html">Home</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Microbial Analysis Laboratory </span>
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
                        <!--<h3 class="title">Microbial Analysis Laboratory</h3>-->
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto
                            beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                            aut odit aut fugit, sed quia consequuntur magni dolorese ratione voluptatem sequi nesciunte
                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
                            sed quia non numquam eius modi tempora incidunt ut labore et dolore </p>
                        <ul class="check-style-one mb-60">
                            <li><i class="fa fa-check"></i>We’re Experience Gardening</li>
                            <li><i class="fa fa-check"></i>Awards Winning & Professional Team Member</li>
                        </ul>
                    </div>
                </div>
                <!--<div class="col-lg-5">-->
                <!--    <img src="assets/images/gl-3.jpg" alt="Project Image">-->
                <!--</div>-->
            </div>
           
            <div class="row">
                <div class="col-md-4">
                    <div class="block-image wow fadeInDown">
                        <img src="assets/images/micro-1.jpg" alt="Project Image">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block-image wow fadeInUp">
                        <img src="assets/images/micro-2.jpg" alt="Project Image">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block-image wow fadeInUp">
                        <img src="assets/images/micro-3.jpg" alt="Project Image">
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
