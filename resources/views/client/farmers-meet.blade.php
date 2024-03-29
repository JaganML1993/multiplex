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

    }
</style>

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
  background-color: #2a7d2e;
      box-shadow: 1px 1px 10px 0px #99999954;
}
.slick-arrow i{
    color:#fff;
}
.slick-arrow.prev {
  left: 5%;
}
 .slick-arrow.next {
  right: 5%;
}
@media only screen and (max-width: 600px) {
 .slick-arrow {
     display:block !important;
 } 
 .project-img img {
     width:280px;
 }
    .projects-slider-one .slick-arrow.prev {
    left:40px;
}
.projects-slider-one .slick-arrow.next {
    right: 40px;
}
.projects-slider-one .slick-arrow {
    width: 35px;
    height: 35px;
    line-height:1.8 !important;
}
}
 
}
</style>


<!--====== Start Page-title-area section ======-->
<section class="page-title-area text-white bg_cover desktop-view"
    style="background-image: url(assets/images/farmers-meet-header-img6.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Farmers Meet </h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Farmers Meet</span>
            </div>
        </div>
    </div>
</section>
<section class="mobile-view">
<section class="page-title-area text-white bg_cover"
    style="background-image: url(assets/images/farmers-meet-header-img6.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Farmers Meet </h1>
          
        </div>
    </div>
</section>
<div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home | </a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Farmers Meet</span>
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
                        <h2>Farmers Meet at Multiplex: Empowering Farmers</h2>
                    </div>
                    <div class="description-wrapper mt-30">
                        <div class="tab-content wow fadeInUp">
                            <div class="tab-pane fade show active">
                                <div class="content-box">
                                    <p>Farmers meets at Multiplex are organized with a set of clear objectives aimed at advancing the agricultural community. These gatherings serve as platforms for knowledge dissemination, providing farmers with up-to-date information on crop management, sustainable farming practices, and cutting-edge technologies. They also focus on skill enhancement through training sessions, fostering networking opportunities among farmers and experts. Farmers meets promote access to high-quality agricultural inputs, facilitate problem-solving discussions, and offer insights into market trends and strategies. </p>
                                    <p>Furthermore, these events emphasize sustainability, community building, and feedback collection, ultimately empowering farmers and contributing to the growth of the agricultural sector.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Shop Details Section ======-->

<!--====== Start Project-Details section ======-->
<section class="project-details-section pt-30 pb-60 services-img-round bg-dark-home">
    <div class="container">
       <!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="assets/images/farmers-meet20.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/images/farmers-meet21.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/images/farmers-meet22.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/images/farmers-meet23.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/images/farmers-meet24.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/images/farmers-meet25.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/images/farmers-meet5.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/images/farmers-meet1.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/images/farmers-meet2.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/images/farmers-meet3.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/images/farmers-meet6.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/images/farmers-meet7.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/images/farmers-meet8.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/images/farmers-meet9.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/images/farmers-meet10.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="assets/images/farmers-meet11.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>-->
        
         <div class="projects-slider-one wow fadeInDown">
                               
                                <!--====== Single Gallery Item ======-->
                                <div class="single-project-item">
                                    <div class="project-img">
                                        <img src="assets/images/farmers-meet20.jpg" alt="Gallery Image">
                                    </div>
                                </div>
                                <!--====== Single Gallery Item ======-->
                                <div class="single-project-item">
                                    <div class="project-img">
                                        <img src="assets/images/farmers-meet21.jpg" alt="Gallery Image">
                                    </div>
                                </div>
                                <!--====== Single Gallery Item ======-->
                                <div class="single-project-item">
                                    <div class="project-img">
                                        <img src="assets/images/farmers-meet22.jpg" alt="Gallery Image">
                                    </div>
                                </div>
                        
                                <!--====== Single Gallery Item ======-->
                                <div class="single-project-item">
                                    <div class="project-img">
                                        <img src="assets/images/farmers-meet23.jpg" alt="Gallery Image">
                                    </div>
                                </div>
                        
                                <!--====== Single Gallery Item ======-->
                                <div class="single-project-item">
                                    <div class="project-img">
                                        <img src="assets/images/farmers-meet24.jpg" alt="Gallery Image">
                                    </div>
                                </div>
                                <!--====== Single Gallery Item ======-->
                                <div class="single-project-item">
                                    <div class="project-img">
                                        <img src="assets/images/farmers-meet25.jpg" alt="Gallery Image">
                                    </div>
                                </div>
                                <!--====== Single Gallery Item ======-->
                                <div class="single-project-item">
                                    <div class="project-img">
                                        <img src="assets/images/farmers-meet5.jpg" alt="Gallery Image">
                                    </div>
                                </div>
                                <!--====== Single Gallery Item ======-->
                                <div class="single-project-item">
                                    <div class="project-img">
                                        <img src="assets/images/farmers-meet1.jpg" alt="Gallery Image">
                                        <!-- <div class="hover-content"> -->
                                    </div>
                                </div>
                                <!--====== Single Gallery Item ======-->
                                <div class="single-project-item">
                                    <div class="project-img">
                                        <img src="assets/images/farmers-meet2.jpg" alt="Gallery Image">
                                    </div>
                                </div>
                                 <!--====== Single Gallery Item ======-->
                                <div class="single-project-item">
                                    <div class="project-img">
                                        <img src="assets/images/farmers-meet3.jpg" alt="Gallery Image">
                                    </div>
                                </div>
                                 <!--====== Single Gallery Item ======-->
                                <div class="single-project-item">
                                    <div class="project-img">
                                        <img src="assets/images/farmers-meet6.jpg" alt="Gallery Image">
                                    </div>
                                </div>
                                 <!--====== Single Gallery Item ======-->
                                <div class="single-project-item">
                                    <div class="project-img">
                                        <img src="assets/images/farmers-meet7.jpg" alt="Gallery Image">
                                    </div>
                                </div>
                                 <!--====== Single Gallery Item ======-->
                                <div class="single-project-item">
                                    <div class="project-img">
                                        <img src="assets/images/farmers-meet8.jpg" alt="Gallery Image">
                                    </div>
                                </div>
                                 <!--====== Single Gallery Item ======-->
                                <div class="single-project-item">
                                    <div class="project-img">
                                        <img src="assets/images/farmers-meet9.jpg" alt="Gallery Image">
                                    </div>
                                </div>
                                 <!--====== Single Gallery Item ======-->
                                <div class="single-project-item">
                                    <div class="project-img">
                                        <img src="assets/images/farmers-meet10.jpg" alt="Gallery Image">
                                    </div>
                                </div>
                                 <!--====== Single Gallery Item ======-->
                                <div class="single-project-item">
                                    <div class="project-img">
                                        <img src="assets/images/farmers-meet11.jpg" alt="Gallery Image">
                                    </div>
                                </div>
                        
                                
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
