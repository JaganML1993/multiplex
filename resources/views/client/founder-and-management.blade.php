@extends('client.header')
@section('content')
<style>
    @media (max-width:567px){
.pt-100{
padding-top: 40px !important;}
.pad-top-150 {
    padding-top: 0px !important;

}
.mangmnt-name h2 {
    font-size: 18px;
    text-align: center;
}
.sub-title {
    font-size: 18px;}
}
</style>


<!--====== Start Page-title-area section ======-->
<section class="page-title-area text-white bg_cover"
    style="background-image: url({{ asset('images/founder-management-header-img4.jpg') }});">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Founder & Management</h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="index.html">Home</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Founder & Management</span>
            </div>
        </div>
    </div>
</section>
<!--====== End Page-title-area section ======-->


<!--====== Start Features Section ======-->
<section class="features-section pt-100">

    <div class="container ">
        <div class="row align-items-xl-center">
            <div class="col-xl-6 col-lg-12">
                <!--=== Hero Image Box ===-->
                <div class="hero-image-box d-xl-block wow fadeInRight" data-wow-delay=".75s">
                    <img src="{{ asset('images/gp-shetty-4.png') }}" alt="Hero Image">
                </div>
            </div>

            <div class="col-xl-6 col-lg-12">
                <!--=== Hero Content ===-->
                <div class="vm-text mangmnt-name">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Dr. Gopalakrishna Pommaiah Shetty</h2>
                    <span class="sub-title">Founder & Chairman</span>
                    <hr />
                    <p class="mb-15 wow fadeInDown" data-wow-delay=".6s">Dr. Gopalakrishna Pommaiah Shetty, Founder and Chairman, had his early education in Udupi and graduated from Willingdon College, Sangli. He pursued his post-graduate degree from Shivaji University, Kolhapur and earned a Ph.D. in Plant Physiology and Plant Nutrients under Dr. G. V. Joshi's mentorship.</p>
                    <p class="mb-15 wow fadeInDown" data-wow-delay=".6s">Being a farmer himself, Dr. G.P. Shetty felt that his knowledge should not be confined to academic corridors but taken to the fields where it could be of practical use to the farmers. With this ambition, he started Karnataka Agro Chemicals in 1974. To ensure soil health and crop quality, agri input products were introduced under the brand name of Multiplex and have proven to be effective in diverse agro-climatic conditions globally.</p>
                    <p class="mb-15 wow fadeInDown" data-wow-delay=".6s">Today, Multiplex Group of Companies, nurtured by Dr. G.P. Shetty's dedication, employs over 1500 staff members and collaborates with 5000+ dealers and distributors. His pioneering contributions to sustainable Indian agriculture have earned him the prestigious "Rajyotsava Award" from the Karnataka Government, reflecting his lasting impact on the sector.</p>
                    <br />
                    <!--<h4 class="font-italic">A visionary entrepreneur</h4>-->
                    <!--<p class="wow fadeInDown" data-wow-delay=".6s">Being a farmer himself, Dr. G. P. Shetty felt that his-->
                    <!--    knowledge should not be confined to academic corridors-->
                    <!--    but taken to the fields where it could be of practical use to the farmers.</p>-->
                </div>
            </div>

        </div>
    </div>

    <div class="container pad-top-150">
        <div class="row align-items-xl-center vm-bg-color vision-row">

            <div class="col-xl-6 col-lg-12">
                <!--=== Hero Content ===-->
                <div class="vm-text mangmnt-name">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Mr. Mahesh G Shetty</h2>
                    <span class="sub-title">Managing Director </span>
                    <hr />
                    <p class="mb-15 wow fadeInDown" data-wow-delay=".6s">Mr. Mahesh G Shetty, following in his father Dr. G.P. Shetty's visionary footsteps, has spearheaded the expansion of Multiplex Group's agricultural legacy. With over 25 years of experience in the agricultural industry, he has elevated the organization's status by actively engaging in the production and marketing of various agricultural products in India and international markets.</p>
                    <p class="mb-15 wow fadeInDown" data-wow-delay=".6s">Since 2009, under his astute leadership, Multiplex Group has ventured into international markets, forging robust relations with Djibouti and Ethiopia. Mr. Mahesh G Shetty holds the title of Honorary Consultant of the Republic of Djibouti, a testament to his international influence. </p>
                    <p class="mb-15 wow fadeInDown" data-wow-delay=".6s">Recognized as a "Young Industrial Entrepreneur" by the "International Competence Centre for Organic Agriculture (ICCOA)," he has also earned awards and prestigious roles in the fertilizer industry, further cementing his remarkable leadership and influence.</p>
                </div>
            </div>

            <div class="col-xl-6 col-lg-12">
                <!--=== Hero Image Box ===-->
                <div class="hero-image-box d-xl-block wow fadeInRight" data-wow-delay=".75s">
                    <img src="{{ asset('images/mg-shetty-2.jpg') }}" alt="Hero Image">
                </div>
            </div>
        </div>
    </div>

    <div class="container pad-top-150">
        <div class="row align-items-xl-center">
            <div class="col-xl-6 col-lg-12">
                <!--=== Hero Image Box ===-->
                <div class="hero-image-box d-xl-block wow fadeInRight" data-wow-delay=".75s">
                    <img src="{{ asset('images/nm-shetty-2.png') }}" alt="Hero Image">
                </div>
            </div>

            <div class="col-xl-6 col-lg-12">
                <!--=== Hero Content ===-->
                <div class="vm-text mangmnt-name">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Mrs. Nishchita M Shetty</h2>
                    <span class="sub-title">Director </span>
                    <hr />
                    <p class="wow fadeInDown" data-wow-delay=".6s">Mrs. Nishchita M Shetty, a forward-thinking and accomplished science graduate, embarked on a remarkable journey when she founded M/s. Multiplex Urban Green India Pvt. Ltd. It was a natural progression for someone with an independent mindset and a deep-rooted passion for innovation.</p>
                    <br />
                    <p class="wow fadeInDown" data-wow-delay=".6s">Supported unwaveringly by her husband and father-in-law, Mrs. Nishchita M Shetty took upon herself the fulfilling of a long-cherished dream harboured by Dr. G. P. Shetty - that of providing urban dwellers with chemical residue-free food. Her personal mission is to instil a sense of delight in the cultivation and nurturing of vegetables, fruits, and flowers within urban households. She achieves this by offering a range of organic and eco-friendly products, kits, and services. Actively involved in the "Go Green, Grow Green" initiative, Mrs. Nishchita M Shetty is a driving force behind sustainable urban agriculture.</p>
                    <br />
                    <p class="wow fadeInDown" data-wow-delay=".6s">In addition to her role at Multiplex Urban Green India Pvt. Ltd., she serves as a director in all the subsidiaries of the Multiplex Group. Today, she stands as an acclaimed entrepreneur in her own right, a testament to her dedication and visionary leadership in the pursuit of healthier, more sustainable urban living.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== End Features Section ======-->
<br /><br /><br />
 
@endsection
@section('scripts')
@parent
<script type="text/javascript">

</script>
@endsection
