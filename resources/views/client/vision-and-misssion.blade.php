@extends('client.header')
@section('content')

<style>
      
        .desktop-view{
            display: block !important;
        }
        .mobile-view{
            display: none !important;
        }
        
        .vm-pad {
            padding-top:50px;
            padding-bottom:50px;
        }
    @media (max-width:567px){
        .vm-text h2, .vm-text p, .hero-image-box {
            text-align:center;
        }
        
        .m-pad-mobile {
            padding-top:35px;
        }
        .hero-image-box {
            margin-bottom:0.5rem;
        }
        .vision-row{
            flex-direction: column-reverse !important;
        }
     
        .desktop-view{
            display: none !important;
        }
        .mobile-view{
            display: block !important;
        }
        .mobile-view .page-title-area {
            padding-top:0px !important;
        }
        .mobile-view .page-title-area .page-title-inner h1.page-title {
        font-size: 18px !important;
    
        padding:3.5rem 0rem !important;
        text-align: center !important;
        }
        .mobile-view  .gd-breadcrumb{
            background: #2a7d2e;
            text-align: center;
            font-size: 15px !important;
            color: #e3e3e3 !important;
            font-weight: 500;
            border-top: 1px dashed #fff;
            border-bottom: 1px dashed #fff;
            font-family: "Roboto", sans-serif;

        }
            .mobile-view  .bg_cover {
         background-size: 100% 100% !important;
        
        }
        
        .vm-pad {
            padding-top:40px;
            padding-bottom:50px;
        }
        
        .m-pad-mobile {
            padding-top:20px;
        }
        
    }
 
</style>

<!--====== Start Page-title-area section ======-->
<section class="page-title-area text-white bg_cover desktop-view"
    style="background-image: url({{ asset('images/vision-mission-header-three.jpg') }});">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Vision & Mission</h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Vision & Mission</span>
            </div>
        </div>
    </div>
</section>
<section class="mobile-view">
<section class="page-title-area text-white bg_cover"
    style="background-image: url({{ asset('images/vision-mission-header-three.jpg') }});">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Vision & Mission</h1>
            
        </div>
    </div>
</section>
<div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home | </a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Vision & Mission</span>
            </div>
</section>
<!--====== End Page-title-area section ======-->



<!--====== Start VM Section ======-->
<section class="features-section vm-pad">
    <div class="container">
        <div class="row align-items-xl-center">
            <div class="col-xl-6 col-lg-6">
                <!--=== Vision ===-->
                <div class="vm-text text-center">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Vision</h2>
                    <p class="wow fadeInDown" data-wow-delay=".6s">To progressively research and develop <br/>
                    innovative products and services to the<br/>
                    farming community.</p>
                    <br/>
                </div>
            </div>
            
            <div class="col-xl-6 col-lg-6">
                <!--=== Mission ===-->
                <div class="vm-text text-center m-pad-mobile">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Mission</h2>
                    <p class="wow fadeInDown" data-wow-delay=".6s">To be the most preferred quality Agri Input<br/>
                        manufacturer and supplier to achieve <br/>
                        “Total Solution provider” in improving overall <br/>
                        soil health, crop productivity and quality of the produce.</p>
                </div>
            </div>
            
        </div>
    </div>
</section>

<section class="features-section">
    <div class="container">
        <div class="row align-items-xl-center vision-row">
            <div class="col-xl-12 col-lg-12">
                <!--=== Motto Image ===-->
                <div class="hero-image-box d-xl-block wow fadeInRight text-center" data-wow-delay=".75s">
                    <img src="{{ asset('images/motto-new-img-bg.png') }}" alt="Hero Image">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features-section vm-pad">
    <div class="container">
        <div class="row align-items-xl-center">
            <div class="col-xl-12 col-lg-12">
                <!--=== Values===-->
                <div class="vm-text text-center">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Values</h2>
                    <p class="wow fadeInDown" data-wow-delay=".6s">Integrity, Quality, Trust, Transparency,<br/>
                    Commitment, Relationship and Innovation.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== End VM Section ======-->
 


@endsection
@section('scripts')
@parent
<script type="text/javascript">

</script>
@endsection
