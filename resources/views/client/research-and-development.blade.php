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
            background: #2a7d2e;
            text-align: center;
            font-size: 15px !important;
            color: #e3e3e3 !important;
            font-weight: 500;
            border-top: 1px dashed #fff;
            border-bottom: 1px dashed #fff;
            font-family: "Roboto", sans-serif;
        }

        .mobile-view .bg_cover {
            background-size: 100% 100% !important;

        }
        
        .sub-head-inner h3 {
            font-size:17px;
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
    style="background-image: url(assets/images/r_and_d_1140x406_new_0203.jpg);">
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
    style="background-image: url(assets/images/r_and_d_1140x406_new_0203.jpg);">
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
<section class="project-details-section pt-50 ptbmob-30 services-img-round">
    <div class="container">
        <div class="project-details-wrapper pb-30"> 
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-info mb-30 wow fadeInLeft">
                        <h3 class="title">Multiplex Research and Development - Advancing Sustainable Agriculture</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center sub-head-inner">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h3 class="mb-10">Objectives</h3>
                    <p>At Multiplex, our dedication to fostering sustainable agriculture has led to the establishment of a cutting-edge Research and Development Unit. 
                    Officially inaugurated on June 22, 2023, in Peenya, Bangalore, this facility is designed to address the growing concerns of modern agriculture. 
                    We define our R&D activities as an important means for achieving the future growth of Bio-Agri by developing relevant products in the market.
                    Our primary objectives to design and develop some technology/product to address the issues, which includes:  </p>
                    <ul class="check-style-one mb-60">
                            <li><i class="fa-brands fa-pagelines"></i>Strengthening bio-intensive agriculture to minimize chemical utilization.</li>
                            <li><i class="fa-brands fa-pagelines"></i>Improving crop tolerance towards changing climate.</li>
                            <li><i class="fa-brands fa-pagelines"></i>Minimizing post-harvest losses.</li>
                    </ul>
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
            
            <div class="row justify-content-center sub-head-inner">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h3 class="mb-10">Facilities</h3>
                    <p>Our state-of-the-art R&D unit is equipped with advanced facilities and laboratories, ensuring comprehensive and innovative research capabilities towards eco-friendly technology for sustainable agriculture. These facilities include: </p>
                    <ul class="check-style-one mb-60">
                            <li><i class="fa-brands fa-pagelines"></i><strong>Microbiology Lab:</strong> Conducting in-depth basic and applied research to explore the potential of microbial world in agriculture. biological aspects. </li>
                            <li><i class="fa-brands fa-pagelines"></i><strong>Entomology Lab:</strong> Focusing on the importance of insect related issues in crop production and managing them by developing environment friendly technology.  </li>
                            <li><i class="fa-brands fa-pagelines"></i><strong>Biochemistry Lab:</strong> Exploring the potential of safer chemical molecules for agriculture. </li>
                            <li><i class="fa-brands fa-pagelines"></i><strong>Instrumentation Lab:</strong> Utilized for advanced innovative research. </li>
                            <li><i class="fa-brands fa-pagelines"></i><strong>Formulation Lab:</strong> Developing innovative agricultural formulations. </li>
                            <li><i class="fa-brands fa-pagelines"></i><strong>Chemical Synthesis Lab:</strong> Exploring the potential of synthetic chemistry in designing and developing safer chemical alternatives and integrating them with biomolecules. </li>
                            <li><i class="fa-brands fa-pagelines"></i><strong>Analytical Lab:</strong> Providing precise analytical capabilities to deliver quality product. </li>
                            <li><i class="fa-brands fa-pagelines"></i><strong>Quality Control Lab:</strong> Ensuring the highest product standards. </li>

                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h3  class="mb-10">Key Achievements</h3>
                    <p>
                       Since the initiation of R&D activities in 2000 with the establishment of "Multiplex Bio-tech Private Limited" in Bangalore, we have achieved significant milestones. Our key achievements include: 
                    </p>
                    <ul class="check-style-one mb-60">
                            <li><i class="fa-brands fa-pagelines"></i>Development of commercially viable bio-based products, dominating both Indian and overseas markets. </li>
                            <li><i class="fa-brands fa-pagelines"></i>Ongoing efforts in climate-smart agriculture research to ensure food safety and security. </li>
                            <li><i class="fa-brands fa-pagelines"></i>Numerous conceptual projects in progress, with several poised for commercial status. </li>
                            <li><i class="fa-brands fa-pagelines"></i>Rigorous field trials conducted in diverse agro-climatic conditions to validate product efficacy. </li>
                    </ul>

                    </div>
            </div>
            
            <div class="row justify-content-center sub-head-inner">

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h3  class="mb-10">Future Goals</h3>
                    <p>Our commitment to research and development remains unwavering. We aim to: </p>
                    <ul class="check-style-one mb-30">
                        <li><i class="fa-brands fa-pagelines"></i>Continue our R&D efforts to introduce more and more innovative products.</li>
                        <li><i class="fa-brands fa-pagelines"></i>Lead the way in sustainable agriculture and contribute to addressing the evolving challenges of the agricultural sector. </li>
                    </ul>
                    </div>
            </div>
        
            <p>At Multiplex, we are dedicated to pioneering advancements that enhance the sustainability and productivity of agriculture while ensuring food safety and security for the future.</p>
        </div>
    </div>
</section>
<!--====== End Project-Details section ======-->


@endsection
@section('scripts')
@parent
<script type="text/javascript">

</script>
@endsection
