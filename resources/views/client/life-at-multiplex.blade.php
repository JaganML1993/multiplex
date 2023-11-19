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
<section class="page-title-area text-white bg_cover desktop-view"
    style="background-image: url(assets/images/life-at-multiplex-header-img4.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Life @ Multiplex </h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="index.html">Home</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Life @ Multiplex </span>
            </div>
        </div>
    </div>
</section>
<section class="mobile-view "><section class="page-title-area text-white bg_cover"
    style="background-image: url(assets/images/life-at-multiplex-header-img4.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Life @ Multiplex </h1>
           
        </div>
    </div>
</section>
<div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="index.html">Home | </a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Life @ Multiplex </span>
            </div>
</section>
<!--====== End Page-title-area section ======-->

<style>
    .slick-dots {
    display: block;
}

.slick-arrow {
  position: absolute;
  top: 50%;
  text-align:center;
  line-height:2.5;

  transform: translateY(-42%);
  cursor: pointer;
  z-index: 1;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  font-size: 20px;
  /* border: 1px solid rgba(0, 0, 0, 0.1); */
  -webkit-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
  background-color: #ffffff;
}
.slick-arrow i{
    color:#000;
}
.slick-arrow.prev {
  left: 5%;
}
 .slick-arrow.next {
  right: 5%;
}
@media only screen and (max-width: 600px) {
 .slick-arrow {
     display:none !important;
 } 
 .project-img img {
     width:280px;
 }
}
</style>

<!--====== Start Gallery Section ======-->
<section class="gallery-section-minus1 pt-60 pb-50 bg-dark-infra">
    <div class="container">
        
        <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <h3 class="title" style="font-size:25px;font-weight:700;">Glimpses of life at Multiplex</h3>
                        <div class="description-wrapper mt-30">
                            <div class="tab-content wow fadeInUp">
                                <div class="tab-pane fade show active">
                                    <div class="content-box">
                                        <p class="mb-20">Multiplex believes to represent innovation in Agri-Technology and thrives to create a healthy ecosystem to achieve the same. Our employees are spread nationwide with different backgrounds and varied culture with a positive attitude to accomplish our vision.</p>
                                        <p class="mb-20">Multiplex is delighted to have more than 1500 employees with varied designations, skills, and experience working to provide the quality products timely to maintain a long-term customer relationship.</p>
                                        <p class="mb-20">Our employees are entitled for wide benefits from health Insurance and Bonus to retirement benefits to appreciate their dedication towards work. Besides, we look forward to create a platform to bring out the best of an individual in terms of their performance and proficiency.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    <br/>
    <div class="projects-slider-one wow fadeInDown">
        <div class="single-project-item">
            <div class="project-img">
                <img src="assets/images/life/life-at-multiplex-2.jpg" alt="Gallery Image">
            </div>
        </div>
        <!--====== Single Gallery Item ======-->
        <div class="single-project-item">
            <div class="project-img">
                <img src="assets/images/life/life-at-multiplex-3.jpg" alt="Gallery Image">
            </div>
        </div>
        <!--====== Single Gallery Item ======-->
        <div class="single-project-item">
            <div class="project-img">
                <img src="assets/images/life/life-at-multiplex-4.jpg" alt="Gallery Image">
            </div>
        </div>

        <!--====== Single Gallery Item ======-->
        <div class="single-project-item">
            <div class="project-img">
                <img src="assets/images/life/life-at-multiplex-5.jpg" alt="Gallery Image">
            </div>
        </div>
    </div>
</section>
<!--====== End Gallery Section ======-->


@endsection
@section('scripts')
@parent
<script type="text/javascript">

</script>
@endsection
