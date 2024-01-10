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
            <h1 class="page-title">Multiplex Movers  </h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry"><a href="{{ route('group-of-companies') }}">Group of Companies </a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Multiplex Movers  </span>
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
            <h1 class="page-title">Multiplex Movers  </h1>
           
        </div>
    </div>
</section>
<div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home | </a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry"><a href="{{ route('group-of-companies') }}">Group of Companies |</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Multiplex Movers  </span>
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
                            <h2>Multiplex Movers - Reliable Logistic Solutions for Multiplex</h2>
                        </div>
                        <div class="description-wrapper mt-30">
                            <div class="tab-content wow fadeInUp">
                                <div class="tab-pane fade show active">
                                    <div class="content-box">
                                        <p>Established in 1998, Multiplex Movers has emerged as a cornerstone within the logistics industry, offering dependable and tailored solutions to meet the diverse needs of Multiplex's operations. Operating as an in-house wing under the prestigious Multiplex banner, Multiplex Movers takes pride in delivering streamlined logistics services that are finely tuned to the specific requirements of our business.</p>
                                        <p>At the heart of Multiplex Movers' mission is the commitment to simplify the complexities of logistics, allowing Multiplex to concentrate on its PAN India operations with unwavering focus. By integrating an in-house logistics wing, we have created a seamless and efficient channel that optimizes the movement of goods and resources, contributing to the overall effectiveness and success of our operations.</p>
                                        <p>The wealth of experience amassed since our inception in 1998 serves as a testament to our proficiency in navigating the intricacies of logistics. We understand the dynamic nature of supply chains, and our team is adept at designing solutions that adapt to the ever-evolving demands of the industry.</p>
                                        <p>Reliability is a cornerstone of Multiplex Movers' ethos. Through meticulous planning, strategic execution, and robust quality control measures, we ensure that our products traverse the intricate network of logistics and reach their destinations in a timely manner. Our commitment to reliability is not just a promise; it's a track record built over years of successful operations.</p>
                                        <p>Multiplex Movers stands as a strategic partner, offering more than just logistics services. We are an integral part of Multiplex's journey, contributing to its growth and success by providing logistical support that aligns with the company's overarching goals. Our dedication to efficiency, reliability, and customer satisfaction positions Multiplex Movers as a key player in the logistics landscape, facilitating the smooth flow of goods across the diverse landscape of India.</p>
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
