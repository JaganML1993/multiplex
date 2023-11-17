@extends('client.header')
@section('content')

<!--====== Start Page-title-area section ======-->
<section class="page-title-area text-white bg_cover"
    style="background-image: url(assets/images/infrastructure-header-img.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Infrastructure </h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="index.html">Home</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Infrastructure </span>
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
     display:block !important;
 } 
 .project-img img {
     width:280px;
 }
    .projects-slider-one .slick-arrow.prev {
    left:70px;
}
.projects-slider-one .slick-arrow.next {
    right: 70px;
}
.projects-slider-one .slick-arrow {
    width: 35px;
    height: 35px;
    line-height:1.8 !important;
}
}
 
}
</style>

<!--====== Start Gallery Section ======-->
<section class="gallery-section-minus1 pt-50 pb-50 bg-dark-infra">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <!--====== Section-title ======-->
                    <div class="section-title mb-25">
                        <h2>Multiplex Group: Leading the Way in Advanced Agricultural Manufacturing</h2>
                    </div>
                <!--====== Project Content Box ======-->
                <div class="project-content-box mb-50 wow fadeInRight">
                    <p class="mb-15">The Multiplex Group takes immense pride in the establishment of its manufacturing units strategically located in Bengaluru, Tumkur, Hubli, and Ghaziabad. Our commitment to producing top-quality agricultural inputs is unwavering.</p>
                    <p class="mb-15">Our infrastructure is meticulously designed and equipped with advanced technology, adhering to rigorous quality assurance protocols. Our primary goal is to innovate exceptional solutions for crop nutrition and plant protection, meeting the ever-evolving needs of modern agriculture.</p>
                    <p class="mb-15">Furthermore, our manufacturing units are strategically oriented towards recycling and sustainability, emphasizing responsible waste disposal practices. Ensuring the safety of our resources remains a high priority, and stringent safety controls are implemented across all our facilities.</p>
                    <p class="mb-15">Our production units span across vast acres and boast pharmaceutical-grade equipment to maximize production while upholding the highest standards of quality assurance and meeting market demands with excellence.</p>
                    <p class="mb-15">In a recent milestone, we inaugurated a fully automated, world-class biotech unit in September 2021. This cutting-edge facility harnesses new technologies, enabling us to produce several lakh Liters of bio-fertilizers, bio-pesticides, and bio-decomposers in a single cycle. To preserve product integrity, we have installed commercial walk-in cold rooms, ensuring viability for months to years without any compromise. The practice of automated packing for liquid products guarantees utmost precision and purity, delivering accurate results in farm fields.</p>
                </div>
            </div>

        </div>
    </div>
    <div class="projects-slider-one wow fadeInDown">
        <!--====== Single Gallery Item ======-->
        <div class="single-project-item">
            <div class="project-img">
                <img src="assets/images/infrastructure/infra1.jpg" alt="Gallery Image">
            </div>
        </div>
        <!--====== Single Gallery Item ======-->
        <div class="single-project-item">
            <div class="project-img">
                <img src="assets/images/infrastructure/infra2.jpg" alt="Gallery Image">
            </div>
        </div>
        <!--====== Single Gallery Item ======-->
        <div class="single-project-item">
            <div class="project-img">
                <img src="assets/images/infrastructure/infra3.jpg" alt="Gallery Image">
            </div>
        </div>
        <!--====== Single Gallery Item ======-->
        <div class="single-project-item">
            <div class="project-img">
                <img src="assets/images/infrastructure/infra4.jpg" alt="Gallery Image">
            </div>
        </div>

        <!--====== Single Gallery Item ======-->
        <div class="single-project-item">
            <div class="project-img">
                <img src="assets/images/infrastructure/infra5.jpg" alt="Gallery Image">
            </div>
        </div>

        <!--====== Single Gallery Item ======-->
        <div class="single-project-item">
            <div class="project-img">
                <img src="assets/images/infrastructure/infra6.jpg" alt="Gallery Image">
            </div>
        </div>
        <!--====== Single Gallery Item ======-->
        <div class="single-project-item">
            <div class="project-img">
                <img src="assets/images/infrastructure/infra7.jpg" alt="Gallery Image">
            </div>
        </div>
        <!--====== Single Gallery Item ======-->
        <div class="single-project-item">
            <div class="project-img">
                <img src="assets/images/infrastructure/infra8.jpg" alt="Gallery Image">
            </div>
        </div>
        <!--====== Single Gallery Item ======-->
        <div class="single-project-item">
            <div class="project-img">
                <img src="assets/images/infrastructure/infra9.jpg" alt="Gallery Image">
                <!-- <div class="hover-content"> -->
            </div>
        </div>
        <!--====== Single Gallery Item ======-->
        <div class="single-project-item">
            <div class="project-img">
                <img src="assets/images/infrastructure/infra10.jpg" alt="Gallery Image">
            </div>
        </div>

        <!--====== Single Gallery Item ======-->
        <div class="single-project-item">
            <div class="project-img">
                <img src="assets/images/infrastructure/infra11.jpg" alt="Gallery Image">
            </div>
        </div>

        <!--====== Single Gallery Item ======-->
        <div class="single-project-item">
            <div class="project-img">
                <img src="assets/images/infrastructure/infra12.jpg" alt="Gallery Image">
            </div>
        </div>

        <!--====== Single Gallery Item ======-->
        <div class="single-project-item">
            <div class="project-img">
                <img src="assets/images/infrastructure/infra13.jpg" alt="Gallery Image">
            </div>
        </div>

        <!--====== Single Gallery Item ======-->
        <div class="single-project-item">
            <div class="project-img">
                <img src="assets/images/infrastructure/infra14.jpg" alt="Gallery Image">
            </div>
        </div>

        <!--====== Single Gallery Item ======-->
        <div class="single-project-item">
            <div class="project-img">
                <img src="assets/images/infrastructure/infra15.jpg" alt="Gallery Image">
            </div>
        </div>

        <!--====== Single Gallery Item ======-->
        <div class="single-project-item">
            <div class="project-img">
                <img src="assets/images/infrastructure/infra16.jpg" alt="Gallery Image">
            </div>
        </div>

        <!--====== Single Gallery Item ======-->
        <div class="single-project-item">
            <div class="project-img">
                <img src="assets/images/infrastructure/infra17.jpg" alt="Gallery Image">
            </div>
        </div>

        <!--====== Single Gallery Item ======-->
        <div class="single-project-item">
            <div class="project-img">
                <img src="assets/images/infrastructure/infra18.jpg" alt="Gallery Image">
            </div>
        </div>

        <!--====== Single Gallery Item ======-->
        <div class="single-project-item">
            <div class="project-img">
                <img src="assets/images/infrastructure/infra19.jpg" alt="Gallery Image">
            </div>
        </div>

        <!--====== Single Gallery Item ======-->
        <div class="single-project-item">
            <div class="project-img">
                <img src="assets/images/infrastructure/infra20.jpg" alt="Gallery Image">
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
