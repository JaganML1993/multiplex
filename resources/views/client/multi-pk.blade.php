@extends('client.header')
@section('content')
@include('client.product-enquiry')

<!--====== Start CTA Section  ======-->
<section class="cta-bg-section bg_cover pt-100 p-r z-1" style="background-image: url(assets/images/bg33.jpg);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!--======  CTA Content Box  ======-->
                <div class="cta-content-box text-white mb-50 wow fadeInLeft">
                    <!--====== Section-title ======-->
                    <div class="section-title mb-20">
                        <h2>Multi PK</h2>
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <!--======  CTA Image Box  ======-->
                <div class="cta-image-box1 wow fadeInRight">
                    {{-- <img src="assets/images/products/fertilizers/major-nutrients/multi-pk-front.jpg"
                        alt="Gallery Image"> --}}
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block w-100" src="assets/images/products/fertilizers/major-nutrients/multi-pk-front.jpg" alt="Front image">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="assets/images/products/fertilizers/major-nutrients/multi-pk-back.jpg" alt="Back Image">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End CTA Section  ======-->

<style>
    .carousel-indicators li {
    box-sizing: content-box;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
    width: 30px;
    height: 3px;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    cursor: pointer;
    background-color: #28a745;
    background-clip: padding-box;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    opacity: .5;
    transition: opacity .6s ease;
}
</style>



<!--====== Start Benefits Section ======-->
        <section class="pricing-section pt-100 pb-20">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <!--====== Pricing Item ======-->
                        <div class="single-pricing-item mb-40 wow fadeInUp" data-wow-delay=".2s">
                            {{-- <div class="pricing-img">
                                <img src="assets/images/pricing/pricing-1.jpg" alt="Pricing Image">
                            </div> --}}
                            <div class="pricing-body">
                                {{-- <div class="shape shape-one"><span><img src="assets/images/pricing/leaf.png" alt="Image"></span></div> --}}
                                <div class="pricing-title mb-10">
                                    <h3 class="title">Benefits</h3>
                                </div>
                                {{-- <ul class="mb-35">
                                    <li><i class="fas fa-badge-check"></i>Install a Patio or Pathway</li>
                                    <li><i class="fas fa-badge-check"></i>Install Landscaping</li>
                                    <li><i class="fas fa-badge-check"></i>Waterproof a Deck Costs</li>
                                    <li><i class="fas fa-badge-check"></i>Remove a Tree Stump</li>
                                </ul> --}}
                                <p>Application of Multiplex Multi-PK fertilizer either through foliar spray or fertigation will help in better nutrient uptake and thereby increases the yield and quality of the produce.</p>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
<!--====== End Benefits Section ======-->


<!--====== Start Specification Section ======-->
        <section class="pricing-section pt-15 pb-30">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <!--====== Pricing Item ======-->
                        <div class="single-pricing-item mb-40 wow fadeInUp" data-wow-delay=".2s">
                            {{-- <div class="pricing-img">
                                <img src="assets/images/pricing/pricing-1.jpg" alt="Pricing Image">
                            </div> --}}
                            <div class="pricing-body">
                                {{-- <div class="shape shape-one"><span><img src="assets/images/pricing/leaf.png" alt="Image"></span></div> --}}
                                <div class="pricing-title mb-10">
                                    <h3 class="title">Specification</h3>
                                </div>
                                <h6>Crop</h6>
                                <p class="mt-10">All Crops</p>
                                <hr>
                                <h6>Dosage & Methods of Application</h6>
                                <p class="mt-10"><i class="fa-solid fa-circle-check" style="color: #2a7d2e;"></i>&nbsp; &nbsp;Foliar Spray: Dissolve 3.0 to 5.0 g per litre of water and spray on both the surface of the leaves.</p>
                                <p><i class="fa-solid fa-circle-check" style="color: #2a7d2e;"></i> &nbsp;&nbsp;Fertigation: 2 to 3 kg per acre.</p>
                                <hr>
                                <h6>Available Packing</h6>
                                <p class="mt-10">500g, 1kg & 25kg</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!--====== End Specification Section ======-->

<section class="service-details-section pt-50 pb-50 bg-dark-home">
            <div class="container">
                <div class="pricing-title mb-30 text-center">
                    <h3 class="title">Potassium (K)</h3>
                </div>
                <div class="row">
				    <div class="col-xl-6 col-lg-6">
                        <!--====== Sidebar Widget Area ======-->
                            <div class="sidebar-widget product-back-img widget-service-nav gray-bg mb-30 wow fadeInUp">
                                <div class="block-image wow fadeInDown rad10"> <img src="assets/images/potassium-img1.jpg" alt="Gallery Image"></div>
                            </div>
                    </div>

                    <div class="col-xl-6 col-lg-6">
                        <!--====== Sidebar Widget Area ======-->
                            <div class="sidebar-widget product-back-img widget-service-nav gray-bg mb-30 wow fadeInUp">
                                <div class="block-image wow fadeInDown rad10"> <img src="assets/images/potassium-img2.jpg" alt="Gallery Image"></div>
                            </div>
                    </div>
					
                    <div class="col-xl-6 col-lg-6 padprod">
                        <div class="service-info-wrapper pr-lg-40 wow fadeInDown">
                            <h6>Role of Potassium</h6>
                            {{-- <p>Unde omnis iste natus error voluptatem accusantium doloremque laudantium totam rem aperiam </p> --}}
                            <ul class="check-style-one pt-20">
                                        <li><i class="fa fa-check"></i>It is absorbed by plants in larger amounts than any other mineral element except nitrogen and in some cases, calcium</li>
                                        <li><i class="fa fa-check"></i>It helps in protein synthesis, photosynthesis</li>
                                        <li><i class="fa fa-check"></i>Improves overall plant vigor and disease resistance</li>
                                        <li><i class="fa fa-check"></i>Encourages root growth and fruit quality</li>
                                        <li><i class="fa fa-check"></i>Enhances drought and cold tolerance</li>
                                        <li><i class="fa fa-check"></i>Second most used nutrient</li>   
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 padprod">
                        <div class="service-info-wrapper pr-lg-40 wow fadeInDown">
                            <h6>Deficiency</h6>
                            {{-- <p>Unde omnis iste natus error voluptatem accusantium doloremque laudantium totam rem aperiam </p> --}}
                            <ul class="check-style-one pt-20">
                                        <li><i class="fa fa-check"></i>Yellow translucent spots on older leaves and marginal chlorosis</li>
                                        <li><i class="fa fa-check"></i>Browning of whole plant</li>
                            </ul>
                        </div>
                    </div>
                    

                </div>
            </div>
        </section>
<br>

<section class="service-details-section pt-30">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/W3P9deLFkk8?rel=0"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 prod-cta-bn">
                <div class="menu-button d-xl-block">
                    <a href="assets/doc/One_Brand_Total_Solution_Brochure.pdf" target="_blank"
                        class="main-btn primary-btn">Download Catalog</a>
                </div>
                <br />
                <div class="menu-button d-xl-block">
                    <!--<a href="#" class="main-btn filled-btn" style="padding: 17px 60px;">Enquire Now</a>-->
                    <a href="{{ route('contact') }}" data-toggle="modal" data-target="#product-modal" class="main-btn filled-btn" style="padding: 17px 56px;">Enquire Now</a>
                </div>
            </div>
        </div>
    </div>
</section>


<br /><br /><br />

@endsection
@section('scripts')
@parent
<script type="text/javascript">

</script>
@endsection
