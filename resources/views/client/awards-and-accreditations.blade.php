@extends('client.header')
@section('content')

<!--====== Start Page-title-area section ======-->
<section class="page-title-area text-white bg_cover" style="background-image: url(assets/images/awards-banner-1.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Awards and Recognitions </h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="index.html">Home</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Awards and Recognitions </span>
            </div>
        </div>
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
