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

<!--====== Start Blog Section  ======-->
    <section class="blog-section pt-60 pb-10">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-12">
                    <div class="section-title text-center mb-50 wow fadeInDown">
                        <span class="sub-title"><img src="https://www.multiplexgroup.com/assets/images/leaf-svgrepo-com-new.svg" height="35"
                                width="35" alt=""></span>
                        <h2>Blog Articles</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <!--====== Single Blog Post  ======-->
                    <div class="single-blog-post mb-40 wow fadeInUp" data-wow-delay=".2s">
                        <div class="post-thumbnail">
                            <img src="{{ asset('images/Red-Spider-Mite-Thumbnail.webp') }}" alt="Post Thumbnail">
                        </div>
                        <div class="entry-content">
                            <a href="javascript:void(0);" class="cat-link"></a>
                            <h4 class="entry-title"><a href="{{ route('the-red-spider-mite') }}">The Red Spider Mite</a></h4>
                            <p>The Tetranychidae family, also known as "Spider Mites," are among the most significant phytophagous mite pests of agriculture worldwide.</p>
                            <div class="post-meta">
                                <span class="date"><a href="{{ route('the-red-spider-mite') }}">Read More</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <!--====== Single Blog Post  ======-->
                    <div class="single-blog-post mb-40 wow fadeInUp" data-wow-delay=".2s">
                        <div class="post-thumbnail">
                            <img src="https://www.multiplexgroup.com/assets/images/blog-thumb.jpg" alt="Post Thumbnail">
                        </div>
                        <div class="entry-content">
                            <a href="javascript:void(0);" class="cat-link"></a>
                            <h4 class="entry-title"><a href="https://www.multiplexgroup.com/micronutrients-in-crop-production">Micronutrients in Crop Production</a></h4>
                            <p>Large numbers of research workers are studying the importance of micronutrients in crop production all over the world.</p>
                            <div class="post-meta">
                                <span class="date"><a href="https://www.multiplexgroup.com/micronutrients-in-crop-production">Read More</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <!--====== Single Blog Post  ======-->
                    <div class="single-blog-post mb-40 wow fadeInUp" data-wow-delay=".2s">
                        <div class="post-thumbnail">
                            <img src="https://www.multiplexgroup.com/assets/images/minchuplusthumbnail.png" alt="Post Thumbnail">
                        </div>
                        <div class="entry-content">
                            <a href="javascript:void(0);" class="cat-link"></a>
                            <h4 class="entry-title"><a href="https://www.multiplexgroup.com/minchu-plus-for-pink-boll-worm">Minchu Plus for Pink Bollworm</a></h4>
                            <p>Cotton is the most important commercial crop globally, often referred to as "white gold".</p>
                            <div class="post-meta">
                                <span class="date"><a href="https://www.multiplexgroup.com/minchu-plus-for-pink-boll-worm">Read More</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <!--====== Single Blog Post  ======-->
                    <div class="single-blog-post mb-40 wow fadeInUp" data-wow-delay=".2s">
                        <div class="post-thumbnail">
                            <img src="https://www.multiplexgroup.com/assets/images/blog-three-new-thumb.jpg" alt="Post Thumbnail">
                        </div>
                        <div class="entry-content">
                            <a href="javascript:void(0);" class="cat-link"></a>
                            <h4 class="entry-title"><a href="https://www.multiplexgroup.com/what-is-soil-testing">मिट्टी परीक्षण क्या है?</a></h4>
                            <p>फसल की अधिक उत्पादन एवं स्वस्थ विकास के लिए  आवश्यक पोषक तत्वों की मिटटी में  उपलब्ध मात्राओं का रासायनिक परीक्षणों द्वारा आंकलन करना ही मृदा परीक्षण कहलाता है।</p>
                            <div class="post-meta">
                                <span class="date"><a href="https://www.multiplexgroup.com/what-is-soil-testing">Read More</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Blog Section  ======-->

@endsection
@section('scripts')
@parent
<script type="text/javascript">

</script>
@endsection
