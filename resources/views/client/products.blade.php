@extends('client.header')
@section('content')
		
         <!--====== Start Page-title-area section ======-->
        <section class="page-title-area text-white bg_cover" style="background-image: url(assets/images/pr-page-header-img.jpg);">
            <div class="container">
                <!--======  Page-title-Inner ======-->
                <div class="page-title-inner text-center">
                    <h1 class="page-title">Products</h1>
                    <div class="gd-breadcrumb">
                        <span class="breadcrumb-entry"><a href="index.html">Home</a></span>
                        <span class="separator"></span>
                        <span class="breadcrumb-entry active">Our Range of Products</span>
                    </div>
                </div>
            </div>
        </section><!--====== End Page-title-area section ======-->
		
		
		<!--====== Start Features Section ======-->
        <section class="features-section pt-95">
            <div class="container">
                <div class="row align-items-xl-center">
                    <div class="col-lg-6">
                        <div class="section-title mb-55 wow fadeInLeft">
                            <!-- <span class="sub-title"><img src="assets/images/grass.svg" alt=""> What We Do For Gardening</span> -->
                            <h2>Our Range of Products</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="features-content-box mb-55 wow fadeInRight">
                            <p>Sed perspiciatis unde omnis isnatu volunteer accusantium doloremque laudantium totam rem apeira eaque ipsa quae ab eillo inventore veritatis et quasi architecto beatae vitae</p>
                            <!-- <a href="about.html" class="btn-link">Learn More<i class="far fa-angle-double-right"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-sm-12">
                        <div class="features-thumb-item-two mb-40 wow fadeInDown" data-wow-delay=".2s">
                            <div class="thumb">
                               <a href="{{ route('fertilizers') }}"> <img src="assets/images/products/fertilizer.png" alt="Image"></a>
                            </div>
                            <br/>
							<div class="padc01">
                                <a href="{{ route('fertilizers') }}"><h5 class="title">Fertlizers</h5></a>
                                <p>Balanced Major, Minor, Micro and secondary nutrients hold their importance throughout Crop Production and Nutrition.</p>
                            </div>
							<br/><br/><br/>
							<div class="menu-button d-xl-block">
                                <a href="{{ route('fertilizers') }}" class="main-btn primary-btn">Know More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-12">
                        <div class="features-thumb-item-two mb-40 wow fadeInDown" data-wow-delay=".2s">
                            <div class="thumb hover14">
                                <img src="assets/images/products/growth.jpg" alt="Image">
                            </div>
                            <br/>
							<div class="padc01">
                                <h5 class="title">Growth Promoters</h5>
                                <p>External application of growth promoters has beneficial effects by enhancing crop yield by improving overall plant health.</p>
                            </div>
							<br/><br/><br/>
							<div class="menu-button d-xl-block">
                                <a href="#" class="main-btn primary-btn">Know More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-12">
                        <div class="features-thumb-item-two mb-40 wow fadeInDown" data-wow-delay=".2s">
                            <div class="thumb">
                                <img src="assets/images/products/bio.jpg" alt="Image">
                            </div>
                            <br/>
							<div class="padc01">
                                <h5 class="title">Bio Products</h5>
                                <p>Bio-fertilisers, Bio-pesticides, Bio-stimulants and Bio-activators have been widely accepted as an alternative to the improper use of chemicals to cultivate organic produce.</p>
                            </div>
							<br/>
							<div class="menu-button d-xl-block">
                                <a href="#" class="main-btn primary-btn">Know More</a>
                            </div>
                        </div>
                    </div>
					
					<div class="col-xl-3 col-md-6 col-sm-12">
                        <div class="features-thumb-item-two mb-40 wow fadeInDown" data-wow-delay=".2s">
                            <div class="thumb">
                                <img src="assets/images/products/ph-balancer.jpg" alt="Image">
                            </div>
                            <br/>
							<div class="padc01">
                                <h5 class="title">Adjuvants</h5>
                                <p>Improves the performance of nutrients, Insecticides, and Fungicides with better absorption capacity.</p>
                            </div>
							<br/><br/><br/>
							<div class="menu-button d-xl-block">
                                <a href="#" class="main-btn primary-btn">Know More</a>
                            </div>
                        </div>
                    </div>
					
					<div class="col-xl-3 col-md-6 col-sm-12">
                        <div class="features-thumb-item-two mb-40 wow fadeInDown" data-wow-delay=".2s">
                            <div class="thumb">
                                <img src="assets/images/products/pesticide.jpg" alt="Image">
                            </div>
                            <br/>
							<div class="padc01">
                                <h5 class="title">Pesticides</h5>
                                <p>Plant protection becomes critical to control unwanted insects, pests and weeds.</p>
                            </div>
							<br/>
							<div class="menu-button d-xl-block">
                                <a href="#" class="main-btn primary-btn">Know More</a>
                            </div>
                        </div>
                    </div>
					
					<div class="col-xl-3 col-md-6 col-sm-12">
                        <div class="features-thumb-item-two mb-40 wow fadeInDown" data-wow-delay=".2s">
                            <div class="thumb">
                                <img src="assets/images/products/pheromones.jpg" alt="Image">
                            </div>
                            <br/>
							<div class="padc01">
                                <h5 class="title">Pheromones</h5>
                                <p>Pheromones are chemicals released into the environment in small amounts.</p>
                            </div>
							<br/>
							<div class="menu-button d-xl-block">
                                <a href="#" class="main-btn primary-btn">Know More</a>
                            </div>
                        </div>
                    </div>
					
					<div class="col-xl-3 col-md-6 col-sm-12">
                        <div class="features-thumb-item-two mb-40 wow fadeInDown" data-wow-delay=".2s">
                            <div class="thumb">
                                <img src="assets/images/products/seeds.jpg" alt="Image">
                            </div>
                            <br/>
							<div class="padc01">
                                <h5 class="title">Seeds</h5>
                                <p>Quality seeds maintain their genetic purity with viability and improved germination.</p>
                            </div>
							<br/>
							<div class="menu-button d-xl-block">
                                <a href="#" class="main-btn primary-btn">Know More</a>
                            </div>
                        </div>
                    </div>
					
					<!--<div class="col-xl-3 col-md-6 col-sm-12">-->
     <!--                   <div class="features-thumb-item-two mb-40 wow fadeInDown" data-wow-delay=".2s">-->
     <!--                       <div class="thumb">-->
     <!--                           <img src="assets/images/products/sprayers.jpg" alt="Image">-->
     <!--                       </div>-->
     <!--                       <br/>-->
					<!--		<div class="padc01">-->
     <!--                           <h5 class="title">Sprayers</h5>-->
     <!--                           <p>Spraying technology in agriculture brings uniformity across the field.</p>-->
     <!--                       </div>-->
					<!--		<br/>-->
					<!--		<div class="menu-button d-xl-block">-->
     <!--                           <a href="#" class="main-btn primary-btn">Know More</a>-->
     <!--                       </div>-->
     <!--                   </div>-->
     <!--               </div>-->
         
                </div>
            </div>
        </section><!--====== End Features Section ======-->
		<br/><br/><br/>

		
        @endsection
@section('scripts')
@parent
<script type="text/javascript">

</script>
@endsection