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
    style="background-image: url(assets/images/team-header-img4.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Multiplex Team </h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="index.html">Home  </a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Multiplex Team </span>
            </div>
        </div>
    </div>
</section>
<section class="mobile-view">
<section class="page-title-area text-white bg_cover"
    style="background-image: url(assets/images/team-header-img4.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Multiplex Team </h1>
            
        </div>
    </div>
</section>
<div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="index.html">Home | </a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Multiplex Team </span>
            </div>
</section>
<!--====== End Page-title-area section ======-->

<style>

    .flip-card {
      display: inline-block;
      background-color: transparent;
      height: 250px;
      perspective: 1000px;
    }
    .flip-card-inner img{
        height: 250px;
        object-fit: fill;
        width: 100%;
    }
    .flip-card-inner {
      position: relative;
      width: 100%;
      height: 100%;
      text-align: center;
      transition: transform 0.6s;
      transform-style: preserve-3d;
    
    }
    
    .flip-card-front,
    .flip-card-back {
      position: absolute;
      width: 100%;
      height: 100%;
      backface-visibility: hidden;
    }
    
    .flip-card-front {
      z-index: 2;
    }
    
    .flip-card-back {
      transform: rotateY(180deg);
      z-index: 1;
    }
    
    .flip-card .flip-card-inner {
      animation: rotate 20s .5s infinite;
    }
    
    .flip-card:nth-child(2) .flip-card-inner {
      animation-delay: 1s;
    }
    
    .flip-card:nth-child(3) .flip-card-inner {
      animation-delay: 1.5s;
    }
    
    .flip-card:nth-child(4) .flip-card-inner {
      animation-delay: 2.0s;
    }
    .flip-card:nth-child(6) .flip-card-inner {
      animation-delay: 2.5s;
    }
    .flip-card:nth-child(7) .flip-card-inner {
      animation-delay: 3.0s;
    }
    .flip-card:nth-child(8) .flip-card-inner {
      animation-delay: 3.5s;
    }
    .flip-card:nth-child(9) .flip-card-inner {
      animation-delay: 4.0s;
    }
    @keyframes rotate {
      0%, 60% {
        transform: rotateY(0);
      }
      10%, 50% {
        transform: rotateY(180deg);
      }
    }
    .grow-txt{
        color:#1a9f53; font-size: 35px;
    }
@media (max-width:576px){
    .grow-txt{
        font-size: 20px;
    }
      .flip-card {
        margin-bottom: 0.5rem;
        height: 250px;
      }
      .flip-card:nth-child(5) {
        height: 150px;
      }
}
</style>


<!--====== Start Skills Section  ======-->
<section class="skills-section pt-50 pb-10">
    <div class="container">
        <div class="row align-items-lg-center">
            <div class="col-xl-12 col-lg-12">
                <!--====== Skill Content Box ======-->
                <div class="skill-content-box mb-35 mr-lg-50 wow fadeInLeft">
                    <!--====== Section-title ======-->
                    <div class="section-title mb-25">
                        <h2>Our Team - A Dynamic Team Driving Agricultural Excellence</h2>
                    </div>
                    <p class="mb-10 ">At Multiplex Group of Companies, our success is driven by an exceptional and passionate team that spans various disciplines and roles. Our roster includes highly dedicated Doctorates and Scientists who bring cutting-edge research and innovation to our agricultural practices. They collaborate seamlessly with our skilled agriculturists and horticulturists to pioneer sustainable farming techniques. Behind the scenes, our Accounts staff and HR team ensure the efficient management of finances and human resources. </p>
                    <p class="mb-10 ">Our Operations staff, Logistic enablers, Sales & Marketing professionals, Designers, Video editors, PR team, Legal and Administration teamwork in harmony to streamline our processes and deliver top-quality products to our customers. Our dynamic Managers and Supervisors provide leadership and guidance to our Production Assistants, while our housekeeping staff maintains a clean and safe environment. Our committed Delivery boys, Drivers, and Office assistants play crucial roles in ensuring seamless operations. Together, this diverse and passionate team at Multiplex Group embodies our mission of advancing agriculture and improving lives through dedication, expertise, and innovation. </p>
				</div>
            </div>
        </div>
    </div>
</section>



<section class="skills-section pt-10 pb-10 m-3">
  <div class="container-fluid">
   <div class="row">
    <div class="col-md-4 p-0 flip-card"> 
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="assets/images/team/two.jpg" >
          </div>
          <div class="flip-card-back">
            <img src="assets/images/team/eight.jpg" >
          </div>
        </div>
      </div>
      <div class="col-md-4 p-0 flip-card"> 
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="assets/images/team/six.jpg" >
          </div>
          <div class="flip-card-back">
            <img src="assets/images/team/nine.jpg" >
          </div>
        </div>
      </div>
      <div class="col-md-4 p-0 flip-card"> 
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="assets/images/team/twelve.jpg" >
          </div>
          <div class="flip-card-back">
            <img src="assets/images/team/ten.jpg" >
          </div>
        </div>
      </div>
      <div class="col-md-4 p-0 flip-card"> 
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="assets/images/team/three.jpg" >
          </div>
          <div class="flip-card-back">
            <img src="assets/images/team/eleven.jpg" >
          </div>
        </div>
      </div>
    <div class="col-md-4 p-0 d-flex justify-content-center align-items-center flip-card"><h2  class="grow-txt">We Grow Together</h2></div>
    <div class="col-md-4 p-0 flip-card"> 
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="assets/images/team/one.jpg" >
          </div>
          <div class="flip-card-back">
            <img src="assets/images/team/fourteen.jpg" >
          </div>
        </div>
      </div>
      <div class="col-md-4 p-0 flip-card"> 
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="assets/images/team/five.jpg" >
          </div>
          <div class="flip-card-back">
            <img src="assets/images/team/fifteen.jpg" >
          </div>
        </div>
      </div>
      <div class="col-md-4 p-0 flip-card"> 
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="assets/images/team/four.jpg" >
          </div>
          <div class="flip-card-back">
            <img src="assets/images/team/sixteen.jpg" >
          </div>
        </div>
      </div>
      <div class="col-md-4 p-0 flip-card"> 
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="assets/images/team/seven.jpg" >
          </div>
          <div class="flip-card-back">
            <img src="assets/images/team/thirteen.jpg" >
          </div>
        </div>
      </div>
    

   </div>
</div>
</section>

<!--<section class="skills-section pt-50 pb-10">-->
<!--  <div class="container">-->
<!--    <div class="rotation-container text-center">-->
<!--        <div class="card">-->
<!--            <div class="front"><img src="assets/images/team/team-front-img-1.jpg" alt="Front"></div>-->
<!--            <div class="back"><img src="assets/images/team/team-back-img-2.jpg" alt="Back"></div>-->
<!--        </div>-->
<!--    </div>-->
<!-- </div>-->
<!--</section>-->

<!--<section class="skills-section pt-10 pb-10">-->
<!--  <div class="container-fluid">-->
<!--     <img src="assets/images/team/team-front-img-1.jpg" alt="" />-->
<!--</div>-->
<!--</section>-->



<br />

@endsection
@section('scripts')
@parent
<script type="text/javascript">

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}


</script>
@endsection
