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
<section class="page-title-area text-white bg_cover desktop-view" style="background-image: url(assets/images/awards-header-img-new7.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Awards and Recognitions </h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="index.html">Home  </a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Awards and Recognitions </span>
            </div>
        </div>
    </div>
</section>

<section class="mobile-view">
<section class="page-title-area text-white bg_cover" style="background-image: url(assets/images/awards-header-img-new7.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Awards and Recognitions </h1>
            
        </div>
    </div>
</section>
<div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="index.html">Home | </a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Awards and Recognitions </span>
            </div>
</section>
<!--====== End Page-title-area section ======-->

<section class="faq-section pt-95 pb-40 bg-dark-awards">
    <div class="container">
        <div class="row">
            <img src="assets/images/award-row-1.png" alt="Gallery Image">
        </div>
        <hr>
        <div class="row">
            <img src="assets/images/award-row-2.png" alt="Gallery Image">
        </div>
        <hr>
        <div class="row">
            <img src="assets/images/award-row-3.png" alt="Gallery Image">
        </div>
        <hr>
        <div class="row">
            <img src="assets/images/award-row-4.png" alt="Gallery Image">
        </div>
    </div>
</section>

@endsection
@section('scripts')
@parent
<script type="text/javascript">

</script>
@endsection
