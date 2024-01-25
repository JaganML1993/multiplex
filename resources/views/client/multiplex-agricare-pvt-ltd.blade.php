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
            <h1 class="page-title">Multiplex Agricare Pvt. Ltd. </h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry"><a href="{{ route('group-of-companies') }}">Group of Companies </a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Multiplex Agricare Pvt. Ltd. </span>
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
            <h1 class="page-title">Multiplex Agricare Pvt. Ltd. </h1>
           
        </div>
    </div>
</section>
<div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home | </a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry"><a href="{{ route('group-of-companies') }}">Group of Companies |</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Multiplex Agricare Pvt. Ltd. </span>
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
                            <h2>Multiplex Agricare Pvt. Ltd. - Nurturing Crops, Protecting Futures</h2>
                        </div>
                        <div class="description-wrapper mt-30">
                            <div class="tab-content wow fadeInUp">
                                <div class="tab-pane fade show active">
                                    <div class="content-box">
                                        <p>Since its inception in 1997, Multiplex Agricare Pvt. Ltd. has emerged as a stalwart in the pesticide manufacturing industry, dedicated to providing innovative and effective solutions for plant protection. Situated in the thriving industrial estate of Tumkur, our state-of-the-art facility spans 2.5 acres and stands as a testament to our commitment to excellence.</p>
                                        
                                        <h3 class="mb-10 mt-30">Facility</h3>
                                        <p>Our cutting-edge facility, covering 18,000 square feet, is a hub of ingenuity and precision. Meticulously designed to align with the strictest industry standards, it comprises distinct sections for raw material procurement, formulation, packaging, and storage of finished products. Our infrastructure also houses a state-of-the-art testing laboratory, ensuring the quality and efficacy of every product. A well-organized administrative wing complements our operational prowess.</p>
                                    
                                        <h3  class="mb-10 mt-30">Commitment to Quality</h3>

                                        <p>At Multiplex Agricare, we take immense pride in our unwavering commitment to quality. Adhering to the highest standards, we have garnered recognition and acclaim from leading industries. Our dedication has fostered fruitful collaborations, particularly in the production of liquid, dusting, and soluble powder formulations.</p>

                                        <p>Our state-of-the-art infrastructure has received accolades from prominent technocrats in the field of pesticides, positioning us as one of the premier formulating units in India. These recognitions not only validate our commitment to excellence but also inspire us to continually raise the bar in delivering high-quality products.</p>

                                        <p>As we stride confidently into the future, our resolve to benefit farmers and the agricultural sector remains unwavering. We understand the crucial role pesticides play in safeguarding crops and securing the livelihoods of farmers. Multiplex Agricare is dedicated to staying at the forefront of innovation, ensuring that our plant protection solutions contribute to sustainable agriculture practices.</p>
                                        
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
