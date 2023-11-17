@extends('client.header')
@section('content')

<!--====== Start Page-title-area section ======-->
<section class="page-title-area text-white bg_cover"
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
<section class="gallery-section-minus1 pt-100 pb-50 bg-dark-infra">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!--====== Project Content Box ======-->
                <div class="project-content-box mb-50 wow fadeInRight">
                    <p class="mb-20">Multiplex believes to represent innovation in Agri-Technology and thrives to create a healthy ecosystem to achieve the same. Our employees are spread nationwide with different backgrounds and varied culture with a positive attitude to accomplish our vision.</p>
                    <p class="mb-20">Multiplex is delighted to have more than 1500 employees with varied designations, skills, and experience working to provide the quality products timely to maintain a long-term customer relationship.</p>
                    <p class="mb-20">Our employees are entitled for wide benefits from health Insurance and Bonus to retirement benefits to appreciate their dedication towards work. Besides, we look forward to create a platform to bring out the best of an individual in terms of their performance and proficiency.</p>
                </div>
            </div>

        </div>
    </div>
    <div class="projects-slider-one wow fadeInDown">
        <!--====== Single Gallery Item ======-->
        <!--<div class="single-project-item">-->
        <!--    <div class="project-img">-->
        <!--        <img src="assets/images/life/life-at-multiplex-1.jpg" alt="Gallery Image">-->
                <!-- <div class="hover-content"> -->
                <!-- <div class="text text-white"> -->
                <!-- <h3 class="title">Manufacturing Unit Name</h3> -->
                <!-- <p>Location</p> -->
                <!-- </div> -->
                <!-- </div> -->
        <!--    </div>-->
        <!--</div>-->
        <!--====== Single Gallery Item ======-->
        <div class="single-project-item">
            <div class="project-img">
                <img src="assets/images/life/life-at-multiplex-2.jpg" alt="Gallery Image">
                <!-- <div class="hover-content"> -->
                <!-- <div class="text text-white"> -->
                <!-- <h3 class="title">Manufacturing Unit Name</h3> -->
                <!-- <p>Location</p> -->
                <!-- </div> -->
                <!-- </div> -->
            </div>
        </div>
        <!--====== Single Gallery Item ======-->
        <div class="single-project-item">
            <div class="project-img">
                <img src="assets/images/life/life-at-multiplex-3.jpg" alt="Gallery Image">
                <!-- <div class="hover-content"> -->
                <!-- <div class="text text-white"> -->
                <!-- <h3 class="title"><a href="project-details.html">Take Care Garden Trees</a></h3> -->
                <!-- <a href="#">Gardening & Landscape</a> -->
                <!-- </div> -->
                <!-- </div> -->
            </div>
        </div>
        <!--====== Single Gallery Item ======-->
        <div class="single-project-item">
            <div class="project-img">
                <img src="assets/images/life/life-at-multiplex-4.jpg" alt="Gallery Image">
                <!-- <div class="hover-content"> -->
                <!-- <div class="text text-white"> -->
                <!-- <h3 class="title">Manufacturing Unit Name</h3> -->
                <!-- <p>Location</p> -->
                <!-- </div> -->
                <!-- </div> -->
            </div>
        </div>

        <!--====== Single Gallery Item ======-->
        <div class="single-project-item">
            <div class="project-img">
                <img src="assets/images/life/life-at-multiplex-5.jpg" alt="Gallery Image">
                <!-- <div class="hover-content"> -->
                <!-- <div class="text text-white"> -->
                <!-- <h3 class="title">Manufacturing Unit Name</h3> -->
                <!-- <p>Location</p> -->
                <!-- </div> -->
                <!-- </div> -->
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
