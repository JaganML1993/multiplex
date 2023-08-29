@extends('client.header')
@section('content')

<!--====== Start Page-title-area section ======-->
<section class="page-title-area text-white bg_cover"
    style="background-image: url(assets/images/hand-holding-small-tree-planting.png);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Multiplex Vahini </h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="index.html">Home</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Multiplex Vahini </span>
            </div>
        </div>
    </div>
</section>
<!--====== End Page-title-area section ======-->

<section class="shop-details-section pt-60 pb-60 services-img-round">
    <div class="container">
        <div class="product-details-wrapper">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <h3 class="title">Multiplex Vahini</h3>
                    <div class="description-wrapper mt-30">
                        <div class="tab-content wow fadeInUp">
                            <div class="tab-pane fade show active">
                                <div class="content-box">
                                    <p>Multiplex Vahini, a bi-monthly agriculture magazine is an initiative of Multiplex
                                        Group’s extension activity. Vahini provides scientific know how on sustainable
                                        farming methods, Package of practices for season specific crops and researched
                                        articles. Farmers refer and adopt crop management techniques based on our
                                        technical journals.</p>
                                    <p>Multiplex Vahini comprehends scientific information on sustainable farming. It
                                        aims to hand hold farmers throughout the crop cycle to manage pests, diseases
                                        and nutrients for improved quality and quantity of the produce.</p>
                                    <p>We have included a dedicated space in the magazine to provide updates from the
                                        Department of Agriculture, Government of Karnataka. It also comprehends relevant
                                        information on policy changes and updates on trends in agriculture technology.
                                    </p>
                                    <!-- <ul class="check-style-one"> -->
                                    <!-- <li><i class="fa fa-check"></i>We’re Experience Gardening</li> -->
                                    <!-- <li><i class="fa fa-check"></i>Tree Plantations & Landscaping</li> -->
                                    <!-- </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar-widget-area mt-30">
                        <img src="assets/images/vahini.jpg" alt="Banner Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Shop Details Section ======-->

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
        </div>
    </div>
</section>
<!--====== End Project-Details section ======-->

<br />

@endsection
@section('scripts')
@parent
<script type="text/javascript">

</script>
@endsection
