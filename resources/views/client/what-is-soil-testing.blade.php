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
                        <h2>मिट्टी परीक्षण क्या है?</h2>
                    </div>
                    <div class="blog-meta-details text-center">
                        <h6><i class="fa-solid fa-calendar-days"></i> 05 Februray 2024 </h6>
                    </div>
                <!--====== Project Content Box ======-->
                <div class="project-content-box mb-50 wow fadeInRight">
                    <p class="mb-15">फसल की अधिक उत्पादन एवं स्वस्थ विकास के लिए  आवश्यक पोषक तत्वों की मिटटी में  उपलब्ध मात्राओं का रासायनिक परीक्षणों द्वारा आंकलन करना ही मृदा परीक्षण कहलाता है। इस परीक्षण द्वारा  मृदा के भौतिक और रासायनिक विशेषताओं जैसे सूक्ष्म पोषक तत्त्व, आर्गेनिक कार्बन, मुख्य पोषक तत्व की प्रतिशत मात्रा एवं मृदा का pH मान इत्यादि पता चलता है</p>
                </div>
                <div class="block-image blog-image wow fadeInDown">
                    <img src="assets/images/blog-three-new-fi.jpg" alt="Blog Image">
                </div>
                {{-- <div class="project-content-box mb-50 wow fadeInRight">
                    <p class="mb-15">In recent years, pink ball worm attack on cotton has emerged as a major problem in many areas in India. Due to whose attack, about 30 to 50 percent of the crop is damaged.</p>
                    <p class="mb-15">Infestation of pink bollworm occurs in the middle and late stages of the crop. Pink caterpillars cause damage by hiding inside the pod parts and staying away from light, due to which it is difficult to identify the damage caused by this insect, and the crop suffers more damage.</p>
                </div> --}}

                <h3  class="mb-10">मिट्टी परीक्षण की आवश्यकता</h3>
                <p class="mb-15">पौधो की अच्छी वृध्दि एवं विकास के लिये मुख्य  रूप से 17 पोषक तत्व आवश्यक माने गये है। इनमें से कार्बन, हाइड्रोजन, ऑक्सीजन पौधे वायुमंडल एवं पानी से लेते हैं जो प्रकृति में प्रचुर मात्रा में उपलब्ध होते है अन्य चौदह तत्व, नत्रजन, फास्फोरस, पोटाश प्राथमिक तत्व, कैल्शियम, मैग्नीशियम, सल्फर, द्वितीयक पोषक तत्व जिन्हें हम प्रमुख पोषक तत्व कहते हैं तथा लोह, मैग्नीज, जिंक, कॉपर, बोरान, मालिब्डेनम, क्लोरीन एवं निकल जिन्हें सूक्ष्म तत्व कहते हैं पौधे मिट्टी से ही लेते हैं। इन 14 पोषक तत्वों में से नत्रजन, फास्फोरस एवं पोटाश की कमी हमारी मिट्टी में विशेष रूप से पाई जाती है, क्योंकि पौधें इनको काफी मात्रा में ग्रहण करते हैं</p>
                <p class="mb-15">परन्तु खेत में लगातार फसल लेते रहने के कारण मिट्टी से इन सभी आवश्यक तत्वों का हास  निरन्तर हो रहा है ।  परिणामस्वरूप फसल उत्पादन कम होता है इसके अतिरिक्त उर्वरक भी काफी महंगे होते जा रहे है। अत: इन पोषक तत्वों को खेत में आवश्यकतानुरूप ही उपयोग करना जिससे खेती लाभदायक बन सकती है ।</p>
                <p class="mb-15">खेतो में उर्वरक डालने की सही मात्रा की जानकारी मिट्टी परीक्षण द्वारा ही प्राप्त की जा सकती है । अत: मिट्टी परीक्षण , उर्वरकों के सार्थक उपयोग एवं बेहतर फसल उत्पादन हेतु बहुत ही ज्यादा आवश्यक है ।</p>
                
                <h3  class="mb-10">मिट्टी का नमूना लेने के लिए आवश्यक सामग्री</h3>
                <ul class="check-style-one mb-30">
                    <li><i class="fa fa-check"></i>नमूना एकत्रित करने के लिए तगारी।</li>
                    <li><i class="fa fa-check"></i>मिट्टी खोदने के लिए औजार-गेती, फावड़ा, खुरपी। </li>
                    <li><i class="fa fa-check"></i>नमूना सुखाने एवं मिलाने के लिए अखबार।</li>
                    <li><i class="fa fa-check"></i>नमूना रखने के लिए पॉलिथीन थैली (600 ग्राम)</li>
                </ul>

                <h3  class="mb-10">नमूना एकत्रीकरण विधि</h3>
                <p class="mb-15">मिट्टी परीक्षण के लिये सबसे महत्वपूर्ण होता है कि मिट्टी का सही नमूना या सैंपल  एकत्र करना । इसके लिये आवश्यक है कि नमूना इस प्रकार लिया जाये कि वह जिस खेत या क्षेत्र से लिया गया हो उसका पूर्ण प्रतिनिधित्व करता हो</p>
                <p class="mb-15">1. मिट्टी परीक्षण के लिए सबसे पहले खेत में 4 से 6 मिट्टी के नमूना लेने के लिए स्थान का चयन करें, फिर उस जगह की ऊपर की मिट्टी की फावड़ा से साफई कर लें, उसके बाद कुदाली या खुरपी से ‘व्ही (V) आकार का 6 इंच गहरा गड्ढा कर लें, उसके बाद गड्ढे से खुरपी की सहायता से ऊपर से नीचे दोनों तरफ से आधा किलो मिट्टी खोद लें।</p>
                <p class="mb-15">2. उसके बाद सभी गड्ढों की मिट्टी को एक साथ इकट्ठा करके मिला लें फिर उस ढेर में से मिट्टी के नमूना हेतु आधा किलोग्राम मिट्टी को एक प्लास्टिक या कपड़े की थैली में जमा कर लें, यदि मिट्टी गीली हो तो छाँव में सुखा लें।</p>
            
                <ul class="check-style-one mb-30">
                    <li><i class="fa fa-check"></i>चित्रानुसार मिट्टी का ढेर लगाएं। </li>
                    <li><i class="fa fa-check"></i>चार बराबर हिस्सों में बांटे।</li>
                    <li><i class="fa fa-check"></i>चित्रानुसार दो हिस्से चुनें तथा दो हिस्से छोड़े।</li>
                    <li><i class="fa fa-check"></i>फिर इन दो हिस्सों को मिलाए</li>
                </ul>
                
                <div class="block-image blog-image wow fadeInDown">
                    <img src="assets/images/soil-sampling.png" alt="Blog Image">
                </div>

                <p class="mb-15">3. इस प्रकार मिट्टी का नमूना जाँच के लिए तैयार हो जाता है। उस नमूना को मिट्टी परीक्षण प्रयोगशाला में भेजकर जाँच करा लें और मृदा स्वास्थ्य कार्ड के आधार पर ही अगली फसलों में उर्वरकों का प्रयोग करें।और दुबारा चार हिस्सों में बांटे</p>
                
                <h3  class="mb-10">मिट्टी परीक्षण दोबारा कितने समय के अंतराल पर करायें?</h3>
                <ul class="check-style-one mb-30">
                    <li><i class="fa fa-check"></i>कम से कम 3 या 5 साल के अन्तराल पर अपनी भूमि की मृदा का परीक्षण एक बार अवश्य करवा लें। एक पूरी फसल-चक्र के बाद मृदा का परीक्षण हो जाना अच्छा है। हल्की या नुकसानदेह भूमि की मृदा का परीक्षण की अधिक आवश्यकता है।</li>
                    <li><i class="fa fa-check"></i>वर्ष में जब भी भूमि की स्थिति नमूने लेने योग्य हो, नमूने अवश्य एकत्रित कर लेना चाहिये। यह जरूरी नहीं कि मृदा का परीक्षण केवल फसल बोने के समय करवाया जाये।</li>
                </ul>
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
<<<<<<< HEAD
                        <img src="assets/images/Red-Spider-Mite-Thumbnail.webp" alt="Project Image">
                        <h6 class="mt-15">The Red Spider Mite</h6>
                        <a href="{{ route('the-red-spider-mite') }}" class="btn-link">Read more <i class="fa fa-arrow-right"></i></a>
=======
                        <img src="assets/images/blog-thumb.jpg" alt="Project Image">
                        <h6 class="mt-15">Micronutrients in Crop Production</h6>
                        <a href="{{ route('micronutrients-in-crop-production') }}" class="btn-link">Read more <i class="fa fa-arrow-right"></i></a>
>>>>>>> b98541034009a1de1c9c8b7339ba381e79a30171
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block-image wow fadeInDown">
<<<<<<< HEAD
                        <img src="assets/images/blog-thumb.jpg" alt="Project Image">
                        <h6 class="mt-15">Micronutrients in Crop Production</h6>
                        <a href="{{ route('micronutrients-in-crop-production') }}" class="btn-link">Read more <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block-image wow fadeInDown">
                        <img src="assets/images/minchuplusthumbnail.png" alt="Project Image">
=======
                        <img src="assets/images/pink-boll-worm-thumb.jpg" alt="Project Image">
>>>>>>> b98541034009a1de1c9c8b7339ba381e79a30171
                        <h6 class="mt-15">Minchu Plus for Pink Boll Worm</h6>
                        <a href="{{ route('minchu-plus-for-pink-boll-worm') }}" class="btn-link">Read more <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                
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
