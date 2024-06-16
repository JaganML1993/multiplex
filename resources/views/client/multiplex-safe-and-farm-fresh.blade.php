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
            background: #2a7d2e;
            text-align: center;
            font-size: 13px !important;
            color: #e3e3e3 !important;
            font-weight: 500;
            border-top: 1px dashed #fff;
            border-bottom: 1px dashed #fff;
            font-family: "Roboto", sans-serif;
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
            <h1 class="page-title">Multiplex Safe & Farm Fresh </h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry"><a href="{{ route('group-of-companies') }}">Group of Companies </a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Multiplex Safe & Farm Fresh </span>
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
            <h1 class="page-title">Multiplex Safe & Farm Fresh </h1>
           
        </div>
    </div>
</section>
<div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home | </a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry"><a href="{{ route('group-of-companies') }}">Group of Companies |</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Multiplex Safe & Farm Fresh </span>
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
                            <h2>Multiplex Safe & Farm Fresh - Nature's Bounty at Your Doorstep</h2>
                        </div>
                        <div class="description-wrapper mt-30">
                            <div class="tab-content wow fadeInUp">
                                <div class="tab-pane fade show active">
                                    <div class="content-box">
                                        <p>Founded in 2016 and situated in the dynamic city of Bengaluru, Multiplex Safe & Farm Fresh is a pioneering initiative committed to narrowing the ever-expanding divide between urban dwellers and unadulterated, nutritious produce. In the midst of increasingly hectic urban lifestyles, the demand for wholesome, chemical-free fruits and vegetables has become more pronounced than ever. Recognizing this essential need, we have embraced the challenge and made it our mission to deliver the freshness of organic farms directly to your doorstep.</p>
                                        <p>The bustling pace of urban life often makes it challenging for individuals to prioritize healthy eating habits, and our venture seeks to address this concern by offering a convenient solution. Our dedication to providing organic and healthy foods is deeply ingrained in our philosophy, with a growing commitment to making such choices an integral part of your daily life.</p>
                                        <p>Multiplex Safe & Farm Fresh stands as a beacon of change, championing the cause of wellness amid the hustle and bustle of urban existence. By sourcing produce directly from organic farms, we ensure that you receive not only the finest quality but also items free from harmful chemicals. Our emphasis on a farm-to-door approach signifies a direct link between you and nature's bounty, fostering a connection that transcends the confines of city life.</p>
                                        <p>Through our efforts, we aim to redefine the way urbanites perceive and access fresh, organic produce. Multiplex Safe & Farm Fresh is not just a provider of goods; it is a lifestyle choice that aligns with the growing consciousness around health and sustainability. Join us on this journey as we cultivate a healthier, more conscious community, one doorstep at a time.</p>
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
