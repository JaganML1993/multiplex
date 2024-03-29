@extends('client.header')
@section('content')
<style>
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
        
         .prod-category-title h3 {
            font-size:20px;
            font-weight:700;
        }

    }
</style>
<!--====== Start Page-title-area section ======-->
<section class="page-title-area text-white bg_cover desktop-view" 
    @if($category->name == 'Fertilizers')
        style="background-image: url({{url('assets/images/fertilizers-header-banner1140x406.webp')}});"
        
    @elseif($category->name == 'Growth Promoters')
        style="background-image: url({{url('assets/images/pgr-banner-1140x406.webp')}});"
        
    @elseif($category->name == 'Adjuvants & PH Balancer')
        style="background-image: url({{url('assets/images/adjuvants-and-ph-balancer-banner-1140x406.webp')}});"
        
    @elseif($category->name == 'Bio-Products')
        style="background-image: url({{url('assets/images/bio-products-banner-1140x406.webp')}});"
        
    @elseif($category->name == 'Pesticides')
        style="background-image: url({{url('assets/images/pesticides-banner-1140x406.webp')}});"
        
    @elseif($category->name == 'Pheromones')
        style="background-image: url({{url('assets/images/pheromones-banner-1140x406.webp')}});"
        
    @elseif($category->name == 'Seeds')
        style="background-image: url({{url('assets/images/seeds-banner-1140x406.webp')}});"
    @endif
    >
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">{{$category->name}}</h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{url('')}}">Home</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry"><a href="{{route('products.index')}}">Products</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">{{$category->name}}</span>
            </div>
        </div>
    </div>
</section>
<section class="mobile-view">
    <section class="page-title-area text-white bg_cover"
    @if($category->name == 'Fertilizers')
        style="background-image: url({{url('assets/images/fertilizers-header-banner1140x406.webp')}});"
    @elseif($category->name == 'Bio-Products')
        style="background-image: url({{url('assets/images/bio-products-banner-1140x406.webp')}});"
    @elseif($category->name == 'Growth Promoters')
        style="background-image: url({{url('assets/images/pgr-banner-1140x406.webp')}});"
    @elseif($category->name == 'Adjuvants & PH Balancer')
        style="background-image: url({{url('assets/images/adjuvants-and-ph-balancer-banner-1140x406.webp')}});"
    @elseif($category->name == 'Pesticides')
        style="background-image: url({{url('assets/images/pesticides-banner-1140x406.webp')}});"
    @elseif($category->name == 'Pheromones')
        style="background-image: url({{url('assets/images/pheromones-banner-1140x406.webp')}});"
    @elseif($category->name == 'Seeds')
        style="background-image: url({{url('assets/images/seeds-banner-1140x406.webp')}});"
    @endif
    >
        <div class="container">
            <!--======  Page-title-Inner ======-->
            <div class="page-title-inner text-center">
                <h1 class="page-title">{{$category->name}}</h1>

            </div>
        </div>
    </section>
    <div class="gd-breadcrumb">
        <span class="breadcrumb-entry"><a href="{{url('')}}">Home | </a></span>
        <span class="separator"></span>
        <span class="breadcrumb-entry"><a href="{{route('products.index')}}">Products |</a></span>
        <span class="separator"></span>
        <span class="breadcrumb-entry active">{{$category->name}}</span>
    </div>
</section>
<!--====== End Page-title-area section ======-->


<!--====== Start Gallery section ======-->
<section class="gallery-section pt-50 pb-50 ptbmob-30 prod-category-title">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-8">
                <!--====== Section Title ======-->
                <div class="section-title mb-40">
                    <h3>{{$category->name}}</h3>
                </div>
            </div>
        </div>
        <input type="hidden" name="category" id="category" value="{{ $category->id }}">
        <div class="row">
            <div class="col-lg-12">
                <!--====== Filter Button ======-->
                <ul class="project-filter mb-20">
                    <li class="active" data-filter="*">
                        <a class="subcategory-link" data-subcategory-id="all" href="#">Show All</a>
                    </li>
                    @foreach($subCategories as $subCategory)
                    <li class="sub_category" data-filter=".cat-{{ $subCategory->id }}">
                        <a class="subcategory-link" data-subcategory-id="{{ $subCategory->id }}" href="#">
                            {{ $subCategory->name }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row gallery-active prod-img-border" id="content_port">
            @include('client.product-result')
        </div>
        <div class="ajax-load text-center test-bold fs-25 py-4" style="display:none">

            <p>
                <img src="{{ asset('assets/img/loader.gif') }}" srcset="{{ asset('assets/img/loader.gif') }}?tr=w-60,h-60,420w" alt="">
            </p>

        </div>
    </div>
</section>
<!--====== End Gallery section ======-->
<br /><br /><br />

@endsection
@section('scripts')
@parent

<script>
    $(document).ready(function() {
        $('.subcategory-link').on('click', function(e) {
            e.preventDefault();
            var subcategoryId = $(this).data('subcategory-id');
            loadResults(1, subcategoryId);
        });

        function loadResults(page, subCategoryId) {
            var category = $('#category').val();
            $("#content_port").css('height','auto');
            // Check if the subCategoryId is 'all'
            if (subCategoryId === 'all') {
                subCategoryId = 0; // Set to 0 for the "All" option
            }

            $.ajax({
                url: "{{url('search-products')}}", // Replace with your actual search endpoint
                type: 'GET',
                data: {
                    page: page,
                    category: category,
                    sub_category_id: subCategoryId,
                },
                beforeSend: function() {
                    $('.ajax-load').show();
                },
                success: function(data) {
                    if (!data.html) {
                        $("#no_portfolio1").hide();
                        $('.ajax-load').html("No more careers available");
                    } else {
                        $('.ajax-load').hide();
                        $("#content_port").empty().html(data.html).css('height','auto');
                    }
                },
                complete: function() {
                    $('.ajax-load').hide();
                },
            });
        }
    });
</script>
@endsection