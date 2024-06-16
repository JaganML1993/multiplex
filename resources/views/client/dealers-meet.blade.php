@extends('client.header')
@section('content')
<style>


     @media (max-width:567px){

         .block-image{
            margin-bottom:1rem !important;
         }
     }

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
<section class="page-title-area text-white bg_cover desktop-view "
    style="background-image: url(assets/images/dealers-meet-header-img4.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Dealers Meet </h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Dealers Meet</span>
            </div>
        </div>
    </div>
</section>
<section class="mobile-view">
<section class="page-title-area text-white bg_cover"
    style="background-image: url(assets/images/dealers-meet-header-img4.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Dealers Meet </h1>
           
        </div>
    </div>
</section>
<div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home | </a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Dealers Meet</span>
            </div>
</section>
<!--====== End Page-title-area section ======-->

<section class="shop-details-section pt-50 ptbmob-30 services-img-round">
    <div class="container">
        <div class="product-details-wrapper">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                     <!--====== Section-title ======-->
                    <div class="section-title mb-25">
                        <h2>Multiplex Dealers Meet: Elevating Agricultures</h2>
                    </div>
                    <div class="description-wrapper mt-30">
                        <div class="tab-content wow fadeInUp">
                            <div class="tab-pane fade show active">
                                <div class="content-box">
                                    <p>Dealers meetings in the Multiplex Group serve as vital platforms for various stakeholders, primarily dealers, manufacturers, and farmers, to come together and discuss, collaborate, and strategize. These meetings are essential for several reasons, and their objectives include:</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="description-wrapper mt-30">
                        <div class="tab-content wow fadeInUp">
                            <div class="tab-pane fade show active">
                                <div class="content-box">
                                    <ul class="check-style-one">
<<<<<<< HEAD
                                        <li><i class="fa-brands fa-pagelines"></i><b>Product Knowledge Dissemination:</b> Dealers meets are crucial for educating dealers about the latest agricultural products, technologies, and innovations. Manufacturers can provide in-depth knowledge about their offerings, including specifications, benefits, and applications. This helps dealers become well-informed about the products they sell, enabling them to answer farmers' questions and provide effective recommendations.</li>
                                        
                                        <li><i class="fa-brands fa-pagelines"></i><b>Market Insights:</b> These meetings offer an opportunity to share market insights, trends, and forecasts. Manufacturers can provide valuable data and analysis about crop demand, pricing, and market dynamics. This information empowers dealers to make informed decisions about their inventory and sales strategies.</li>
                                        
                                        <li><i class="fa-brands fa-pagelines"></i><b>Feedback Exchange:</b> Manufacturers can gather feedback from dealers about their products, pricing, marketing strategies, and customer experiences. This feedback loop helps manufacturers make necessary improvements and tailor their offerings to better meet farmers' needs.</li>
                                        
                                        <li><i class="fa-brands fa-pagelines"></i><b>Training and Skill Enhancement:</b> These meetings often include training sessions to enhance dealers product knowledge and selling skills. Dealers can learn about the technical aspects of products, effective sales techniques, and customer relationship management.</li>
                                        
                                        <li><i class="fa-brands fa-pagelines"></i><b>Promotion and Marketing:</b> Manufacturers can use dealers meets as platforms to launch new products, promote existing ones, and showcase their brand. Dealers can, in turn, learn about the latest marketing tools and strategies to boost sales.</li>
                                        
                                        <li><i class="fa-brands fa-pagelines"></i><b>Problem-Solving:</b> Dealers meets provide a forum for addressing challenges and issues faced by dealers and manufacturers. This collaborative problem-solving can lead to solutions that benefit both parties and, ultimately, the farmers.</li>
                                        
                                        <li><i class="fa-brands fa-pagelines"></i><b>Compliance and Regulatory Updates:</b> Manufacturers can inform dealers about any changes in regulations, certifications, or compliance requirements related to agricultural products. Staying updated on these matters is crucial to avoid legal issues and ensure product quality.</li>
                                        
                                        <li><i class="fa-brands fa-pagelines"></i><b>Recognition and Incentives:</b> Manufacturers often recognize and reward high-performing dealers during these meetings. Acknowledging dealers contributions can boost motivation and loyalty.</li>
                                        
                                        <li><i class="fa-brands fa-pagelines"></i><b>Market Expansion:</b> Dealers meets can also explore opportunities for expanding into new markets or regions. Manufacturers can discuss strategies for reaching underserved areas and increasing their market share.</li>
=======
                                        <li><i class="fa fa-check"></i><b>Product Knowledge Dissemination:</b> Dealers meets are crucial for educating dealers about the latest agricultural products, technologies, and innovations. Manufacturers can provide in-depth knowledge about their offerings, including specifications, benefits, and applications. This helps dealers become well-informed about the products they sell, enabling them to answer farmers' questions and provide effective recommendations.</li>
                                        
                                        <li><i class="fa fa-check"></i><b>Market Insights:</b> These meetings offer an opportunity to share market insights, trends, and forecasts. Manufacturers can provide valuable data and analysis about crop demand, pricing, and market dynamics. This information empowers dealers to make informed decisions about their inventory and sales strategies.</li>
                                        
                                        <li><i class="fa fa-check"></i><b>Feedback Exchange:</b> Manufacturers can gather feedback from dealers about their products, pricing, marketing strategies, and customer experiences. This feedback loop helps manufacturers make necessary improvements and tailor their offerings to better meet farmers' needs.</li>
                                        
                                        <li><i class="fa fa-check"></i><b>Training and Skill Enhancement:</b> These meetings often include training sessions to enhance dealers product knowledge and selling skills. Dealers can learn about the technical aspects of products, effective sales techniques, and customer relationship management.</li>
                                        
                                        <li><i class="fa fa-check"></i><b>Promotion and Marketing:</b> Manufacturers can use dealers meets as platforms to launch new products, promote existing ones, and showcase their brand. Dealers can, in turn, learn about the latest marketing tools and strategies to boost sales.</li>
                                        
                                        <li><i class="fa fa-check"></i><b>Problem-Solving:</b> Dealers meets provide a forum for addressing challenges and issues faced by dealers and manufacturers. This collaborative problem-solving can lead to solutions that benefit both parties and, ultimately, the farmers.</li>
                                        
                                        <li><i class="fa fa-check"></i><b>Compliance and Regulatory Updates:</b> Manufacturers can inform dealers about any changes in regulations, certifications, or compliance requirements related to agricultural products. Staying updated on these matters is crucial to avoid legal issues and ensure product quality.</li>
                                        
                                        <li><i class="fa fa-check"></i><b>Recognition and Incentives:</b> Manufacturers often recognize and reward high-performing dealers during these meetings. Acknowledging dealers contributions can boost motivation and loyalty.</li>
                                        
                                        <li><i class="fa fa-check"></i><b>Market Expansion:</b> Dealers meets can also explore opportunities for expanding into new markets or regions. Manufacturers can discuss strategies for reaching underserved areas and increasing their market share.</li>
>>>>>>> b98541034009a1de1c9c8b7339ba381e79a30171
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-4">
                    <div class="block-image wow fadeInDown">
                        <img src="assets/images/dealers-meet5.jpg" alt="Project Image">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block-image wow fadeInUp">
                        <img src="assets/images/dealers-meet2.jpg" alt="Project Image">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block-image wow fadeInUp">
                        <img src="assets/images/dealers-meet3.jpg" alt="Project Image">
                    </div>
                </div>
            </div>
            <div class="description-wrapper mt-30">
                        <div class="tab-content wow fadeInUp">
                            <div class="tab-pane fade show active">
                                <div class="content-box">
                                    <p>In summary, dealers meets in the agriculture sector play a pivotal role in disseminating knowledge, fostering collaboration, and driving growth in the industry. They serve as a bridge between manufacturers and dealers, ultimately benefiting farmers by ensuring they have access to the latest agricultural technologies and solutions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</section>
<!--====== End Shop Details Section ======-->

<!--====== Start Project-Details section ======-->
{{-- <section class="project-details-section pt-30 services-img-round">
    <div class="container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/images/cta-bg-1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/cta-bg-1.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/cta-bg-1.jpg" alt="Third slide">
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!--====== End Project-Details section ======-->

<!--<section class="cta-section">-->
<!--    <div class="container">-->
        <!--====== CTA Wrapper ======-->
<!--        <div class="cta-wrapper pt-60 border-top-1">-->
<!--            <div class="row align-items-center">-->
<!--                <div class="col-lg-9">-->
                    <!--====== CTA Content Box ======-->
<!--                    <div class="cta-content-box d-flex align-items-center mb-40 wow fadeInLeft">-->
<!--                        <img src="assets/images/motto.png" class="circle-logo" alt="Circle Logo">-->
<!--                        <h2>Looking For a Farming-->
<!--                            Specialist?</h2>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-3">-->
                    <!--====== CTA Button ======-->
<!--                    <div class="cta-button float-lg-right mb-40 wow fadeInRight">-->
<!--                        <a href="#" data-toggle="modal" data-target="#sidebar-modal" class="main-btn golden-btn">Enquire-->
<!--                            Now</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!--====== End CTA Section ======-->

<br />

@endsection
@section('scripts')
@parent
<script type="text/javascript">

</script>
@endsection
