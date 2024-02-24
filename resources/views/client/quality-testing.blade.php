@extends('client.header')
@section('content')
<style>
     @media (max-width:567px){
.menu-button{
    position:relative;
}
.main-btn-1{
 position: absolute !important;
    top: -57px !important;
}
.main-btn-2{
    position: absolute !important;
    top: -28px !important; 
}
.features-thumb-item-two-1{
    margin-top:2.5rem !important;
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
    style="background-image: url(assets/images/soil-lab-header-img.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Quality Testing</h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Quality Testing </span>
            </div>
        </div>
    </div>
</section>
<section  class="mobile-view"><section class="page-title-area text-white bg_cover"
    style="background-image: url(assets/images/soil-lab-header-img.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Quality Testing</h1>
           
        </div>
    </div>
</section>
<div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home | </a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Quality Testing </span>
            </div></section>
<!--====== End Page-title-area section ======-->


		<!--====== Start Features Section ======-->
        <section class="features-section pt-50 ptbmob-30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="features-thumb-item-two mb-40 wow fadeInDown" data-wow-delay=".2s">
                            <div class="thumb hover14">
                                <img src="assets/images/soil-1.jpg" alt="Image">
                            </div>
                            <br/>
							<div class="padc01">
                                <h5 class="title">Soil Analysis Laboratory</h5>
                                <p>Soil is important for plant growth and development and helps to increase the food production and productivity of crops. Hence 
                                maintainance of soil health is an important task in the field of agriculture because soils are heterogeneous in nature. 
                                </p>
                                <br/>
                            </div>
							<br/>
							<div class="menu-button d-xl-block">
                                <a href="{{ route('soil-analysis-laboratory') }}" class="main-btn main-btn-2 primary-btn">Know More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="features-thumb-item-two features-thumb-item-two-1 mb-40 wow fadeInDown" data-wow-delay=".2s">
                            <div class="thumb hover14">
                                <img src="assets/images/water-lab1.jpg" alt="Image">
                            </div>
                            <br/>
							<div class="padc01">
                                <h5 class="title">Water Analysis Laboratory</h5>
                                <p>The primary objectives of chemical water analysis in the Multiplex NABL Accredited laboratory are to comprehensively assess
                                the chemical composition of water samples, ensuring their compliance with relevant quality standards and regulatory requirements.</p>
                            </div>
							<br/>
							<div class="menu-button d-xl-block">
                                <a href="{{ route('water-analysis-laboratory') }}" class="main-btn primary-btn">Know More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="features-thumb-item-two mb-40 wow fadeInDown" data-wow-delay=".2s">
                            <div class="thumb">
                                <img src="assets/images/leaf-lab1.jpg" alt="Image">
                            </div>
                            <br/>
							<div class="padc01">
                                <h5 class="title">Leaf Analysis Laboratory</h5>
                                <p>The objective of leaf analysis at the Multiplex NABL Laboratory is to assess the nutrient status of plant leaves and provide essential 
                                data for optimizing crop management practices.</p>
                            </div>
							<br/><br/><br/>
							<div class="menu-button d-xl-block">
                                <a href="{{ route('leaf-analysis-laboratory') }}" class="main-btn main-btn-1 primary-btn">Know More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Features Section ======-->


<br />

@endsection
@section('scripts')
@parent
<script type="text/javascript">

</script>
@endsection
