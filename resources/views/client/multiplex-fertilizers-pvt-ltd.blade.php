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
    style="background-image: url(assets/images/goc-header-img1.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Multiplex Fertilizers Pvt. Ltd. </h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry"><a href="{{ route('group-of-companies') }}">Group of Companies </a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Multiplex Fertilizers Pvt. Ltd. </span>
            </div>
        </div>
    </div>
</section>
<section class="mobile-view">
<section class="page-title-area text-white bg_cover"
    style="background-image: url(assets/images/goc-header-img1.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Multiplex Fertilizers Pvt. Ltd. </h1>
           
        </div>
    </div>
</section>
<div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home | </a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry"><a href="{{ route('group-of-companies') }}">Group of Companies |</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Multiplex Fertilizers Pvt. Ltd. </span>
            </div>
</section>
<!--====== End Page-title-area section ======-->

<section class="shop-details-section pt-60 pb-30 services-img-round">
        <div class="container">
            <div class="product-details-wrapper">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <!--====== Section-title ======-->
                        <div class="section-title mb-25">
                            <h2>Multiplex Fertilizers Pvt. Ltd. - Commitment to Quality Seeds for Sustainable Agriculture</h2>
                        </div>
                        <div class="description-wrapper mt-30">
                            <div class="tab-content wow fadeInUp">
                                <div class="tab-pane fade show active">
                                    <div class="content-box">
                                        <p>Seeds are the fundamental cornerstone of agriculture, serving as both input and output in the farming process. The agricultural sector's success is deeply intertwined with the availability of high-quality seeds, as they profoundly influence crop production. The quality of seeds not only dictates the performance of other inputs but also significantly contributes to overall crop productivity. Many farmers continue to rely on their own seeds, often unaware that using seeds from consecutive generations can lead to reduced viability, vigor, altered genetic traits, and heightened susceptibility to pests and diseases, ultimately resulting in diminished crop yields.</p>
                                        <p>To address this critical issue, Multiplex Fertilizers Private Limited, a sister concern company of the Multiplex Group of Companies and proudly accredited with ISO 9001:2015 certification, has embarked on a mission to produce superior-quality seeds tailored for various agro-climatic zones. These seeds are engineered to exhibit high tolerance to both biotic and abiotic stresses, ensuring robust and sustainable crop production.</p>
                                        
                                        <h3  class="mb-10 mt-30">Key Achievements</h3>
                                        <ul class="check-style-one mt-30 mb-30">
                                            <li><i class="fa fa-check"></i>ISO 9001:2015 Certification: Multiplex Fertilizers Private Limited's commitment to quality is underscored by its ISO 9001:2015 certification, signifying adherence to stringent international standards in seed production.</li>
                                            <li><i class="fa fa-check"></i>Zone-Specific Seeds: Our seeds are meticulously designed to thrive in specific agro-climatic zones, maximizing their adaptability and performance in diverse farming environments.</li>
                                            <li><i class="fa fa-check"></i>Biotic and Abiotic Stress Tolerance: Through rigorous research and development, we've cultivated seeds that exhibit remarkable resilience against both biotic factors like pests and diseases and abiotic factors such as environmental stressors.</li>
                                            <li><i class="fa fa-check"></i>Sustainability Focus: Our dedication to producing high-quality seeds contributes not only to better crop yields but also to sustainable agriculture practices, ensuring a greener and more productive future.</li>
                                        </ul>
                                        <p>At Multiplex Fertilizers Private Limited, we are committed to providing farmers with top-tier seeds that enhance crop quality and yield while promoting sustainability in agriculture. Our mission is to empower farmers with the best resources for a thriving and resilient agricultural sector.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
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
