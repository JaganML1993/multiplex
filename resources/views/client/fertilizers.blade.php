@extends('client.header')
@section('content')

<!--====== Start Page-title-area section ======-->
<section class="page-title-area text-white bg_cover"
    style="background-image: url(assets/images/fertilizer-header-img.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Fertilizers</h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="index.html">Home</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry"><a href="{{ route('products') }}">Products</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Fertilizers</span>
            </div>
        </div>
    </div>
</section>
<!--====== End Page-title-area section ======-->


<!--====== Start Gallery section ======-->
<section class="gallery-section pt-95 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-8">
                <!--====== Section Title ======-->
                <div class="section-title mb-40">

                    <h2>Fertilizers</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!--====== Filter Button ======-->
                <ul class="project-filter mb-50">
                    <li class="active" data-filter="*">Show All</li>
                    <li data-filter=".cat-1">Major Nutrients</li>
                    <li data-filter=".cat-2">Secondary Nutrients</li>
                    <li data-filter=".cat-3">Micro Nutrients</li>
                    <li data-filter=".cat-4">Muti-Micronutrient</li>
                    <li data-filter=".cat-5">Bio-Stimulants</li>
                </ul>
            </div>
        </div>
        <div class="row gallery-active prod-img-border">
            <!-- major-nutrients -->
            <div class="col-md-4 item cat-1">
                <!--====== Single Gallery Item ======-->
                <div class="single-project-item mb-30 wow fadeInLeft">
                    <div class="project-img">
                         <a href="{{route('multi-pk')}}"><img src="assets/images/products/fertilizers/major-nutrients/multi-pk.jpg" alt="Gallery Image"></a>
                        <div class="hover-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="{{route('multi-pk')}}">Multi PK</a></h3>
                            </div>
                            <a href="{{route('multi-pk')}}" class="icon-btn"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 item cat-1">
                <!--====== Single Gallery Item ======-->
                <div class="single-project-item mb-30 wow fadeInLeft">
                    <div class="project-img">
                        <img src="assets/images/products/fertilizers/major-nutrients/np-plus.jpg" alt="Gallery Image">
                        <div class="hover-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="np-plus.html">NP-PLUS</a></h3>
                            </div>
                            <a href="np-plus.html" class="icon-btn"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 item cat-1">
                <!--====== Single Gallery Item ======-->
                <div class="single-project-item mb-30 wow fadeInLeft">
                    <div class="project-img">
                        <img src="assets/images/products/fertilizers/major-nutrients/only-k.jpg" alt="Gallery Image">
                        <div class="hover-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="only-k.html">Only-K</a></h3>
                            </div>
                            <a href="only-k.html" class="icon-btn"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 item cat-1">
                <!--====== Single Gallery Item ======-->
                <div class="single-project-item mb-30 wow fadeInLeft">
                    <div class="project-img">
                        <img src="assets/images/products/fertilizers/major-nutrients/pramukh.jpg" alt="Gallery Image">
                        <div class="hover-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="pramukh.html">Pramukh</a></h3>
                            </div>
                            <a href="pramukh.html" class="icon-btn"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 item cat-1">
                <!--====== Single Gallery Item ======-->
                <div class="single-project-item mb-30 wow fadeInLeft">
                    <div class="project-img">
                        <img src="assets/images/products/fertilizers/major-nutrients/trishakthi.jpg"
                            alt="Gallery Image">
                        <div class="hover-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="trishakthi.html">Trishakthi</a></h3>
                            </div>
                            <a href="trishakthi.html" class="icon-btn"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 item cat-1">
                <!--====== Single Gallery Item ======-->
                <div class="single-project-item mb-30 wow fadeInLeft">
                    <div class="project-img">
                        <img src="assets/images/products/fertilizers/major-nutrients/twin.jpg" alt="Gallery Image">
                        <div class="hover-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="twin.html">Twin</a></h3>
                            </div>
                            <a href="twin.html" class="icon-btn"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- secondary-nutrients -->
            <div class="col-md-4 item cat-2">
                <!--====== Single Gallery Item ======-->
                <div class="single-project-item mb-30 wow fadeInLeft">
                    <div class="project-img">
                        <img src="assets/images/products/fertilizers/secondary-nutrients/chlorocal.jpg"
                            alt="Gallery Image">
                        <div class="hover-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="chlorocal.html">Chlorocal</a></h3>
                            </div>
                            <a href="chlorocal.html" class="icon-btn"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 item cat-2">
                <!--====== Single Gallery Item ======-->
                <div class="single-project-item mb-30 wow fadeInLeft">
                    <div class="project-img">
                        <img src="assets/images/products/fertilizers/secondary-nutrients/fertisulph.jpg"
                            alt="Gallery Image">
                        <div class="hover-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="fertisulph.html">Fertisulph 90WG</a></h3>
                            </div>
                            <a href="fertisulph.html" class="icon-btn"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 item cat-2">
                <!--====== Single Gallery Item ======-->
                <div class="single-project-item mb-30 wow fadeInLeft">
                    <div class="project-img">
                        <img src="assets/images/products/fertilizers/secondary-nutrients/fertisulph-g.jpg"
                            alt="Gallery Image">
                        <div class="hover-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="chlorocal.html">FERTISULPH-G</a></h3>
                            </div>
                            <a href="chlorocal.html" class="icon-btn"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 item cat-2">
                <!--====== Single Gallery Item ======-->
                <div class="single-project-item mb-30 wow fadeInLeft">
                    <div class="project-img">
                        <img src="assets/images/products/fertilizers/secondary-nutrients/liquid-sulphur.jpg"
                            alt="Gallery Image">
                        <div class="hover-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="fertisulph.html">Liquid Sulphur</a></h3>
                            </div>
                            <a href="fertisulph.html" class="icon-btn"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 item cat-2">
                <!--====== Single Gallery Item ======-->
                <div class="single-project-item mb-30 wow fadeInLeft">
                    <div class="project-img">
                        <img src="assets/images/products/fertilizers/secondary-nutrients/magnesium-sulphate.jpg"
                            alt="Gallery Image">
                        <div class="hover-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="chlorocal.html">Magnesium Sulphate</a></h3>
                            </div>
                            <a href="chlorocal.html" class="icon-btn"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 item cat-2">
                <!--====== Single Gallery Item ======-->
                <div class="single-project-item mb-30 wow fadeInLeft">
                    <div class="project-img">
                        <img src="assets/images/products/fertilizers/secondary-nutrients/moti-mg.jpg"
                            alt="Gallery Image">
                        <div class="hover-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="fertisulph.html">Moti Mg</a></h3>
                            </div>
                            <a href="fertisulph.html" class="icon-btn"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 item cat-2">
                <!--====== Single Gallery Item ======-->
                <div class="single-project-item mb-30 wow fadeInLeft">
                    <div class="project-img">
                        <img src="assets/images/products/fertilizers/secondary-nutrients/multical-g.jpg"
                            alt="Gallery Image">
                        <div class="hover-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="chlorocal.html">MULTICAL-G</a></h3>
                            </div>
                            <a href="chlorocal.html" class="icon-btn"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 item cat-2">
                <!--====== Single Gallery Item ======-->
                <div class="single-project-item mb-30 wow fadeInLeft">
                    <div class="project-img">
                        <img src="assets/images/products/fertilizers/secondary-nutrients/multimag.jpg"
                            alt="Gallery Image">
                        <div class="hover-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="fertisulph.html">MULTIMAG</a></h3>
                            </div>
                            <a href="fertisulph.html" class="icon-btn"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 item cat-2">
                <!--====== Single Gallery Item ======-->
                <div class="single-project-item mb-30 wow fadeInLeft">
                    <div class="project-img">
                        <img src="assets/images/products/fertilizers/secondary-nutrients/nitrocal.jpg"
                            alt="Gallery Image">
                        <div class="hover-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="chlorocal.html">NITROCAL - Calcium Nitrate</a></h3>
                            </div>
                            <a href="chlorocal.html" class="icon-btn"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 item cat-2">
                <!--====== Single Gallery Item ======-->
                <div class="single-project-item mb-30 wow fadeInLeft">
                    <div class="project-img">
                        <img src="assets/images/products/fertilizers/secondary-nutrients/nitrocal1kg.jpg"
                            alt="Gallery Image">
                        <div class="hover-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="fertisulph.html">Nitrocal-1kg</a></h3>
                            </div>
                            <a href="fertisulph.html" class="icon-btn"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 item cat-2">
                <!--====== Single Gallery Item ======-->
                <div class="single-project-item mb-30 wow fadeInLeft">
                    <div class="project-img">
                        <img src="assets/images/products/fertilizers/secondary-nutrients/pusti-ca.jpg"
                            alt="Gallery Image">
                        <div class="hover-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="chlorocal.html">Pusti Ca</a></h3>
                            </div>
                            <a href="chlorocal.html" class="icon-btn"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 item cat-2">
                <!--====== Single Gallery Item ======-->
                <div class="single-project-item mb-30 wow fadeInLeft">
                    <div class="project-img">
                        <img src="assets/images/products/fertilizers/secondary-nutrients/samruddhi-gold.jpg"
                            alt="Gallery Image">
                        <div class="hover-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="fertisulph.html">SAMRUDDHI GOLD</a></h3>
                            </div>
                            <a href="fertisulph.html" class="icon-btn"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 item cat-2">
                <!--====== Single Gallery Item ======-->
                <div class="single-project-item mb-30 wow fadeInLeft">
                    <div class="project-img">
                        <img src="assets/images/products/fertilizers/secondary-nutrients/samruddhi-plus.jpg"
                            alt="Gallery Image">
                        <div class="hover-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="chlorocal.html">Samruddhi Plus</a></h3>
                            </div>
                            <a href="chlorocal.html" class="icon-btn"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 item cat-2">
                <!--====== Single Gallery Item ======-->
                <div class="single-project-item mb-30 wow fadeInLeft">
                    <div class="project-img">
                        <img src="assets/images/products/fertilizers/secondary-nutrients/samruddhi.jpg"
                            alt="Gallery Image">
                        <div class="hover-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="fertisulph.html">SAMRUDDHI</a></h3>
                            </div>
                            <a href="fertisulph.html" class="icon-btn"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--====== End Gallery section ======-->
<br /><br /><br />

@endsection
@section('scripts')
@parent
<script type="text/javascript">

</script>
@endsection
