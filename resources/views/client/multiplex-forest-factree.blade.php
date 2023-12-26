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
                <h1 class="page-title">Multiplex Forest Factree </h1>
                <div class="gd-breadcrumb">
                    <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home</a></span>
                    <span class="separator"></span>
                    <span class="breadcrumb-entry"><a href="{{ route('group-of-companies') }}">Group of Companies </a></span>
                    <span class="separator"></span>
                    <span class="breadcrumb-entry active">Multiplex Forest Factree </span>
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
                    <h1 class="page-title">Multiplex Forest Factree </h1>

                </div>
            </div>
        </section>
        <div class="gd-breadcrumb">
            <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home | </a></span>
            <span class="separator"></span>
            <span class="breadcrumb-entry"><a href="{{ route('group-of-companies') }}">Group of Companies |</a></span>
            <span class="separator"></span>
            <span class="breadcrumb-entry active">Multiplex Forest Factree </span>
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
                            <h2>Multiplex Forest Factree - Advancing Quality Planting Material and Sustainable Agroforestry
                            </h2>
                        </div>
                        <div class="description-wrapper mt-30">
                            <div class="tab-content wow fadeInUp">
                                <div class="tab-pane fade show active">
                                    <div class="content-box">
                                        <h3 class="mb-10 mt-30">Objectives</h3>
                                        <p>Quality Planting Material Production:
                                            Our primary objective is to produce uniform, healthy, and disease-free planting
                                            materials through seeds or vegetative methods. These materials play a crucial
                                            role in enhancing productivity for various stakeholders.
                                        </p>
                                        <p>Supporting Afforestation and Agroforestry:
                                            We aim to address the inadequacy of Quality Planting Material (QPM) recognized
                                            by the National Forest Policy. By providing high-quality saplings, we contribute
                                            to afforestation, agroforestry, and plantation programs, aligning with national
                                            policies.
                                        </p>
                                        <p>Good Nursery Practices:
                                            We prioritize Good Nursery Practices and Sustainable Agroforestry, ensuring the
                                            responsible management of our nursery operations. Our commitment to sustainable
                                            practices is evident through our collaboration with leading research
                                            institutions.
                                        </p>
                                        <p>Agroforestry Training:
                                            We offer Agroforestry training to farmers, emphasizing the selection of suitable
                                            species based on socio-economic factors and adaptability to specific
                                            Agro-climatic zones and rainfall patterns.
                                        </p>

                                        <h3  class="mb-10 mt-30">Environmental Benefits</h3>

                                        <ul class="check-style-one mt-30 mb-30">
                                            <li><i class="fa fa-check"></i>Conservation: Reduced pressure on natural forests and the conservation of indigenous tree species.</li>
                                            <li><i class="fa fa-check"></i>Nutrient Recycling: Effective recycling of nutrients facilitated by deep-rooted trees.</li>
                                            <li><i class="fa fa-check"></i>Ecological Protection: Enhanced protection of ecological systems through reduced surface run-off, nutrient leaching, and soil erosion.</li>
                                            <li><i class="fa fa-check"></i>Carbon Sequestration: Improved carbon sequestration potential and microclimate, contributing to climate change mitigation.</li>
                                            <li><i class="fa fa-check"></i>Soil Health: Enriched soil nutrients and improved soil structure through the addition and decomposition of litter fall.</li>
                                        </ul>

                                        <h3  class="mb-10 mt-30">Economic Benefits</h3>

                                         <ul class="check-style-one mt-30 mb-30">
                                            <li><i class="fa fa-check"></i>Higher Output: Increased food, fuelwood, fodder, fertilizer, and timber production.</li>
                                            <li><i class="fa fa-check"></i>Risk Mitigation: Mitigation of total crop failure risks often associated with monoculture systems.</li>
                                            <li><i class="fa fa-check"></i>Income Generation: Enhanced farm income through improved and sustained productivity.</li>
                                        </ul>

                                        <h3  class="mb-10 mt-30">Social Benefits</h3>

                                         <ul class="check-style-one mt-30 mb-30">
                                            <li><i class="fa fa-check"></i>Rural Livelihood Improvement: Elevated living standards in rural areas through sustained employment and higher income.</li>
                                            <li><i class="fa fa-check"></i>Nutrition and Health: Improved nutrition and health outcomes due to increased food quality and diversity.</li>
                                            <li><i class="fa fa-check"></i>Community Stabilization: Stabilization of community habitats with permanent sites for farm activities.</li>
                                            <li><i class="fa fa-check"></i>Poverty Alleviation: Poverty reduction through enhanced food security and economic opportunities.</li>
                                        </ul>

                                        <p>In summary, Multiplex Forest Factree is dedicated to promoting sustainable agroforestry practices and providing high-quality planting materials, aligning with national policies, and contributing to environmental, economic, and social well-being.</p>

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
