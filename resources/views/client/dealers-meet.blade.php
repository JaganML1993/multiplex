@extends('client.header')
@section('content')

<!--====== Start Page-title-area section ======-->
<section class="page-title-area text-white bg_cover"
    style="background-image: url(assets/images/hand-holding-small-tree-planting.png);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Dealer's Meet </h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="index.html">Home</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Dealer's Meet</span>
            </div>
        </div>
    </div>
</section>
<!--====== End Page-title-area section ======-->

<!--====== Start Project-Details section ======-->
<section class="project-details-section pt-60 services-img-round">
    <div class="container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/images/cta-bg-1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/cta-bg-1.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/cta-bg-1.jpg" alt="Third slide">
                </div>
            </div>
            <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a> -->
        </div>
    </div>
</section>
<!--====== End Project-Details section ======-->

<section class="shop-details-section pt-60 pb-60 services-img-round">
    <div class="container">
        <div class="product-details-wrapper">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <h3 class="title">Dealer's Meet</h3>
                    <div class="description-wrapper mt-30">
                        <div class="tab-content wow fadeInUp">
                            <div class="tab-pane fade show active">
                                <div class="content-box">
                                    <p>Sorem ipsum dolor sit amet, consectetur adipiscing elit. Tortor nulla id neque
                                        scelerisque pulvinar.
                                        amet interdum turpis consequat adipiscing. Elementum feugiat sed duis
                                        consectetur varius et cras mattis. Lobortis auctor sit in eu nisl fusce augue
                                        venenatis, dui. Phasellus eget sagittis mauris, nibh augue ristique amet
                                        sollicitudin sit nulla aliquam, imperdiet sed ut diam uspendisse</p>
                                    <ul class="check-style-one">
                                        <li><i class="fa fa-check"></i>We’re Experience Gardening</li>
                                        <li><i class="fa fa-check"></i>Tree Plantations & Landscaping</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar-widget-area mt-30">
                        <img src="assets/images/about-bg-1.jpg" alt="Banner Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Shop Details Section ======-->

<section class="cta-section">
    <div class="container">
        <!--====== CTA Wrapper ======-->
        <div class="cta-wrapper pt-60 border-top-1">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <!--====== CTA Content Box ======-->
                    <div class="cta-content-box d-flex align-items-center mb-40 wow fadeInLeft">
                        <img src="assets/images/motto.png" class="circle-logo" alt="Circle Logo">
                        <h2>Looking For a Farming
                            Specialist?</h2>
                    </div>
                </div>
                <div class="col-lg-3">
                    <!--====== CTA Button ======-->
                    <div class="cta-button float-lg-right mb-40 wow fadeInRight">
                        <a href="#" data-toggle="modal" data-target="#sidebar-modal" class="main-btn golden-btn">Enquire
                            Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End CTA Section ======-->

<br />

@endsection
@section('scripts')
@parent
<script type="text/javascript">

</script>
@endsection
