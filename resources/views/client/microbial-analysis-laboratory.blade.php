@extends('client.header')
@section('content')
@include('client.service-enquiry')
<style>
     @media (max-width:567px){
.menu-button-1{
   margin-top:-1rem !important;
}}
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
<section class="page-title-area text-white bg_cover desktop-view "
    style="background-image: url(assets/images/microbial-lab-header-img.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Microbial Analysis Laboratory </h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Microbial Analysis Laboratory </span>
            </div>
        </div>
    </div>
</section>
<section  class="mobile-view">
<section class="page-title-area text-white bg_cover  "
    style="background-image: url(assets/images/microbial-lab-header-img.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Microbial Analysis Laboratory </h1>
            
        </div>
    </div>
</section>
<div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home | </a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Microbial Analysis Laboratory </span>
            </div>
</section>
<!--====== End Page-title-area section ======-->

<!--====== Start Project-Details section ======-->
<section class="project-details-section pt-60 services-img-round">
    <div class="container">
        <div class="project-details-wrapper pb-30">
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-info mb-30 wow fadeInLeft">
                        <!--<h3 class="title">Microbial Analysis Laboratory</h3>-->
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto
                            beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                            aut odit aut fugit, sed quia consequuntur magni dolorese ratione voluptatem sequi nesciunte
                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
                            sed quia non numquam eius modi tempora incidunt ut labore et dolore </p>
                        <ul class="check-style-one mb-60">
                            <li><i class="fa fa-check"></i>We’re Experience Gardening</li>
                            <li><i class="fa fa-check"></i>Awards Winning & Professional Team Member</li>
                        </ul>
                    </div>
                </div>
                <!--<div class="col-lg-5">-->
                <!--    <img src="assets/images/gl-3.jpg" alt="Project Image">-->
                <!--</div>-->
            </div>
           
            <div class="row">
                <div class="col-md-4">
                    <div class="block-image wow fadeInDown">
                        <img src="assets/images/micro-1.jpg" alt="Project Image">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block-image wow fadeInUp">
                        <img src="assets/images/micro-2.jpg" alt="Project Image">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block-image wow fadeInUp">
                        <img src="assets/images/micro-3.jpg" alt="Project Image">
                    </div>
                </div>
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
                                data-target="#service-modal" class="main-btn primary-btn menu-button-1">Enquire Now</a>
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
document.addEventListener('DOMContentLoaded', function () {
    var emailInput = document.getElementById('emailInput');

    emailInput.addEventListener('input', function () {
        validateEmail();
    });

    function validateEmail() {
        var email = emailInput.value.trim();
        var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

        if (emailRegex.test(email)) {
            // Valid email format
            var allowedDomains = ['com', 'in', 'co']; // Add more domain extensions as needed
            var domain = email.split('.').pop();

            if (allowedDomains.includes(domain)) {
                // Email is valid with allowed domain extension
                emailInput.setCustomValidity('');
            } else {
                // Invalid domain extension
                emailInput.setCustomValidity('Please enter a valid email with allowed domain extension(s).');
            }
        } else {
            // Invalid email format
            emailInput.setCustomValidity('Please enter a valid email address.');
        }
    }
});
</script>
@endsection
