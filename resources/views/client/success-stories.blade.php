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
        <section class="page-title-area text-white bg_cover desktop-view" style="background-image: url(assets/images/success-stories-header-new6.jpg);">
            <div class="container">
                <!--======  Page-title-Inner ======-->
                <div class="page-title-inner text-center">
                    <h1 class="page-title">Success Stories </h1>
                    <div class="gd-breadcrumb">
                        <span class="breadcrumb-entry"><a href="index.html">Home</a></span>
                        <span class="separator"></span>
                        <span class="breadcrumb-entry active">Success Stories </span>
                    </div>
                </div>
            </div>
        </section>
        <section class="mobile-view">
        <section class="page-title-area text-white bg_cover" style="background-image: url(assets/images/success-stories-header-new6.jpg);">
            <div class="container">
                <!--======  Page-title-Inner ======-->
                <div class="page-title-inner text-center">
                    <h1 class="page-title">Success Stories </h1>
                  
                </div>
            </div>
        </section>
        <div class="gd-breadcrumb">
                        <span class="breadcrumb-entry"><a href="index.html">Home | </a></span>
                        <span class="separator"></span>
                        <span class="breadcrumb-entry active">Success Stories </span>
                    </div>
        </section>
        <!--====== End Page-title-area section ======-->
		
		
		<!--====== Start Testimonial Section ======-->
        <section class="testimonial-section1 bg-dark-home">
            <div class="container">
                <!--=== Testimonial Wrapper ===-->
                <div class="testimonial-quote-area p-r z-1">
                    <!--====== Testimonial Area ======-->
                    <div class="testimonial-area pt-30 pb-30 pl-15 pr-15 wow fadeInUp">
                        <div class="container">
                            <div class="row align-items-center">
                                <!--<div class="col-lg-1 order-md-1 order-2">-->
                                    <!--=== Testimonial Dots ===-->
                                <!--    <div class="testimonial-dots mb-20"></div>-->
                                <!--</div>-->
                                <div class="col-lg-12 order-md-2 order-1">
                                    <!--=== Testimonial Slider ===-->
                                    <div class="testimonial-slider-three mb-20">
                                        <!--=== Testimonial Item ===-->
                                        <div class="single-testimonial-item-three d-flex">
                                            <div class="testimonial-inner-content mb-30">
                                                {{-- <ul class="ratings">
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                    <li><i class="far fa-star"></i></li>
                                                </ul> --}}
                                                <p>“I have been using Multiplex Products (Multiplex Allbor, Chamak, General Liquid, Samras, Navjeevan G) for my Chilly crop.”</p>
                                                <div class="quote-title">
                                                    {{-- <div class="icon">
                                                        <img src="assets/images/quote3.png" alt="Quote Image">
                                                    </div> --}}
                                                    <div class="title">
                                                        <h6>Manohar Biswal</h6>
                                                        <p class="position">Multiplex Farmer, Orissa</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="testimonial-author mb-30">
                                                <img src="assets/images/img-4.jpg" class="rounded-circle" alt="testimonial image">
                                            </div>
                                        </div>
                                        <!--=== Testimonial Item ===-->
                                        <div class="single-testimonial-item-three d-flex">
                                            <div class="testimonial-inner-content mb-30">
                                                
                                                <p>“I could harvest highest yield of Banana in my area after using Multiplex Products.”</p>
                                                <div class="quote-title">
                                                   
                                                    <div class="title">
                                                        <h6>Mr. Parthasarathy</h6>
                                                        <p class="position">Multiplex Farmer, Tamil Nadu</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="testimonial-author mb-30">
                                                <img src="assets/images/img-4.jpg" class="rounded-circle" alt="testimonial image">
                                            </div>
                                        </div>
                                        <!--=== Testimonial Item ===-->
                                        <div class="single-testimonial-item-three d-flex">
                                            <div class="testimonial-inner-content mb-30">
                                                
                                                <p>“I was facing problems with the yield. Multiplex team guided me to use Trishul +, NalPaK and Annapurna. I could harvest 270+ quintal of chillies.”</p>
                                                <div class="quote-title">
                                                    
                                                    <div class="title">
                                                        <h6>Mr. Nikhil</h6>
                                                        <p class="position">Multiplex Farmer, Maharashtra</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="testimonial-author mb-30">
                                                <img src="assets/images/img-4.jpg" class="rounded-circle" alt="testimonial image">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="testimonial-dots mb-20"></div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Testimonial Section ======-->

        <section class="service-details-section pt-60 pb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-12">
                        <div class="section-title text-center mb-50 wow fadeInDown">
                            <span class="sub-title"><img src="assets/images/leaf-svgrepo-com-new.svg" height="35" width="35" alt=""></span>
                            <h2>Multiplex Farmer Testimonials</h2>
                        </div>
                    </div>
                </div>
                <div class="row pb-30">
                    <div class="col-xl-4 col-lg-4 mb-10">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/hYoijuYE75w?rel=0"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 mb-10">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/-9JD4Gq7his?rel=0"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 mb-10">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vGB46NakPBw?rel=0"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="row pb-30">
                    <div class="col-xl-4 col-lg-4 mb-10">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Lmwoz6sGbDU?rel=0"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 mb-10">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/gaiSvheFNPA?rel=0"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 mb-10">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/3xL2IxPq-p8?rel=0"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="row pb-30">
                    <div class="col-xl-4 col-lg-4 mb-10">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/jXABlCqPUTo?rel=0"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 mb-10">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/n0DEgbwSWiw?rel=0"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 mb-10">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ojnjtsl9sCQ?rel=0"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="row pb-30">
                    <div class="col-xl-4 col-lg-4 mb-10">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/YA-3Q5Zjdmk?rel=0"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 mb-10">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/mAcB9oubQ4Q?rel=0"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 mb-10">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/uMQ3rS15OyI?rel=0"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		
@endsection
@section('scripts')
@parent
<script type="text/javascript">

</script>
@endsection