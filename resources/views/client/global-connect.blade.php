@extends('client.header')
@section('content')
<style>
     @media (max-width:567px){
.skill-img-one{
margin-bottom:20px !important;}}
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
    style="background-image: url(assets/images/global-header-img2.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Global/International Connect </h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="index.html">Home</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Global/International Connect </span>
            </div>
        </div>
    </div>
</section>
<section class="mobile-view ">
<section class="page-title-area text-white bg_cover"
    style="background-image: url(assets/images/global-header-img2.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Global/International Connect </h1>
         
        </div>
    </div>
</section>
<div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="index.html">Home | </a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Global/International Connect </span>
            </div>
</section>
<!--====== End Page-title-area section ======-->

<!--====== Start Skills Section  ======-->
<section class="skills-section pt-60 pb-50">
    <div class="container">
        <div class="row align-items-lg-center">
            <div class="col-xl-12 col-lg-12">
                <!--====== Skill Content Box ======-->
                <div class="skill-content-box mb-35 mr-lg-50 wow fadeInLeft">
                    <!--====== Section-title ======-->
                    <div class="section-title mb-25">
                        <h2>Multiplex Group's Global Footprint in Sustainable Agriculture</h2>
                    </div>
                    <p class="mb-30">The foundation of Multiplex Group has always been rooted in a harmonious synergy with global traders. With an unwavering commitment to advancing the global agenda of sustainable development, Multiplex Founder Dr. G.P. Shetty and Managing Director Mr. Mahesh G. Shetty have tirelessly championed environmental initiatives while expanding the company's reach to international projects. Through its pivotal role in mitigating India's major food crises, the company has made substantial contributions to sustainable farming practices and the overall upliftment of the Indian agriculture industry.
                    </p>

                    <p class="mb-30">Our continuous efforts have significantly strengthened global relations. A prime example of this commitment is the Memorandum of Understanding (MoU) signed between the Republic of Djibouti in Africa and Multiplex Group, leading to a joint venture. </p>
                </div>
            </div>
            <!--<div class="col-xl-6 col-lg-12 rad10">-->
            <!--    <img class="mb-10" src="assets/images/global-img3.jpg" class="skill-img-one" alt="Skill Image">-->
            <!--    <img src="assets/images/global-img4.jpg" class="skill-img-one" alt="Skill Image">-->
            <!--</div>-->
        </div>
        
        <div class="row align-items-lg-center">
            <div class="col-xl-6 col-lg-6 rad10">
                <img src="assets/images/global-img3.jpg" class="skill-img-one" alt="Skill Image">
            </div>
            <div class="col-xl-6 col-lg-6 rad10">
                <img src="assets/images/global-img4.jpg" class="skill-img-one" alt="Skill Image">
            </div>
        </div>
    </div>
</section>
<!--====== End Skills Section  ======-->

<section class="shop-details-section pb-60 services-img-round bg-dark-home">
    <div class="container">
        <div class="product-details-wrapper">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="description-wrapper mt-30">
                        <div class="tab-content wow fadeInUp">
                            <div class="tab-pane fade show active">
                                <div class="content-box">
                                    <p>Under this partnership, Multiplex Group undertook the supervision of a 12,000-acre wheat project located in Ethiopia, Africa. This ambitious project, executed with utmost dedication, was completed successfully and within the stipulated timeframe. It involved responsible and vigilant handling of local farmers, and over a span of five years, the project consistently met and exceeded its expectations.</p>
                                    <p>Another notable international milestone was achieved when we expanded our exports to countries such as the Sultanate of Oman, Sri Lanka, Thailand, Vietnam and Indonesia in the 1990s. This expansion continued into the 2000s, with the addition of Mauritius, Malaysia, Bangladesh, China, Nepal, Muscat, Japan and Egypt to our list of export destinations.</p>
                                    <p>By the mid-2000s, our presence had already extended to Djibouti and Ethiopia, all thanks to the determined aspirations and efforts of our Managing Director, Mr. Mahesh G. Shetty, who also serves as the Honorary Consulate of the Republic of Djibouti.</p>
                                    <p>Furthermore, our trading spectrum encompassed Venezuela, Cyprus, Lebanon, the Maldives, and Kenya, starting from 2011.</p>
                                    <p>Our agricultural products have traversed vital trading countries, genuinely benefiting farmers in these regions. In recognition of our outstanding development initiatives and dedicated research efforts, The Fertilizers Association of India (FAI), New Delhi, honoured us in 2008 with an award for the superior quality "Production, Promotion, and Marketing of Bio-Fertilizers."</p>
                                    <p>Beyond our achievements in the global agricultural trade industry, the Multiplex Group remains committed to serving the international farming sector and providing support to uplift farmers and their families. Our motto, "Multiplex Farmer Happy Farmer," has been our guiding principle from the very beginning, and we continue to work tirelessly to uphold the dignity of farmers worldwide.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-xl-4 col-lg-5"> -->
                <!-- <div class="sidebar-widget-area mt-30"> -->
                <!-- <img src="assets/images/global3.jpg" alt="Banner Image"> -->
                <!-- <br/><br/><br/><br/> -->
                <!-- <img src="assets/images/global2.jpg" alt="Banner Image"> -->
                <!-- </div> -->
                <!-- </div> -->
            </div>
        </div>
    </div>
</section>
<!--====== End Shop Details Section ======-->

<br />

@endsection
@section('scripts')
@parent
<script type="text/javascript">

</script>
@endsection
