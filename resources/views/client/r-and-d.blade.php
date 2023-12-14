@extends('client.header')
@section('content')
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
    style="background-image: url(assets/images/r-and-d-header-img.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Research and Development </h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home  </a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Research and Development </span>
            </div>
        </div>
    </div>
</section>
<section class="mobile-view">
<section class="page-title-area text-white bg_cover "
    style="background-image: url(assets/images/r-and-d-header-img.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Research and Development </h1>
           
        </div>
    </div>
</section>
 <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home |</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Research and Development </span>
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
                        <h3 class="title">Multiplex Research and Development: Advancing Sustainable Agriculture</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <!--<h3 class="mb-10">Objectives</h3>-->
                    <p> At Multiplex, our dedication to fostering sustainable agriculture has led to the establishment of a cutting-edge Research and Development Unit. 
                    Officially inaugurated on June 22, 2023, in Peenya, Bangalore, this facility is designed to address the pressing concerns of modern agriculture.</p>
                </div>
            </div>
           
            <div class="row">
                <div class="col-md-6">
                    <div class="block-image wow fadeInDown">
                        <img src="assets/images/r-and-d-img1.jpg" alt="Project Image">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="block-image wow fadeInDown">
                        <img src="assets/images/r-and-d-img2.jpg" alt="Project Image">
                    </div>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h3 class="mb-10">Facilities</h3>
                    <p>Our state-of-the-art R&D unit is equipped with advanced facilities and laboratories, ensuring comprehensive research capabilities. These facilities include:</p>
                    <ul class="check-style-one mb-60">
                            <li><i class="fa fa-check"></i>Microbiology Lab: Conducting research on biological aspects.</li>
                            <li><i class="fa fa-check"></i>Entomology Lab: Focusing on insect-related studies.</li>
                            <li><i class="fa fa-check"></i>Biochemistry Lab: Exploring the chemical aspects of agriculture.</li>
                            <li><i class="fa fa-check"></i>Instrumentation Lab: Utilized for advanced research.</li>
                            <li><i class="fa fa-check"></i>Formulation Lab: Developing innovative agricultural formulations.</li>
                            <li><i class="fa fa-check"></i>Quality Control Lab: Ensuring the highest product standards.</li>
                            <li><i class="fa fa-check"></i>Isolated Microbial Culture Handling Lab: Featuring bio-safety cabinets for microbial studies.</li>
                            <!--<li><i class="fa fa-check"></i>In addition to biology-focused labs, our unit houses.</li>-->
                            <!--<li><i class="fa fa-check"></i>Chemical Synthesis Lab: For chemical research.</li>-->
                            <!--<li><i class="fa fa-check"></i>Analytical Lab: Providing precise analytical capabilities.</li>-->
                            <!--<li><i class="fa fa-check"></i>Quality Control Lab: Ensuring product quality.</li>-->
                            <!--<li><i class="fa fa-check"></i>Fume Hood and Air-Exhaust Facility: Ensuring safe chemical handling.</li>-->
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h3  class="mb-10">Key Achievements</h3>
                    <p>
                       Since the initiation of R&D activities in 2000 with the establishment of "Multiplex Biotech Private Limited" in Bangalore, we have achieved significant milestones. Our key achievements include:
                    </p>
                    <ul class="check-style-one mb-60">
                            <li><i class="fa fa-check"></i>Development of commercially viable bio-based products, dominating both Indian and overseas markets.</li>
                            <li><i class="fa fa-check"></i>Ongoing efforts in climate-smart agriculture research to ensure food safety and security.</li>
                            <li><i class="fa fa-check"></i>Numerous conceptual projects in progress, with several poised for commercial status.</li>
                            <li><i class="fa fa-check"></i>Rigorous field trials conducted in diverse agro-climatic conditions to validate product efficacy.</li>
                    </ul>
                    <!--<hr>-->
                    <!--<h3  class="mb-10">Future Goals</h3>-->
                    <!--<p>Our commitment to research and development remains unwavering. We aim to:</p>-->
                    <!--<ul class="check-style-one mb-60">-->
                    <!--        <li><i class="fa fa-check"></i>Continue our R&D efforts to introduce more innovative products, with a goal of adding products to our portfolio each year.</li>-->
                    <!--        <li><i class="fa fa-check"></i>Lead the way in sustainable agriculture and contribute to addressing the evolving challenges of the agricultural sector.</li>-->
                    <!--</ul>-->
                    </div>
            </div>
            
            <div class="row justify-content-center">

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h3  class="mb-10">Future Goals</h3>
                    <p>Our commitment to research and development remains unwavering. We aim to:</p>
                    <ul class="check-style-one mb-30">
                        <li><i class="fa fa-check"></i>Continue our R&D efforts to introduce more innovative products, with a goal of adding products to our portfolio each year.</li>
                        <li><i class="fa fa-check"></i>Lead the way in sustainable agriculture and contribute to addressing the evolving challenges of the agricultural sector.</li>
                    </ul>
                    </div>
            </div>
        
            <p>At Multiplex, we are dedicated to pioneering advancements that enhance the sustainability and productivity of agriculture while ensuring food safety and security for the future.</p>
        </div>
    </div>
</section>
<!--====== End Project-Details section ======-->

<br />

@endsection
@section('scripts')
@parent
<script type="text/javascript">

</script>
@endsection
