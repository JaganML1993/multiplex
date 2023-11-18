@extends('client.header')
@section('content')

<style>
    @media (max-width:567px){
        .vm-text h2, .vm-text p, .hero-image-box {
            text-align:center;
        }
        .hero-image-box {
            margin-bottom:0.5rem;
        }
        .vision-row{
            flex-direction: column-reverse !important;
        }
    }
</style>

<!--====== Start Page-title-area section ======-->
<section class="page-title-area text-white bg_cover"
    style="background-image: url({{ asset('images/vision-mission-header-three.jpg') }});">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Vision & Mission</h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="index.html">Home</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Vision & Mission</span>
            </div>
        </div>
    </div>
</section>
<!--====== End Page-title-area section ======-->



<!--====== Start Features Section ======-->
<section class="features-section" style="background-color:#f6d0a259; padding:18px;margin:20px;">
    <div class="container">
        <div class="row align-items-xl-center">
            <div class="col-xl-8 col-lg-12">
                <!--=== Hero Content ===-->
                <div class="vm-text">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Who We Are</h2>
                    <p class="wow fadeInDown" data-wow-delay=".6s">We're a leading manufacturer and supplier of a wide range of Agriculture inputs, including fertilizers, pesticides, nutrients,
                    organic manure, bio-fertilizers, bio-pesticides, and bio-stimulants. Our dedicated team of scientists employ cutting-edge Agri technology to develop innovative solutions 
                    for crop nutrition and plant protection, emphasizing high quality farm produce. Our product line extends to Agriculture, Horticulture, and FMCG (Cleaning & Disinfection), 
                    aligning with the ongoing shift towards an organic era.</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12">
                <!--=== Hero Image Box ===-->
                <div class="hero-image-box d-xl-block wow fadeInRight" data-wow-delay=".75s">
                    <img src="{{ asset('images/who-we-are-1.png') }}" alt="Hero Image">
                </div>
            </div>
        </div>
    </div>
</section>

<!--<section class="features-section" style="margin:20px;">-->
<!--    <div class="container">-->
<!--        <div class="row align-items-xl-center vm-bg-color">-->
<!--            <div class="col-xl-4 col-lg-12">-->
                <!--=== Hero Image Box ===-->
<!--                <div class="hero-image-box d-xl-block wow fadeInRight" data-wow-delay=".75s">-->
<!--                    <img src="{{ asset('images/what-we-do-new-img.png') }}" alt="Hero Image">-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-xl-8 col-lg-12">-->
                <!--=== Hero Content ===-->
<!--                <div class="vm-text">-->
<!--                    <h2 class="wow fadeInUp" data-wow-delay=".4s">What We Do</h2>-->
<!--                    <p class="wow fadeInDown" data-wow-delay=".6s">We are one of the leading manufacturers, marketers-->
<!--                        and exporters of Micro-->
<!--                        Nutrients, Organic Manure, Bio-Fertilizers, Bio-Pesticides, and Bio-activators in India.</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<!--<section class="features-section" style="background-color:#f6d0a259; padding:18px;margin:20px;">-->
<!--    <div class="container">-->
<!--        <div class="row align-items-xl-center">-->
<!--            <div class="col-xl-8 col-lg-12">-->
                <!--=== Hero Content ===-->
<!--                <div class="vm-text">-->
<!--                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Our Vision</h2>-->
<!--                    <p class="wow fadeInDown" data-wow-delay=".6s">To progressively research and develop innovative-->
<!--                        products and services to the farming community.</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-xl-4 col-lg-12">-->
                <!--=== Hero Image Box ===-->
<!--                <div class="hero-image-box d-xl-block wow fadeInRight" data-wow-delay=".75s">-->
<!--                    <img src="{{ asset('images/vision-new-img.png') }}" alt="Hero Image">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->


<section class="features-section" style="margin:20px;">
    <div class="container">
        <div class="row align-items-xl-center vision-row">
            <div class="col-xl-4 col-lg-12">
                <!--=== Hero Image Box ===-->
                <div class="hero-image-box d-xl-block wow fadeInRight" data-wow-delay=".75s">
                    <img src="{{ asset('images/mission-new-img.png') }}" alt="Hero Image">
                </div>
            </div>
            <div class="col-xl-8 col-lg-12">
                <!--=== Hero Content ===-->
                <div class="vm-text">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Our Vision and Mission</h2>
                    <p class="wow fadeInDown" data-wow-delay=".6s">To progressively research and develop innovative
                        products and services to the farming community.</p>
                    <p class="wow fadeInDown" data-wow-delay=".6s">To be the most preferred quality Agri Input
                        manufacturer and supplier to achieve “Total Solution provider” in improving overall soil health,
                        crop productivity and quality of the produce.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features-section" style="background-color:#f6d0a259; padding:18px;margin:20px;">
    <div class="container">
        <div class="row align-items-xl-center">
            <div class="col-xl-8 col-lg-12">
                <!--=== Hero Content ===-->
                <div class="vm-text">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Our Values</h2>
                    <p class="wow fadeInDown" data-wow-delay=".6s">Integrity, Quality, Trust, Transparency, Commitment,
                        Relationship, and Innovation.</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12">
                <!--=== Hero Image Box ===-->
                <div class="hero-image-box d-xl-block wow fadeInRight" data-wow-delay=".75s">
                    <img src="{{ asset('images/values-new-img.png') }}" alt="Hero Image">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="features-section" style="margin:20px;">
    <div class="container">
        <div class="row align-items-xl-center  vision-row">
            <div class="col-xl-4 col-lg-12">
                <!--=== Hero Image Box ===-->
                <div class="hero-image-box d-xl-block wow fadeInRight" data-wow-delay=".75s">
                    <img src="{{ asset('images/motto-new-img.png') }}" alt="Hero Image">
                </div>
            </div>
            <div class="col-xl-8 col-lg-12">
                <!--=== Hero Content ===-->
                <div class="vm-text">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Our Motto</h2>
                    <p class="wow fadeInDown" data-wow-delay=".6s">Multiplex Farmer, Happy Farmer</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Features Section ======-->
<br/>


        


@endsection
@section('scripts')
@parent
<script type="text/javascript">

</script>
@endsection
