@extends('client.header')
@section('content')
@include('client.service-enquiry')

<style>

     @media (max-width:567px){
.menu-button-1{
   margin-top:-1rem !important;
}
         .row-serve{
             padding-left:15px !important;
              padding-right:15px !important;
         }
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
<!--====== Start Page-title-area section ======-->
<section class="page-title-area text-white bg_cover desktop-view"
    style="background-image: url(assets/images/gardening-header-img.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Gardening Services </h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Gardening Services </span>
            </div>
        </div>
    </div>
</section>
<section class="mobile-view">
<section class="page-title-area text-white bg_cover"
    style="background-image: url(assets/images/gardening-header-img.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Gardening Services </h1>
            
        </div>
    </div>
</section>
<div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home | </a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Gardening Services </span>
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
                        <!--<h3 class="title">Gardening Services </h3>-->
                        <p>As we look ahead to the future, our vision extends beyond our current operations. We are committed to expanding our gardening services to metropolitan areas, bringing the joy of gardening and the benefits of green spaces to urban dwellers. The bustling metropolises present a unique set of challenges and opportunities, and we are eager to adapt our services to meet the specific needs of city-dwellers. Our goal is to provide convenient access to gardening solutions, whether it's for individuals with limited outdoor space or those seeking to create green oases in the heart of the city.</p>
                        {{-- <ul class="check-style-one mb-60">
                            <li><i class="fa fa-check"></i>We’re Experience Gardening</li>
                            <li><i class="fa fa-check"></i>Awards Winning & Professional Team Member</li>
                        </ul> --}}
                    </div>
                </div>
                <!--<div class="col-lg-5">-->
                <!--    <img src="assets/images/garden1.jpg" alt="Project Image">-->
                <!--</div>-->
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h3 class="mb-10 text-a">Exclusive Outlet and Nursery</h3>
                    <p>As part of our growth strategy, we are planning to establish an exclusive outlet that not only showcases our wide range of gardening products but also features a nursery. This dedicated space will serve as a hub for gardening enthusiasts, where they can explore a diverse selection of plants, tools, and accessories while receiving expert guidance from our team. The integration of a nursery into our outlet will enable customers to find everything they need for their gardening projects in one convenient location.</p>
                </div
            </div>
            <hr />
            <div class="row row-serve">
                <div class="col-md-4">
                    <div class="block-image wow fadeInDown">
                        <img src="assets/images/garden2.jpg" alt="Project Image">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block-image wow fadeInDown">
                        <img src="assets/images/garden1.jpg" alt="Project Image">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block-image wow fadeInDown">
                        <img src="assets/images/garden3.jpg" alt="Project Image">
                    </div>
                </div>

            </div>
            
            <div class="row justify-content-center row-serve">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h3  class="mb-10 text-a">Community Workshops for All Ages</h3>
                    <p>Promoting greener urban living is at the core of our mission. To further this objective, we are developing plans to conduct workshops for individuals of all age groups. These workshops will be designed to impart scientific growing practices, gardening techniques, and sustainability principles. By providing education and hands-on learning experiences, we aim to empower a broader community of passionate gardeners who can contribute to creating greener and more environmentally conscious urban environments. Our commitment to education extends to all age groups, from young children learning the basics of gardening to adults seeking to enhance their horticultural skills.</p>
                    <p>In summary, our vision for the future is characterized by a commitment to growth, inclusivity, and education. We aspire to bring the joys of gardening to metropolitan areas, create a one-stop destination for gardening enthusiasts, and foster a community of gardeners who are dedicated to promoting greener urban living through sustainable practices.</p>
                </div>
                
            </div>
        </div>
    </div>
</section>
<!--====== End Project-Details section ======-->

<section class="service-details-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 text-center">
                <div class="menu-button d-xl-block">
                    <a href="{{ route('contact') }}" data-toggle="modal"
                                data-target="#service-modal" class=".menu-button-1 main-btn primary-btn">Enquire Now</a>
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
    function validateDomainDrone() {
        var emailInput1 = document.getElementById('emailField1');
        var emailValue = emailInput1.value;

        // Simplified regular expression for email validation
        var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(com|in|org|net|gov|edu|co)$/;

        if (!emailRegex.test(emailValue)) {
            emailInput1.setCustomValidity("Please enter a valid email address.");
        } else {
            emailInput1.setCustomValidity('');
        }
    }
</script>
@endsection
