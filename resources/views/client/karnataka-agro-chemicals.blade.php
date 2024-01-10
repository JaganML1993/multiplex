@extends('client.header')
@section('content')
    <style>
        @media (max-width:567px) {

            .text-a {
                font-size: 17px !important;
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
                <h1 class="page-title">Karnataka Agro Chemicals </h1>
                <div class="gd-breadcrumb">
                    <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home</a></span>
                    <span class="separator"></span>
                    <span class="breadcrumb-entry"><a href="{{ route('group-of-companies') }}">Group of Companies </a></span>
                    <span class="separator"></span>
                    <span class="breadcrumb-entry active">Karnataka Agro Chemicals </span>
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
                    <h1 class="page-title">Karnataka Agro Chemicals </h1>

                </div>
            </div>
        </section>
        <div class="gd-breadcrumb">
            <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home | </a></span>
            <span class="separator"></span>
            <span class="breadcrumb-entry"><a href="{{ route('group-of-companies') }}">Group of Companies |</a></span>
            <span class="separator"></span>
            <span class="breadcrumb-entry active">Karnataka Agro Chemicals </span>
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
                            <h2>Karnataka Agro Chemicals - Pioneering Quality Agriculture Solutions</h2>
                        </div>
                        <div class="description-wrapper mt-30">
                            <div class="tab-content wow fadeInUp">
                                <div class="tab-pane fade show active">
                                    <div class="content-box">
                                        <p>Our primary mission is to deliver exceptional products that adhere to the
                                            nutrient grades and specifications prescribed by local authorities. We provide
                                            the farming community with high-quality agricultural inputs that enhance crop
                                            nutrition and plant protection.</p>
                                        <p>With over 50 years of experience, Multiplex has become a household brand for
                                            farmers across India, leading the way in sustainable farming technologies and
                                            comprehensive agricultural solutions. Our team of dedicated scientists
                                            continually explores and researches innovative technologies for crop nutrition
                                            and plant protection.</p>
                                        <p>Our manufacturing facility is equipped with state-of-the-art, cutting-edge
                                            technology equipment designed exclusively to produce micronutrients, major
                                            nutrients, secondary nutrients, plant bio-activators, adjuvants, and more. We
                                            offer these products in liquid, granular, and powder forms, ensuring versatility
                                            and effectiveness in meeting diverse agricultural needs.</p>
                                        <p>Karnataka Agro Chemicals (KAC), the parent organization of the Multiplex Group,
                                            has been serving farmers in India and overseas since its inception in 1974.
                                            Under the brand name Multiplex, </p>

                                        <ul class="check-style-one mb-30">
                                            <li><i class="fa fa-check"></i>We manufacture and export a wide range of products, including micro-nutrients, bio-stimulants, and bio-activators. </li>
                                            <li><i class="fa fa-check"></i>Our commitment to quality has driven us to export our products to more than 17 countries, including Japan, Korea, Ethiopia, and Djibouti. </li>
                                        </ul>

                                        <p>We are passionate about innovation and regularly introduce concept products that cater to various sectors, from agriculture and horticulture to animal husbandry and FMCG (Cleaning & Disinfection). Presently, we are fully engaged in developing and manufacturing organic products to benefit farming communities further.</p>

                                        <p>Karnataka Agro Chemicals’ legacy is built on a foundation of excellence, innovation, and a deep commitment to agriculture. Our journey continues as we strive to provide top-quality solutions that enhance both the quantity and quality of farm produce while promoting sustainable and responsible farming practices.</p>

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
    <script type="text/javascript"></script>
@endsection
