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
                        <h2>{{$product->name}}</h2>
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <!--======  CTA Image Box  ======-->
                <div class="cta-image-box1 wow fadeInRight">
                    
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ url('').'/'.$product->front_image }}" alt="Front image">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="{{ url('').'/'.$product->back_image }}" alt="Back Image">
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
.single-pricing-item:hover .pricing-body ul li{
    color: #000 !important;
}
</style>



<!--====== Start Benefits Section ======-->
        <section class="pricing-section pt-100 pb-20">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <!--====== Pricing Item ======-->
                        <div class="single-pricing-item mb-40 wow fadeInUp" data-wow-delay=".2s">
                   
                            <div class="pricing-body">
                                <div class="pricing-title mb-10">
                                    <h3 class="title">Benefits</h3>
                                </div>
                                <p><?php echo $product->benefits ?></p>
                                
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
                            <div class="pricing-body">
                                <div class="pricing-title mb-10">
                                    <h3 class="title">Specification</h3>
                                </div>

                                @if(!empty($product->crop))
                                <h6>Crop</h6>
                               <div class="mt-10" style="display: flex;align-items: flex-start;gap: 10px"> <p ><i class="fa-solid fa-circle-check" style="color: #2a7d2e;"></i><?php echo $product->crop ?></p></div>
                                <hr>
                                @endif

                                @if(!empty($product->dosage))
                                <h6>Dosage & Methods of Application</h6>
                                <div class="mt-10" style="display: flex;align-items: flex-start;gap: 10px">  <p><i class="fa-solid fa-circle-check" style="color: #2a7d2e;"></i><?php echo $product->dosage ?></p></div>
                                <hr>
                                @endif

                                @if(!empty($product->packing))
                                <h6>Available Packing</h6>
                                <div class="mt-10" style="display: flex;align-items: flex-start;gap: 10px">  <p><?php echo $product->packing ?></p></div>
                                <hr>
                                @endif

                                @if(!empty($product->composition))
                                <h6>Composition</h6>
                                <div class="mt-10" style="display: flex;align-items: flex-start;gap: 10px">  <p class="mt-10"><?php echo $product->composition ?></p></div>
                                <hr>
                                @endif

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
                                <div class="block-image wow fadeInDown rad10"> <img src="{{ asset('/images/potassium-img1.jpg') }}" alt="Gallery Image"></div>
                            </div>
                    </div>

                    <div class="col-xl-6 col-lg-6">
                        <!--====== Sidebar Widget Area ======-->
                            <div class="sidebar-widget product-back-img widget-service-nav gray-bg mb-30 wow fadeInUp">
                                <div class="block-image wow fadeInDown rad10"> <img src="{{asset('/images/potassium-img2.jpg') }}" alt="Gallery Image"></div>
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
                @if(!empty($product->video_link))
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="{{ $product->video_link }}"
                        allowfullscreen></iframe>
                </div>
                @endif
            </div>
            <div class="col-xl-6 col-lg-6 prod-cta-bn">
                @if(!empty($product->catelog_link))
                <div class="menu-button d-xl-block">
                    <a href="{{$product->catelog_link}}" target="_blank"
                        class="main-btn primary-btn">Download Catalog </a>
                </div>
                <br />
                @endif
                <div class="menu-button d-xl-block">
                    <a href="{{ route('contact') }}" class="main-btn filled-btn" data-toggle="modal" data-target="#product-modal" class="main-btn secondary-btn">Enquire Now</a>
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
