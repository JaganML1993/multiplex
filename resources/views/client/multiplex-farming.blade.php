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
            <h1 class="page-title">Multiplex Farming  </h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry"><a href="{{ route('group-of-companies') }}">Group of Companies </a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Multiplex Farming  </span>
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
            <h1 class="page-title">Multiplex Farming  </h1>
           
        </div>
    </div>
</section>
<div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home | </a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry"><a href="{{ route('group-of-companies') }}">Group of Companies |</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Multiplex Farming  </span>
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
                            <h2>Multiplex Farming - Collaborative Agriculture - Transforming Barren Lands into Productive Green Fields
                            </h2>
                        </div>
                        <div class="description-wrapper mt-30">
                            <div class="tab-content wow fadeInUp">
                                <div class="tab-pane fade show active">
                                    <div class="content-box">
                                       <p>MULTIPLEX proudly presents "Collaborative Agriculture" for passionate agriculturists. Our mission is to partner in the development and transformation of barren and semi-cultivated land into thriving, green, and productive agricultural landscapes.
                                        </p>
                                        <p>With over four decades of experience in advocating cultivation practices across diverse crops and various agro-climatic conditions, Multiplex has managed vast expanses of land across the country and beyond its borders. Drawing upon our wealth of experience, expertise, and practical skills, we are now eager to collaborate with you to realize your vision of green and productive land.
                                        </p>

                                        <h3 class="mb-10 mt-30">Need for a Holistic Approach</h3>
                                        <p>In today's world, the need for a holistic approach to agricultural productivity has become increasingly evident. To address this need, we extend our support to landowners, whether they possess as little as 10 acres or vast expanses of land, be it individuals or companies.
                                        </p>
                                    
                                        <p>At Multiplex Group, we aspire to become your "Total Solution Provider" for improving soil health, enhancing crop productivity, and elevating your quality of life. Our integrated approach, honed over decades of research and development, is characterized by unparalleled quality and innovation. We are committed to meeting your expectations and fostering a relationship based on trust, transparency, and mutual benefits.
                                        </p>

                                        <h3  class="mb-10 mt-30">The Way Forward</h3>

                                        <p>Are you a landowner with dreams of making your land green and productive? If so, consider Multiplex Farming as your partner on this transformative journey. Together, we can make your dreams a reality.</p>

                                        <h3  class="mb-10 mt-30">Let's Work Together!</h3>

                                        <p>Our collaboration encompasses every facet of agricultural activity, guiding you through each step of the process. From soil testing, field layout, and land preparation to crop selection, seedling choices, input recommendations, weed and nutrient management, pest and disease control, harvesting, post-harvest techniques, and even finding markets for your crops – we are here to support and empower you in your agricultural endeavours.</p>

                                        
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
