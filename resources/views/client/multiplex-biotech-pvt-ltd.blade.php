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
    
    ul.check-style-one li {
        display: -webkit-box;
        display: -ms-flexbox;
        /* display: flex; */
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        font: 400 15px "Roboto", sans-serif;
}

</style>
<!--====== Start Page-title-area section ======-->
<section class="page-title-area text-white bg_cover desktop-view"
    style="background-image: url(assets/images/goc-header-img1.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Multiplex Bio-Tech Pvt. Ltd. </h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry"><a href="{{ route('group-of-companies') }}">Group of Companies </a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Multiplex Bio-Tech Pvt. Ltd. </span>
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
            <h1 class="page-title">Multiplex Bio-Tech Pvt. Ltd. </h1>
           
        </div>
    </div>
</section>
<div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home | </a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry"><a href="{{ route('group-of-companies') }}">Group of Companies |</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Multiplex Bio-Tech Pvt. Ltd. </span>
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
                            <h2>Multiplex Bio-Tech Pvt. Ltd. - Leading the Way in Agricultural Innovation and Sustainability</h2>
                        </div>
                        <div class="description-wrapper mt-30">
                            <div class="tab-content wow fadeInUp">
                                <div class="tab-pane fade show active">
                                    <div class="content-box">
                                        <p>Multiplex Group has been at the forefront of addressing the evolving needs of agriculture and allied sectors through innovative products and services. With over two decades of field experience, we embarked on a journey in the year 2000 to establish state-of-the-art bio-tech units. </p>
                                        <p>Our commitment to agricultural innovation is bolstered by cutting-edge facilities and technologies, enabling us to conduct groundbreaking research, innovate, manufacture, and supply a wide range of bio-organic products. Our world-class facilities include:</p>

                                        <ul class="check-style-one mb-30">
                                            <li><i class="fa-brands fa-pagelines"></i><strong>Bio-Organic Product Manufacturing:</strong> We are leading manufacturers of bio-organic manures, bio-fertilizers, bio-pesticides, and plant growth promoters.</li>
                                            <li><i class="fa-brands fa-pagelines"></i><strong>Insect Virus-Based Bio-Pesticides:</strong> Scientifically produced to combat pests like cotton bollworm and tobacco leaf-eating caterpillar, replacing chemical pesticides.</li>
                                            <li><i class="fa-brands fa-pagelines"></i><strong>EPN Technology:</strong> Introduced in India in 2010 under the brand name Soldier, successfully controlling soil-borne pests.</li>
                                            <li><i class="fa-brands fa-pagelines"></i><strong>Powder Formulation:</strong> Developed in 2010 to increase shelf life and field efficacy.</li>
                                            <li><i class="fa-brands fa-pagelines"></i><strong>Chirayu Seed Treatment:</strong> Microorganism-based seed dressing formulation proven effective for improving germination and plant growth.</li>
                                            <li><i class="fa-brands fa-pagelines"></i><strong>Consortium-Based Products:</strong> Utilized for controlling plant parasitic nematodes and various soil and foliar diseases.</li>
                                            <li><i class="fa-brands fa-pagelines"></i><strong>Shuddi - A Cleaning, Sanitizer, and Bio-remediation Product:</strong> Certified with Green Seal USA, offering eco-friendly solutions.</li>
                                        </ul>

                                        <p>Fully Automated Bio-tech Unit (September 2021): Equipped with advanced technologies, capable of producing substantial quantities of bio-fertilizers, bio-pesticides, and bio-decomposers with precision and quality. Features commercial walk-in cold rooms for product preservation and automated packing for utmost accuracy.</p>

                                        <p>Our journey has been marked by significant achievements, including:</p>

                                        <ul class="check-style-one mb-30">
                                            <li><i class="fa-brands fa-pagelines"></i>Pioneer in insect virus-based bio-pesticides, such as Multiplex Helimar & Multiplex Spodomar, which replaced chemical pesticides.</li>
                                            <li><i class="fa-brands fa-pagelines"></i>Introduction of EPN Technology as an excellent soil pest controller against various pests.</li>
                                            <li><i class="fa-brands fa-pagelines"></i>Production of Nisarga W. P powder formulation using innovative technology.</li>
                                            <li><i class="fa-brands fa-pagelines"></i>Manufacturing the highly effective seed treatment product, Chirayu, under license agreement.</li>
                                            <li><i class="fa-brands fa-pagelines"></i>Pioneering the use of consortia for products to control nematodes and diseases.</li>
                                            <li><i class="fa-brands fa-pagelines"></i>Development of Shuddi, a certified cleaning, sanitizer, and bio-remediation product.</li>
                                        </ul>

                                        <p>Establishment of a fully automated world-class bio-tech unit in September 2021, setting new standards in quality, preservation, and precision.</p>
                                        <p>At Multiplex Bio-tech Pvt. Ltd., we are committed to pushing the boundaries of agricultural innovation, ensuring a sustainable and productive future for farming communities worldwide. Our state-of-the-art facilities and groundbreaking research continue to shape the future of agriculture.</p>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="shop-details-section pt-30 pb-30 services-img-round bg-dark-infra">
        <div class="container">
            <div class="product-details-wrapper">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <!--====== Section-title ======-->
                        <div class="section-title mb-25">
                            <h2>Pheromones - Pioneering Sustainable Pest Management Solutions</h2>
                        </div>
                        <div class="description-wrapper mt-30">
                            <div class="tab-content wow fadeInUp">
                                <div class="tab-pane fade show active">
                                    <div class="content-box">
                                        <p>In 2016, Multiplex Group recognized the significance of "Integrated Pest Management" and initiated the development of "Pheromone Traps" as a vital component of this approach. The "GPS Institute Of Agricultural Management" (GPSIOAM) was established under the auspices of the Dr. G.P. Shetty Agri Research and Education Trust, with a dedicated Research and Product Development wing for pheromone traps.</p>
                                        <p>Our journey began with the release of "Multiplex Aakarshan – Pheromone Trap for Fruit Flies" in May 2017, leading to nearly ten pheromone products in the past five years. We continue to research and launch products targeting various pests every year, focusing on environmentally safe solutions to reduce chemical use and promote a healthier planet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="shop-details-section pt-30 pb-30 services-img-round">
        <div class="container">
            <div class="product-details-wrapper">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <!--====== Section-title ======-->
                        <div class="section-title mb-25">
                            <h2>Multiplex Bio-Tech Pvt. Ltd. Laboratory - Precision Testing for Agriculture Advancement</h2>
                        </div>
                        <div class="description-wrapper mt-30">
                            <div class="tab-content wow fadeInUp">
                                <div class="tab-pane fade show active">
                                    <div class="content-box">
                                        <p>Founded in 1991 as a soil and fertilizer testing laboratory, Multiplex Bio-Tech Pvt. Ltd. Laboratory has evolved into an institution dedicated to serving the agricultural community. Accredited by NABL since 2017, we adhere to ISO/IEC 17025/2017 standards, ensuring precision and quality in agricultural testing. Our laboratory offers comprehensive quality testing of soil, water, plants/leaves, organic manure, and fertilizers. Our team of highly qualified professionals manage the laboratory, providing accurate assessments and recommendations to enhance crop productivity. </p>
                                        <p>We specialize in soil analysis, water analysis, plant/leaf analysis, fertilizer analysis, and organic manure analysis. Additionally, our laboratory serves as a study center for GPS-IOAM, offering agricultural management courses, prioritizing an optimal learning experience for students.</p>
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
