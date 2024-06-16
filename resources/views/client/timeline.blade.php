@extends('client.header')
@section('content')
<style>
        .desktop-view {
        display: block !important;
    }

    .mobile-view {
        display: none !important;
    }
    
    .testimonial-slider-one .slick-dots {
        text-align: center;
        margin-top: 5px;
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
    style="background-image: url(assets/images/50-years-timeline-header-img1.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Our 50 Years Journey </h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home </a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Our 50 Years Journey </span>
            </div>
        </div>
    </div>
</section>
<section class="mobile-view ">
<section class="page-title-area text-white bg_cover"
    style="background-image: url(assets/images/50-years-timeline-header-img1.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Our 50 Years Journey </h1>
           
        </div>
    </div>
</section> 
<div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home | </a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Our 50 Years Journey </span>
            </div>
</section>
<!--====== End Page-title-area section ======-->

<style>
    .slick-dots li{
    display: none;
}

    .testimonial-slider-one .slick-arrow {
        position: absolute;
        top: 40%;
        -webkit-transform: translateY(-42%);
        transform: translateY(-42%);
        cursor: pointer;
        z-index: 1;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        font-size: 20px;
        /* border: 1px solid rgba(0, 0, 0, 0.1); */
        -webkit-transition: all 0.3s ease-out 0s;
        transition: all 0.3s ease-out 0s;
        background-color: #ffffff;
    }
      @media (max-width:567px){
  
    .testimonial-slider-one .slick-arrow.prev {
    left: 20px;
}
.testimonial-slider-one .slick-arrow.next {
    right: 20px;
}
.testimonial-slider-one .slick-arrow {
    width: 35px;
    height: 35px;}
}

</style>

<section class="gallery-section-minus1 pt-50 pb-20 ptbmob-30 bg-dark-infra">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                    <div class="section-title mb-15">
                        <h2>Multiplex Group: Five Decades of Transforming Agriculture and Nurturing Sustainability</h2>
                    </div>
                <div class="project-content-box mb-20 wow fadeInRight">
                    <p class="mb-30">For fifty years, Multiplex Group has been a trailblazer in balanced crop nutrition management, sustainable agriculture, and food production. Our steadfast dedication to these ideals has not only gained recognition but has also inspired widespread adoption by government authorities, agricultural organizations, and universities, establishing us as a leading force in advanced agricultural manufacturing.</p>
                    
                 <div class="section-title mb-15">
                        <h2>Soil Health</h2>
                 </div>
                    <p class="mb-15">Our journey commenced in 1974 with a visionary approach to soil health. This spirit catalyzed state and union governments to launch vital soil health missions, transforming agricultural practices and promoting eco-friendly methods.</p>
                    <p class="mb-30">Our mission revolves around enhancing soil organic carbon content and introducing biological products for sustainable and eco-friendly farming. This commitment led to pioneering innovations, including Bio-pesticides, Bio-fungicides, Bio-organic plant growth promoters, Bio-stimulants, Root growth promoters, and solutions enhancing seed germination rates. These innovations have significantly reduced chemical dependency in agriculture, fostering safer and more sustainable practices.</p>
                
                 <div class="section-title mb-15">
                        <h2>Holistic Agricultural Involvement</h2>
                 </div>
                    <p class="mb-15">With five decades of experience, Multiplex has played a pivotal role in all aspects of agriculture, from education and research to extension services, input production, and marketing. We are dedicated to developing region-specific solutions tailored to diverse geographies and agro-climatic conditions, ensuring farmers have access to effective solutions.</p>
                    <p class="mb-15">Today, we are recognized as "Total Solution Providers" in agriculture, trusted partners for sustainable, eco-conscious agricultural excellence. Our commitment to sustainable practices, soil health, and farmer well-being solidifies our position.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== Start timeline Section  ======-->
<section class="testimonial-section pt-50 pb-10">
    <div class="container-fluid">

        <!--====== timeline Slider  ======-->
        <div class="testimonial-slider-one wow fadeInUp">
            <!--====== timeline Item  ======-->
            <div class="single-testimonial-item">
                <img src="assets/images/journey/1974.jpg" alt="Gallery Image">
                
            </div>
            <!--====== timeline Item  ======-->
            <div class="single-testimonial-item">
                <img src="assets/images/journey/1975.png" alt="Gallery Image">
                
            </div>
            <!--====== timeline Item  ======-->
            <div class="single-testimonial-item">
                <img src="assets/images/journey/1982.jpg" alt="Gallery Image">
                 
            </div>
            <!--====== timeline Item  ======-->
            <div class="single-testimonial-item">
                <img src="assets/images/journey/1996.jpg" alt="Gallery Image">
                
            </div>
            <!--====== timeline Item  ======-->
            <div class="single-testimonial-item">
                <img src="assets/images/journey/1999.jpg" alt="Gallery Image">
                
            </div>
            <!--====== timeline Item  ======-->
            <div class="single-testimonial-item">
                <img src="assets/images/journey/2000.jpg" alt="Gallery Image">
                
            </div>
            <!--====== timeline Item  ======-->
            <div class="single-testimonial-item">
                <img src="assets/images/journey/2003.jpg" alt="Gallery Image">
                
            </div>
            <!--====== timeline Item  ======-->
            <div class="single-testimonial-item">
                <img src="assets/images/journey/2004.jpg" alt="Gallery Image">
                
            </div>
            <!--====== timeline Item  ======-->
            <div class="single-testimonial-item">
                <img src="assets/images/journey/2006.jpg" alt="Gallery Image">
                
            </div>
            <!--====== timeline Item  ======-->
            <div class="single-testimonial-item">
                <img src="assets/images/journey/2012.jpg" alt="Gallery Image">
                
            </div>
            <!--====== timeline Item  ======-->
            <div class="single-testimonial-item">
                <img src="assets/images/journey/2013.jpg" alt="Gallery Image">
                
            </div>
            <!--====== timeline Item  ======-->
            <div class="single-testimonial-item">
                <img src="assets/images/journey/2015.jpg" alt="Gallery Image">
                
            </div>
            <!--====== timeline Item  ======-->
            <div class="single-testimonial-item">
                <img src="assets/images/journey/2016.jpg" alt="Gallery Image">
                
            </div>
            <!--====== timeline Item  ======-->
            <div class="single-testimonial-item">
                <img src="assets/images/journey/2017.jpg" alt="Gallery Image">
                
            </div>
            <!--====== timeline Item  ======-->
            <div class="single-testimonial-item">
                <img src="assets/images/journey/2019.jpg" alt="Gallery Image">
                
            </div>
            <!--====== timeline Item  ======-->
            <div class="single-testimonial-item">
                <img src="assets/images/journey/2021.jpg" alt="Gallery Image">
                
            </div>
            <!--====== timeline Item  ======-->
            <div class="single-testimonial-item">
                <img src="assets/images/journey/2022.jpg" alt="Gallery Image">
                
            </div>
            <!--====== timeline Item  ======-->
            <div class="single-testimonial-item">
                <img src="assets/images/journey/2023.jpg" alt="Gallery Image">
               
            </div>
        </div>
    </div>
</section>
<!--====== End timeline Section  ======-->

<section class="gallery-section-minus1 pt-50 pb-20 bg-dark-infra">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                    <div class="section-title mb-15">
                        <h2>Leading in Advanced Agricultural Manufacturing</h2>
                    </div>
                <div class="project-content-box mb-30 wow fadeInRight">
                    <p class="mb-15">Multiplex Group takes immense pride in its strategically located manufacturing units in Bengaluru, Tumkur, Hubli, and Ghaziabad, unwavering in its commitment to producing top-quality agricultural inputs.</p>
                    <p class="mb-15">Our state-of-the-art infrastructure is meticulously designed, equipped with advanced technology, and adheres to stringent quality assurance protocols. We aim to innovate exceptional crop nutrition and plant protection solutions, meeting modern agriculture's evolving needs.</p>
                    <p class="mb-30">Our production units span vast acres, boasting pharmaceutical-grade equipment, ensuring optimal production while maintaining the highest quality standards.</p>
                 
                 <div class="section-title mb-15">
                        <h2>A Glimpse into the Future</h2>
                 </div>
                    <p class="mb-15">In a recent milestone, we inaugurated a fully automated, world-class biotech unit in September 2021. This cutting-edge facility utilizes new technologies, producing several lakh litres of bio-fertilizers, bio-pesticides, and bio-decomposers in a single cycle. Commercial walk-in cold rooms preserve product integrity, ensuring viability for extended periods. Automated packing for liquid products guarantees precision and purity, delivering accurate results in fields.</p>
                    <p class="mb-15">Our recent expansions have incorporated pharmaceutical-grade equipment, emphasizing our unwavering commitment to quality assurance, setting us apart from competitors.</p>
                    <p class="mb-15">We look forward to empowering rural agriculture through technology and bridging the gap between urban migration and rural farming. With our innovative solutions, we aim to make farming more profitable, sustainable, and appealing to the youth, ultimately securing the future of agriculture in rural India. We're transforming the landscape of rural India, ensuring that the agriculture industry remains vibrant and sustainable.</p>
                    <p class="mb-30">As we celebrate our 50th anniversary, Multiplex Group reaffirms its dedication to innovation, sustainability, and agricultural prosperity. We eagerly anticipate the next fifty years of pioneering excellence in agriculture, contributing to a greener, more sustainable future for all.</p>
                
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
@section('scripts')
@parent
<script type="text/javascript">

</script>
@endsection
