@extends('client.header')
@section('content')
    @include('client.product-enquiry')
    
    <style>
        @media (max-width:567px) {
         .prod-main-title h3 {
            font-size:20px;
            font-weight:700;
            text-align:center;
        }
        
        .prod-cta-bn {
            padding-top: 30px;
            text-align: center;
        }
    }
    
    .prod-main-title h3 {
            font-size:25px;
            font-weight:700;
        }
        
        .cta-image-box1 img{
            border-top-right-radius:20px;
            border-top-left-radius:20px;
        }
    </style>

    <!--====== Start CTA Section  ======-->
    <section class="cta-bg-section bg_cover pt-50 p-r z-1"
        style="background-image: url({{ url('assets/images/bg33.jpg') }});">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!--======  CTA Content Box  ======-->
                    <div class="cta-content-box text-white mb-50 prod-main-title wow fadeInLeft">
                        <!--====== Section-title ======-->
                        <div class="section-title mb-20">
                            <h3>{{ $product->name }}</h3>
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
                                    <img class="d-block w-100" src="{{ url('') . '/' . $product->front_image }}"
                                        alt="Front image">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ url('') . '/' . $product->back_image }}"
                                        alt="Back Image">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
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

        .single-pricing-item:hover .pricing-body ul li {
            color: #000 !important;
        }

        .pricing-section ul {

            list-style: none;
            padding: 0;
        }

        .pricing-section li {
            padding-left: 1em;
        }

        .pricing-section li:before {
            content: "\f06c"; /* Unicode leaf character */
            font-family: FontAwesome;
            display: inline-block;
            margin-left: calc(1em * -1);
            color: #2a7d2e !important;
            margin-right: 0.5rem;

        }

        .defi-prod ul {

            list-style: none;
            padding: 0;
        }

        .defi-prod li {
            padding-left: 1em;
        }

        .defi-prod li:before {
            content: "\f058";
            font-family: FontAwesome;
            display: inline-block;
            margin-left: calc(1em * -1);
            color: #2a7d2e !important;
            margin-right: 0.5rem;

        }

        .single-pricing-item .pricing-body .pricing-title h2.title {
            padding-bottom: 29px;
            border-bottom: 1px solid rgba(11, 61, 44, 0.1);
            font-size: 24px;
            font-weight: 600;
            line-height: 1.3;
        }

        .pricing-title h2.title {
            font-size: 24px;
            font-weight: 600;
            line-height: 1.3;
        }

        h3 {
            font-size: 18px;
            font-weight: 500;
            line-height: 1.3;
            margin-bottom:15px;
        }
        
        .sub-head p {
            font-size: 18px;
            font-weight: 500;
            color: #004827;
            font-family: "Montserrat", sans-serif;
            margin-bottom: 10px;
            margin-top: 20px;
            border-top: 1px solid rgba(11, 61, 44, 0.1);
            padding-top:16px;
        }

    </style>



    <!--====== Start Benefits Section ======-->
    @if (!empty($product->benefits))
        <section class="pricing-section pt-30 pb-10">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <!--====== Pricing Item ======-->
                        <div class="single-pricing-item mb-40 wow fadeInUp" data-wow-delay=".2s">

                            <div class="pricing-body">
                                <div class="pricing-title mb-10">
                                    <h2 class="title">Benefits</h2>
                                </div>
                                <p><?php echo $product->benefits; ?></p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    @endif
    <!--====== End Benefits Section ======-->

    <!--====== Start Special Features Section ======-->
    @if (!empty($product->special_features))
        <section class="pricing-section pt-10 pb-10">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <!--====== Pricing Item ======-->
                        <div class="single-pricing-item mb-40 wow fadeInUp" data-wow-delay=".2s">

                            <div class="pricing-body">
                                <div class="pricing-title mb-10">
                                    <h2 class="title">Special Features</h2>
                                </div>
                                <p><?php echo $product->special_features; ?></p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    @endif
    <!--====== End Special Features Section ======-->


    <!--====== Start Specification Section ======-->
    <section class="pricing-section pt-10 pb-30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <!--====== Pricing Item ======-->
                    <div class="single-pricing-item mb-10 wow fadeInUp" data-wow-delay=".2s">
                        <div class="pricing-body sub-head">
                            <div class="pricing-title mb-10">
                                <h2 class="title" style="border-bottom: none;">Specification</h2>
                            </div>

                            <!-- Special Features -->
                            {{-- @if (!empty($product->special_features))
                        <h6>Special Features</h6>
                        <div class="mt-10" style="display: flex; align-items: flex-start; gap: 10px">
                            <p class="mt-10"><?php echo $product->special_features; ?></p>
                        </div>
                        <hr>
                        @endif --}}

                            @if (!empty($product->composition))
                                <?php echo $product->composition; ?>
                            @endif

                            <!-- @if (!empty($product->active_ingredients))
    <h6>Active Incredients</h6>
                            <div class="mt-10" style="display: flex;align-items: flex-start;gap: 10px">
                                <p class="mt-10"><?php echo $product->active_ingredients; ?></p>
                            </div>
                            <hr>
    @endif

                            @if (!empty($product->mode_of_action))
    <h6>Mode Of Action</h6>
                            <div class="mt-10" style="display: flex; align-items: flex-start; gap: 10px">
                                <p class="mt-10"><?php echo $product->mode_of_action; ?></p>
                            </div>
                            <hr>
    @endif

                            @if (!empty($product->crop))
    <h6>Crop</h6>
                            <div class="mt-10" style="display: flex;align-items: flex-start;gap: 10px">
                                <p><?php echo $product->crop; ?></p>
                            </div>
                            <hr>
    @endif

                            @if (!empty($product->dosage))
    <h6>Dosage & Methods of Application</h6>
                            <div class="mt-10" style="display: flex;align-items: flex-start;gap: 10px">
                                <p><?php echo $product->dosage; ?></p>
                            </div>
                            <hr>
    @endif

                            @if (!empty($product->precautions))
    <h6>Precautions</h6>
                            <div class="mt-10" style="display: flex; align-items: flex-start; gap: 10px">
                                <p class="mt-10"><?php echo $product->precautions; ?></p>
                            </div>
                            <hr>
    @endif

                            @if (!empty($product->time_of_erection))
    <h6>Time of Erection</h6>
                            <div class="mt-10" style="display: flex; align-items: flex-start; gap: 10px">
                                <p class="mt-10"><?php echo $product->time_of_erection; ?></p>
                            </div>
                            <hr>
    @endif

                            @if (!empty($product->plant_type))
    <h6>Plant Type</h6>
                            <div class="mt-10" style="display: flex; align-items: flex-start; gap: 10px">
                                <p class="mt-10"><?php echo $product->plant_type; ?></p>
                            </div>
                            <hr>
    @endif

                            @if (!empty($product->plant_height))
    <h6>Plant Height</h6>
                            <div class="mt-10" style="display: flex; align-items: flex-start; gap: 10px">
                                <p class="mt-10"><?php echo $product->plant_height; ?></p>
                            </div>
                            <hr>
    @endif

                            @if (!empty($product->duration))
    <h6>Duration</h6>
                            <div class="mt-10" style="display: flex; align-items: flex-start; gap: 10px">
                                <p class="mt-10"><?php echo $product->duration; ?></p>
                            </div>
                            <hr>
    @endif

                            @if (!empty($product->fruit_shape))
    <h6>Fruit Shape</h6>
                            <div class="mt-10" style="display: flex; align-items: flex-start; gap: 10px">
                                <p class="mt-10"><?php echo $product->fruit_shape; ?></p>
                            </div>
                            <hr>
    @endif

                            @if (!empty($product->fruit_weight))
    <h6>Fruit Weight</h6>
                            <div class="mt-10" style="display: flex; align-items: flex-start; gap: 10px">
                                <p class="mt-10"><?php echo $product->fruit_weight; ?></p>
                            </div>
                            <hr>
    @endif

                            @if (!empty($product->fruit_color))
    <h6>Fruit Color</h6>
                            <div class="mt-10" style="display: flex; align-items: flex-start; gap: 10px">
                                <p class="mt-10"><?php echo $product->fruit_color; ?></p>
                            </div>
                            <hr>
    @endif

                            @if (!empty($product->fruit_length))
    <h6>Fruit Length</h6>
                            <div class="mt-10" style="display: flex; align-items: flex-start; gap: 10px">
                                <p class="mt-10"><?php echo $product->fruit_length; ?></p>
                            </div>
                            <hr>
    @endif

                            @if (!empty($product->crud_weight))
    <h6>Crud Weight</h6>
                            <div class="mt-10" style="display: flex; align-items: flex-start; gap: 10px">
                                <p class="mt-10"><?php echo $product->crud_weight; ?></p>
                            </div>
                            <hr>
    @endif

                            @if (!empty($product->pod_length))
    <h6>Pod Length</h6>
                            <div class="mt-10" style="display: flex; align-items: flex-start; gap: 10px">
                                <p class="mt-10">{{ $product->pod_length }}</p>
                            </div>
                            <hr>
    @endif

                            @if (!empty($product->flowering))
    <h6>Flowering</h6>
                            <div class="mt-10" style="display: flex; align-items: flex-start; gap: 10px">
                                <p class="mt-10">{{ $product->flowering }}</p>
                            </div>
                            <hr>
    @endif

                            @if (!empty($product->fruit_bearing))
    <h6>Fruit Bearing</h6>
                            <div class="mt-10" style="display: flex; align-items: flex-start; gap: 10px">
                                <p class="mt-10">{{ $product->fruit_bearing }}</p>
                            </div>
                            <hr>
    @endif

                            @if (!empty($product->root_length))
    <h6>Root Length</h6>
                            <div class="mt-10" style="display: flex; align-items: flex-start; gap: 10px">
                                <p class="mt-10">{{ $product->root_length }}</p>
                            </div>
                            <hr>
    @endif

                            @if (!empty($product->harvesting))
    <h6>Harvesting</h6>
                            <div class="mt-10" style="display: flex; align-items: flex-start; gap: 10px">
                                <p class="mt-10">{{ $product->harvesting }}</p>
                            </div>
                            <hr>
    @endif

                            @if (!empty($product->package_of_practices))
    <h6>Package Of Practices</h6>
                            <div class="mt-10" style="display: flex; align-items: flex-start; gap: 10px">
                                <p class="mt-10">{{ $product->package_of_practices }}</p>
                            </div>
                            <hr>
    @endif

                            @if (!empty($product->packing))
    <h6>Available Packing</h6>
                            <div class="mt-10" style="display: flex;align-items: flex-start;gap: 10px">
                                <p><?php echo $product->packing; ?></p>
                            </div>
                            <hr>
    @endif

                            @if (!empty($product->note))
    <h6>Note</h6>
                            <div class="mt-10" style="display: flex; align-items: flex-start; gap: 10px">
                                <p class="mt-10"><?php echo $product->note; ?></p>
                            </div>
                            <hr>
    @endif -->

                            <!-- --------------------------------------------------- -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Specification Section ======-->


  @if(!empty($product->type_of_deficiency) || !empty($product->image1) || !empty($product->image2))
    <section class="service-details-section pt-50 pb-50 bg-dark-home">
        <div class="container">
            <div class="pricing-title mb-30 text-center">
                <h2 class="title">{{ $product->type_of_deficiency ?? '' }}</h2>
            </div>
            <div class="row">
                @if(!empty($product->image1))
                <div class="col-xl-6 col-lg-6">
                    <!--====== Sidebar Widget Area ======-->
                    <div class="sidebar-widget product-back-img widget-service-nav gray-bg mb-30 wow fadeInUp">
                        <div class="block-image wow fadeInDown rad10"> <img src="{{ url('') . '/' . $product->image1 }}"
                                alt="Gallery Image"></div>
                    </div>
                </div>
                @endif

                @if(!empty($product->image2))
                <div class="col-xl-6 col-lg-6">
                    <!--====== Sidebar Widget Area ======-->
                    <div class="sidebar-widget product-back-img widget-service-nav gray-bg mb-30 wow fadeInUp">
                        <div class="block-image wow fadeInDown rad10"> <img src="{{ url('') . '/' . $product->image2 }}"
                                alt="Gallery Image"></div>
                    </div>
                </div>
                @endif

                <div class="col-xl-6 col-lg-6 padprod defi-prod">
                    <div class="service-info-wrapper pr-lg-40 wow fadeInDown">
                        <h6 class="pb-20"> {{ $product->role_of_deficiency ?? '' }}</h6>
                        {!! $product->role_description ?? '' !!}

                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 padprod defi-prod">
                    <div class="service-info-wrapper pr-lg-40 wow fadeInDown">
                        <h6 class="pb-20"> {{ $product->deficiency ?? '' }}</h6>
                        {!! $product->deficiency_description ?? '' !!}
                    </div>
                </div>


            </div>
        </div>
    </section>
    @endif
    <br>

    <section class="service-details-section pt-10">
    <div class="container text-center">
        <div class="row">
            @if (!empty($product->video_link))
            <div class="col-xl-6 col-lg-6">
               
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="{{ $product->video_link }}"
                            allowfullscreen></iframe>
                    </div>
                
            </div>
            @endif

            <div class="@if (!empty($product->video_link)) col-xl-6 col-lg-6 @else col-xl-12 col-lg-12 @endif prod-cta-bn">
                @if (!empty($product->catelog_link))
                    <div class="menu-button d-xl-block mb-3">
                        <a href="{{ url($product->catelog_link) }}" target="_blank"
                            class="main-btn primary-btn">Product Leaflet</a>
                    </div>
                @endif

                <div class="menu-button d-xl-block">
                    <a href="{{ route('contact') }}" class="main-btn filled-btn" data-toggle="modal"
                        data-target="#product-modal">Enquire Now</a>
                </div>
            </div>

        </div>
    </div>
</section>


    {{-- <section class="service-details-section pt-10">
        <div class="container">
            <div class="row">

                <div class="col-xl-6 col-lg-6">
                    @if (!empty($product->video_link))
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="{{ $product->video_link }}"
                                allowfullscreen></iframe>
                        </div>
                    @endif
                </div>
                <div class="col-xl-6 col-lg-6 prod-cta-bn">
                    @if (!empty($product->catelog_link))
                        <div class="menu-button d-xl-block">
                            <a href="{{ url($product->catelog_link) }}" target="_blank"
                                class="main-btn primary-btn">Product Leaflet </a>
                        </div>
                        <br />
                    @endif
                    <div class="menu-button d-xl-block">
                        <a href="{{ route('contact') }}" class="main-btn filled-btn" data-toggle="modal"
                            data-target="#product-modal" class="main-btn secondary-btn">Enquire Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    <br />
@endsection
@section('scripts')
    @parent
    <script>
        function validateDomainProduct() {
            var emailInput2 = document.getElementById('emailField2');
            var emailValue2 = emailInput2.value;

            // Simplified regular expression for email validation
            var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(com|in|org|net|gov|edu|co)$/;

            if (!emailRegex.test(emailValue2)) {
                emailInput2.setCustomValidity("Please enter a valid email address.");
            } else {
                emailInput2.setCustomValidity('');
            }
        }   
    </script>
@endsection
