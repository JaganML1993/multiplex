@extends('client.header')
@section('content')
<style>
    @media (max-width:567px) {
        .pt-100 {
            padding-top: 40px !important;
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
<section class="page-title-area text-white bg_cover desktop-view" style="background-image: url({{ asset('images/goc-header-img1.jpg') }});">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Group of Companies </h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Group of Companies </span>
            </div>
        </div>
    </div>
</section>
<section class="mobile-view">
    <section class="page-title-area text-white bg_cover" style="background-image: url({{ asset('images/goc-header-img1.jpg') }});">
        <div class="container">
            <!--======  Page-title-Inner ======-->
            <div class="page-title-inner text-center">
                <h1 class="page-title">Group of Companies </h1>

            </div>
        </div>
    </section>
    <div class="gd-breadcrumb">
        <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home | </a></span>
        <span class="separator"></span>
        <span class="breadcrumb-entry active">Group of Companies </span>
    </div>
</section>
<!--====== End Page-title-area section ======-->

<section class="features-seciton pt-100 pb-20 goc">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!--====== Features Image Box ======-->
                <div class="features-image-box mb-50 wow fadeInLeft">
                    <img src="{{ asset('images/group/kac1.png') }}" alt="Group of companies">
                </div>
            </div>
            <div class="col-lg-6">
                <!--====== Features Content Box ======-->
                <div class="features-content-box mb-10 wow fadeInRight">
                    <div class="section-title">
                        <h2>Karnataka Agro Chemicals</h2>
                    </div>
                    <div class="goc-sub mb-20">
                        <p>Pioneering Quality Agriculture Solutions</p>
                    </div>
                    <!--<div class="goc-sub-two">-->
                    <!--    <p>Objectives</p>-->
                    <!--</div>-->
                    <p class="mb-15">Our primary mission is to deliver exceptional products that adhere to the nutrient grades and specifications prescribed by local authorities. We provide the farming community with high-quality agricultural inputs that enhance crop nutrition and plant protection.</p>
                    <!-- <a href="about.html" class="main-btn primary-btn">Learn More Us</a> -->
                </div>
                <div class="hero-button mb-30 wow fadeInUp" data-wow-delay=".7s">
                    <a href="{{ route('karnataka-agro-chemicals') }}" class="main-btn filled-btn mb-10">Know More </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features-seciton pt-100 pb-20 bg-dark-goc goc">
    <div class="container">
        <div class="row vision-row">

            <div class="col-lg-6">
                <!--====== Features Content Box ======-->
                <div class="features-content-box mb-10 wow fadeInRight">
                    <div class="section-title">
                        <h2>Multiplex Fertilizers Pvt. Ltd.</h2>
                    </div>
                    <div class="goc-sub mb-20">
                        <p>Commitment to Quality Seeds for Sustainable Agriculture</p>
                    </div>
                    <!--<div class="goc-sub-two">-->
                    <!--    <p>Objectives</p>-->
                    <!--</div>-->
                    <p class="mb-15">Seeds are the fundamental cornerstone of agriculture, serving as both input and output in the farming process. The agricultural sector's success is deeply intertwined with the availability of high-quality seeds, as they profoundly influence crop production. The quality of seeds not only dictates the performance of other inputs but also significantly contributes to overall crop productivity. Many farmers continue to rely on their own seeds, often unaware that using seeds from consecutive generations can lead to reduced viability, vigor, altered genetic traits, and heightened susceptibility to pests and diseases, ultimately resulting in diminished crop yields.</p>
                    <!-- <a href="about.html" class="main-btn primary-btn">Learn More Us</a> -->
                </div>
                <div class="hero-button mb-30 wow fadeInUp" data-wow-delay=".7s">
                    <a href="{{ route('multiplex-fertilizers-pvt-ltd') }}" class="main-btn filled-btn mb-10">Know More </a>
                </div>
            </div>
            <div class="col-lg-6">
                <!--====== Features Image Box ======-->
                <div class="features-image-box mb-50 wow fadeInLeft">
                    <img src="{{ asset('images/group/mfpl-two.jpg') }}" alt="Group of companies">
                </div>
            </div>
        </div>
    </div>
</section>


{{-- <section class="features-seciton pt-100 pb-20  goc">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!--====== Features Image Box ======-->
                <div class="features-image-box mb-50 wow fadeInLeft">
                    <img src="{{ asset('images/group/maipl-three.jpg') }}" alt="Group of companies">
                </div>
            </div>
            <div class="col-lg-6">
                <!--====== Features Content Box ======-->
                <div class="features-content-box mb-50 wow fadeInRight">
                    <div class="section-title">
                        <h2>Mystique Apparels India Pvt. Ltd.</h2>
                    </div>
                    <div class="goc-sub mb-20">
                        <p>Crafting Premium Apparel</p>
                    </div>
                    <p class="mb-35">Established in the year 1996, our state-of-the-art facility is strategically located in Bengaluru. We specialize in the manufacturing of premium brands, focusing on readymade weaving and knitting. With a production capacity that speaks volumes, we proudly produce over 35,000 shirts per month. Our long-standing presence in the industry is a testament to our commitment to quality and excellence.</p>
                    <!-- <a href="about.html" class="main-btn primary-btn">Learn More Us</a> -->
                </div>
            </div>

        </div>
    </div>
</section> --}}


<section class="features-seciton pt-100 pb-20 goc">
    <div class="container">
        <div class="row vision-row">

            <div class="col-lg-6">
                <!--====== Features Content Box ======-->
                <div class="features-content-box mb-10 wow fadeInRight">
                    <div class="section-title">
                        <h2>Multiplex Agricare Pvt. Ltd.</h2>
                    </div>
                    <div class="goc-sub mb-20">
                        <p>Plant Protection Solutions </p>
                    </div>
                    <p class="mb-15">Established in 1997, Multiplex Agricare Pvt. Ltd. is a pioneering force in the pesticide manufacturing industry. Nestled in the heart of the industrial estate in Tumkur, our cutting-edge facility spans a generous 2.5 acres, dedicated exclusively to the production of pesticides in liquid and powder formulations.</p>
                    <!-- <a href="about.html" class="main-btn primary-btn">Learn More Us</a> -->
                </div>
                <div class="hero-button mb-30 wow fadeInUp" data-wow-delay=".7s">
                    <a href="{{ route('multiplex-agricare-pvt-ltd') }}" class="main-btn filled-btn mb-10">Know More </a>
                </div>
            </div>
            <div class="col-lg-6">
                <!--====== Features Image Box ======-->
                <div class="features-image-box mb-50 wow fadeInLeft">
                    <img src="{{ asset('images/group/goc-f1-agricare.jpg') }}" alt="Group of companies">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="features-seciton pt-100 pb-20 bg-dark-goc goc">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!--====== Features Image Box ======-->
                <div class="features-image-box mb-50 wow fadeInLeft">
                    <img src="{{ asset('images/group/goc-f1-movers.jpg') }}" alt="Group of companies">
                </div>
            </div>
            <div class="col-lg-6">
                <!--====== Features Content Box ======-->
                <div class="features-content-box mb-10 wow fadeInRight">
                    <div class="section-title">
                        <h2>Multiplex Movers</h2>
                    </div>
                    <div class="goc-sub mb-20">
                        <p>Reliable Logistic solutions for Multiplex</p>
                    </div>
                    <p class="mb-15">In-house wing, under the banner of Multiplex Movers, offers streamlined logistics solutions tailored to our business needs. Our dedication to simplifying logistics allows us to focus on PAN India operations while we handle the complexities. With our experience, reliability we ensure our products reach timely.</p>
                    <!-- <a href="about.html" class="main-btn primary-btn">Learn More Us</a> -->
                </div>
                <div class="hero-button mb-30 wow fadeInUp" data-wow-delay=".7s">
                    <a href="{{ route('multiplex-movers') }}" class="main-btn filled-btn mb-10">Know More </a>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="features-seciton pt-100 pb-20 goc">
    <div class="container">
        <div class="row vision-row">

            <div class="col-lg-6">
                <!--====== Features Content Box ======-->
                <div class="features-content-box mb-10 wow fadeInRight">
                    <div class="section-title">
                        <h2>Multiplex Bio-Tech Pvt. Ltd.</h2>
                    </div>
                    <div class="goc-sub mb-20">
                        <p>Leading the Way in Agricultural Innovation and Sustainability</p>
                    </div>
                    <p class="mb-15">Multiplex Group has been at the forefront of addressing the evolving needs 
                    of agriculture and allied sectors through innovative products and services. With over two decades
                     of field experience, we embarked on a journey in the year 2000 to establish state-of-the-art bio-tech units.</p>
                    <!-- <a href="about.html" class="main-btn primary-btn">Learn More Us</a> -->
                </div>
                <div class="hero-button mb-30 wow fadeInUp" data-wow-delay=".7s">
                    <a href="{{ route('multiplex-biotech-pvt-ltd') }}" class="main-btn filled-btn mb-10">Know More </a>
                </div>
            </div>
            <div class="col-lg-6">
                <!--====== Features Image Box ======-->
                <div class="features-image-box mb-50 wow fadeInLeft">
                    <img src="{{ asset('images/group/goc-f1-mbt.jpg') }}" alt="Group of companies">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="features-seciton pt-100 pb-20 bg-dark-goc goc">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!--====== Features Image Box ======-->
                <div class="features-image-box mb-50 wow fadeInLeft">
                    <img src="{{ asset('images/group/goc-f1-anshul.jpg') }}" alt="Group of companies">
                </div>
            </div>
            <div class="col-lg-6">
                <!--====== Features Content Box ======-->
                <div class="features-content-box mb-10 wow fadeInRight">
                    <div class="section-title">
                        <h2>Anshul Agro Chemicals</h2>
                    </div>
                    <div class="goc-sub mb-20">
                        <p>Empowering Agriculture, Nurturing Growth</p>
                    </div>
                    <p class="mb-15"> Anshul Agro Chemicals (AAC), founded in 2005, is a dynamic player in the agricultural sector. Based in Bengaluru, we offer a comprehensive range of agri-input solutions for a variety of crops. As a proud member of the Multiplex Group of Companies, with over 40 years of rich agricultural experience, we place farmers and their success at the heart of our mission. With operations spanning across India, our commitment to meeting the unique needs of farming communities remains unwavering. At AAC, we empower agriculture and nurture growth for a sustainable future.</p>
                    <!-- <a href="about.html" class="main-btn primary-btn">Learn More Us</a> -->
                </div>
                <div class="hero-button mb-30 wow fadeInUp" data-wow-delay=".7s">
                    <a href="https://www.anshulagro.com/" target="_blank" class="main-btn filled-btn mb-10">Know More </a>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="features-seciton pt-100 pb-20 goc">
    <div class="container">
        <div class="row vision-row">

            <div class="col-lg-6">
                <!--====== Features Content Box ======-->
                <div class="features-content-box mb-10 wow fadeInRight">
                    <div class="section-title">
                        <h2>Multiplex Urban Green India Pvt. Ltd.</h2>
                    </div>
                    <div class="goc-sub mb-20">
                        <p>Cultivating Green Spaces in Urban Living</p>
                    </div>
                    <!--<div class="goc-sub-two">-->
                    <!--    <p>Objectives</p>-->
                    <!--</div>-->
                    <p class="mb-15">Multiplex Urban Green is a pioneering initiative by the Multiplex Group, aimed at guiding urbanites in creating their vegetable, flower, and medicinal plant gardens within the confines of their homes, whether it's on their balconies, terraces, or backyards. We provide a comprehensive and scientific approach to crop management, ensuring a rewarding gardening experience from seed to harvest.</p>
                    <!-- <a href="about.html" class="main-btn primary-btn">Learn More Us</a> -->
                </div>
                <div class="hero-button mb-30 wow fadeInUp" data-wow-delay=".7s">
                    <a href="https://www.multiplexurbangreen.com/" target="_blank" class="main-btn filled-btn mb-10">Know More </a>
                </div>
            </div>
            <div class="col-lg-6">
                <!--====== Features Image Box ======-->
                <div class="features-image-box mb-50 wow fadeInLeft">
                    <img src="{{ asset('images/group/goc-f1-mug.jpg') }}" alt="Group of companies">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="features-seciton pt-100 pb-20 bg-dark-goc goc">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!--====== Features Image Box ======-->
                <div class="features-image-box mb-50 wow fadeInLeft">
                    <img src="{{ asset('images/group/goc-f1-mf2.jpg') }}" alt="Group of companies">
                </div>
            </div>
            <div class="col-lg-6">
                <!--====== Features Content Box ======-->
                <div class="features-content-box mb-10 wow fadeInRight">
                    <div class="section-title">
                        <h2>Multiplex Farming</h2>
                    </div>
                    <div class="goc-sub mb-20">
                        <p>Collaborative Agriculture: Transforming Barren Lands into Productive Green Fields</p>
                    </div>
                    <!--<div class="goc-sub-two">-->
                    <!--    <p>Objectives</p>-->
                    <!--</div>-->
                    <p class="mb-15">Multiplex proudly presents "Collaborative Agriculture" for passionate agriculturists. Our mission is to partner in the development and transformation of barren and semi-cultivated land into thriving, green, and productive agricultural landscapes.</p>
                    <!-- <a href="about.html" class="main-btn primary-btn">Learn More Us</a> -->
                </div>
                <div class="hero-button mb-30 wow fadeInUp" data-wow-delay=".7s">
                    <a href="{{ route('multiplex-farming') }}" class="main-btn filled-btn mb-10">Know More </a>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="features-seciton pt-100 pb-20 goc">
    <div class="container">
        <div class="row vision-row">
            <div class="col-lg-6">
                <!--====== Features Content Box ======-->
                <div class="features-content-box mb-10 wow fadeInRight">
                    <div class="section-title">
                        <h2>GPS Institute of Agricultural Management</h2>
                    </div>
                    <div class="goc-sub mb-20">
                        <p>Nurturing Agricultural Experts and Entrepreneurs</p>
                    </div>
                    <!--<div class="goc-sub-two">-->
                    <!--    <p>Objectives</p>-->
                    <!--</div>-->
                    <p class="mb-15">Rural India is grappling with a significant challenge as its youth flock to urban areas in pursuit of menial jobs, leaving vast agricultural lands abandoned and elderly parents struggling. This migration has led to a shortage of skilled labor in agriculture and a dearth of able-bodied youth to work in the fields. To address this pressing issue, farmers in rural India are turning to technological innovations, and Multiplex is at the forefront of this transformation.</p>
                    <!-- <a href="about.html" class="main-btn primary-btn">Learn More Us</a> -->
                </div>
                <div class="hero-button mb-30 wow fadeInUp" data-wow-delay=".7s">
                    <a href="https://www.gpsioam.org/" target="_blank" class="main-btn filled-btn mb-10">Know More </a>
                </div>
            </div>
            <div class="col-lg-6">
                <!--====== Features Image Box ======-->
                <div class="features-image-box mb-50 wow fadeInLeft">
                    <img src="{{ asset('images/group/goc-f1-gps.jpg') }}" alt="Group of companies">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="features-seciton pt-100 pb-20 bg-dark-goc goc">
    <div class="container">
        <div class="row ">
            <div class="col-lg-6">
                <!--====== Features Image Box ======-->
                <div class="features-image-box mb-50 wow fadeInLeft">
                    <img src="{{ asset('images/group/goc-f1-msf.jpg') }}" alt="Group of companies">
                </div>
            </div>
            <div class="col-lg-6">
                <!--====== Features Content Box ======-->
                <div class="features-content-box mb-10 wow fadeInRight">
                    <div class="section-title">
                        <h2>Multiplex Safe & Farm Fresh</h2>
                    </div>
                    <div class="goc-sub mb-20">
                        <p>Nature’s Bounty at your Doorstep</p>
                    </div>
                    <p class="mb-15">Established in 2016 and nestled in the vibrant city of Bengaluru, Multiplex Safe & Farm Fresh is on a mission to bridge the growing gap between urbanites and chemical-free, wholesome produce. As urban life gets busier, the desire for healthy, untainted fruits and vegetables has never been more significant. We've embraced this need and are dedicated to bringing the freshness of the organic farm right to your doorstep.</p>
                    <!-- <a href="about.html" class="main-btn primary-btn">Learn More Us</a> -->
                </div>
                <div class="hero-button mb-30 wow fadeInUp" data-wow-delay=".7s">
                    <a href="{{ route('multiplex-safe-and-farm-fresh') }}" class="main-btn filled-btn mb-10">Know More </a>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="features-seciton pt-100 pb-20 goc">
    <div class="container">
        <div class="row vision-row">
            <div class="col-lg-6">
                <!--====== Features Content Box ======-->
                <div class="features-content-box mb-10 wow fadeInRight">
                    <div class="section-title">
                        <h2>Agriplex Private Limited</h2>
                    </div>
                    <div class="goc-sub mb-20">
                        <p>Delivering Agri Solutions at Farmer’s Doorstep</p>
                    </div>
                    <!--<div class="goc-sub-two">-->
                    <!--    <p>Objectives</p>-->
                    <!--</div>-->
                    <p class="mb-15">Established in 2016 and headquartered in Bengaluru, Agriplex Private Limited is an innovative e-commerce platform with a clear vision: "To be a nationwide enabler for delivering quality Farming Inputs and agriculture Best Practices Services to Farmers at their doorstep while promoting a sustainable farming future."</p>
                    <!-- <a href="about.html" class="main-btn primary-btn">Learn More Us</a> -->
                </div>
                <div class="hero-button mb-30 wow fadeInUp" data-wow-delay=".7s">
                    <a href="https://www.agriplexindia.com/" target="_blank" class="main-btn filled-btn mb-10">Know More </a>
                </div>
            </div>
            <div class="col-lg-6">
                <!--====== Features Image Box ======-->
                <div class="features-image-box mb-50 wow fadeInLeft">
                    <img src="{{ asset('images/group/goc-f1-agriplex.jpg') }}" alt="Group of companies">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="features-seciton pt-100 pb-20 bg-dark-goc goc">
    <div class="container">
        <div class="row ">
            <div class="col-lg-6">
                <!--====== Features Image Box ======-->
                <div class="features-image-box mb-50 wow fadeInLeft">
                    <img src="{{ asset('images/group/goc-f1-drone.jpg') }}" alt="Group of companies">
                </div>
            </div>
            <div class="col-lg-6">
                <!--====== Features Content Box ======-->
                <div class="features-content-box mb-10 wow fadeInRight">
                    <div class="section-title">
                        <h2>Multiplex Drone Pvt. Ltd.</h2>
                    </div>
                    <div class="goc-sub mb-20">
                        <p>Elevating Agriculture Through Innovative Drone Solutions</p>
                    </div>
                    <!--<div class="goc-sub-two">-->
                    <!--    <p>Objectives</p>-->
                    <!--</div>-->
                    <p class="mb-15">Multiplex Drone Pvt. Ltd., incorporated on July 17, 2019, has emerged as a leading manufacturer and service provider in the field of agricultural drones. As a DGCA approved RPTO (Remotely Piloted Aircraft System Training Organization), we are committed to leveraging drone technology to revolutionize aerial crop spraying for the farming community. Our roots trace back to the esteemed Multiplex Group of Companies, with a rich legacy in agriculture spanning five decades.</p>
                    <!-- <a href="about.html" class="main-btn primary-btn">Learn More Us</a> -->
                </div>
                <div class="hero-button mb-30 wow fadeInUp" data-wow-delay=".7s">
                    <a href="https://www.multiplexdrone.com" target="_blank" class="main-btn filled-btn mb-10">Know More </a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="features-seciton pt-100 pb-20 goc">
    <div class="container">
        <div class="row vision-row">
            <div class="col-lg-6">
                <!--====== Features Content Box ======-->
                <div class="features-content-box mb-10 wow fadeInRight">
                    <div class="section-title">
                        <h2>Multiplex Forest Factree</h2>
                    </div>
                    <div class="goc-sub mb-20">
                        <p>Advancing Quality Planting Material and Sustainable Agroforestry</p>
                    </div>
                    <!--<div class="goc-sub-two">-->
                    <!--    <p>Objectives</p>-->
                    <!--</div>-->
                    <p class="mb-15"> Our primary objective is to produce uniform, healthy, and disease-free planting materials through seeds or vegetative methods. These materials play a crucial role in enhancing productivity for various stakeholders.</p>
                    <!-- <a href="about.html" class="main-btn primary-btn">Learn More Us</a> -->
                </div>
                <div class="hero-button mb-30 wow fadeInUp" data-wow-delay=".7s">
                    <a href="{{ route('multiplex-forest-factree') }}" class="main-btn filled-btn mb-10">Know More </a>
                </div>
            </div>
            <div class="col-lg-6">
                <!--====== Features Image Box ======-->
                <div class="features-image-box mb-50 wow fadeInLeft">
                    <img src="{{ asset('images/group/goc-f1-factree.jpg') }}" alt="Group of companies">
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