@extends('client.header')
@section('content')
@include('client.service-enquiry')
<style>
     @media (max-width:567px){
.menu-button-1{
   margin-top:-1rem !important;
}}
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

<!--====== Start Project-Details section ======-->
<section class="project-details-section pt-60 services-img-round">
    <div class="container">
        <div class="project-details-wrapper pb-30">
            <div class="row">
            <div class="col-lg-12">
            <!--====== Section-title ======-->
                    <div class="section-title mb-25 text-center">
                        <h2>Micronutrients in Crop Production</h2>
                    </div>
                    <div class="blog-meta-details text-center">
                        <h6><i class="fa-solid fa-calendar-days"></i> 22 January 2024 </h6>
                    </div>
                <!--====== Project Content Box ======-->
                <div class="project-content-box mb-50 wow fadeInRight">
                    <p class="mb-15">Large numbers of research workers are studying the importance of micronutrients in crop production all over the world. Indian scientists are in the forefront and have contributed over 25% of the total research papers published. However, research is limited to academic importance and the papers on micronutrients remained as the personal documents. They received awards but the results of their research have not reached the farmers.</p>
                </div>
                <div class="block-image blog-image wow fadeInDown">
                    <img src="assets/images/micronutrients-blog.jpg" alt="Blog Image">
                </div>
                <div class="project-content-box mb-50 wow fadeInRight">
                    <p class="mb-15">Today, awareness of use of micronutrients in India among farmers is due to the sustained propaganda by a few micronutrient formulators. Though leaders of the Green Revolution agree in private that micronutrients increase crop production, the Indian farmers were belatedly recommended to use multi-micronutrients by the Agriculture and Horticulture Departments. However, today. Ministry of Agriculture, Government of India, New Delhi has realized the importance of multi-micronutrients and balanced nutrition in the sustenance of higher crop production. </p>
                    <p class="mb-15">In America and United Kingdom, hundreds of firms are engaged in multi-micronutrient formulations with different formulations for various crops. Some firms are having a turnover of about several million dollars every year. Today, agriculture in India has become more intensive. Naturally, farmers must be informed about the recent developments in plant nutrition. Indian farmers can compete with their counterparts anywhere else as far as crop production is concerned; but they are ignorant of modern research on micronutrients.</p>
                    <p class="mb-15">As per the directions of the Ministry of Agriculture, Government of India, New Delhi, almost all State Governments have fixed the grades of multi-micronutrient fertilizers for their states based on crop varieties and soil conditions.</p>
                    <p class="mb-15">It is generally felt that multi-micronutrient fertilizers should be used whenever deficiencies occur. This attitude does not hold good in the present context and a definite recommendation of multi-micronutrients as in the case of NPK fertilizer is essential. NPK (major nutrients) fertilizers are used to increase crop production and not just to correct NPK deficiency in plants. In India, the scope of using multi-micronutrient fertilizers is restricted as many people talk more about deficiency but still feel that multi-micronutrients are essential for enhancing the yield and quality of produce.</p>
                    <p class="mb-15">Recently, high-yielding varieties of wheat, paddy, and cotton were evolved on the basis of their capacity for consuming high doses of fertilizers. Thus, when high-yielders require more NPK, it is relevant that they require more secondary and micronutrients than the traditional varieties. Though soil contains a sufficient quantity of NP and K, NPK fertilizers are used as an agro input but micronutrients do not have this privilege, though all scientists speak about the importance of balanced nutrients including micronutrients in crop production.</p>
                </div>
            </div>
         </div>
        </div>
    </div>

    <div class="container">
        <div class="project-details-wrapper pb-30">
            <div class="row">
            <div class="col-lg-12">
            <!--====== Section-title ======-->
                    <div class="section-title mb-25 text-center">
                        <h2>Recent Blogs</h2>
                    </div>

                <div class="row">
                    
                <div class="col-md-4">
                    <div class="block-image wow fadeInDown">
                        <img src="assets/images/Red-Spider-Mite-Thumbnail.webp" alt="Project Image">
                        <h6 class="mt-15">The Red Spider Mite</h6>
                        <a href="{{ route('the-red-spider-mite') }}" class="btn-link">Read more <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="block-image wow fadeInDown">
                        <img src="assets/images/minchuplusthumbnail.png" alt="Project Image">
                        <h6 class="mt-15">Minchu Plus for Pink Boll Worm</h6>
                        <a href="{{ route('minchu-plus-for-pink-boll-worm') }}" class="btn-link">Read more <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block-image wow fadeInUp">
                        <img src="assets/images/blog-three-new-thumb.jpg" alt="Project Image">
                        <h6 class="mt-15">मिट्टी परीक्षण क्या है?</h6>
                        <a href="{{ route('what-is-soil-testing') }}" class="btn-link">Read more <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <!--<div class="col-md-4">-->
                <!--    <div class="block-image wow fadeInUp">-->
                <!--        <img src="assets/images/soil3.jpg" alt="Project Image">-->
                <!--        <h6 class="mt-15">Related blog post 3</h6>-->
                <!--        <a href="#" class="btn-link">Read more <i class="fa fa-arrow-right"></i></a>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
                
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
