@extends('client.header')
@section('content')

<!--====== Start Page-title-area section ======-->
<section class="page-title-area text-white bg_cover"
    style="background-image: url(assets/images/fertilizer-header-img.jpg);">
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
<!--====== End Page-title-area section ======-->


<!--====== Start Gallery section ======-->
<section class="gallery-section pt-95 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-8">
                <!--====== Section Title ======-->
                <div class="section-title mb-40">
                    <h2>{{$category->name}}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!--====== Filter Button ======-->
                <ul class="project-filter mb-50">
                    <li @if($sub_category_id == 0) class="active" @endif data-filter="*"><a href="{{ route('category.products',['id' => $category_id, 'sub_id' => 0]) }}">Show All</a></li>
                    @foreach($subCategories as $subCategory)
                    <li @if($sub_category_id == $subCategory->id) class="active" @endif data-filter=".cat-1"><a href="{{ route('category.products',['id' => $category_id, 'sub_id' => $subCategory->id]) }}">{{$subCategory->name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row gallery-active prod-img-border">


            @forelse($products as $product)
            <!-- major-nutrients -->
            <div class="col-md-4 item cat-1">
                <!--====== Single Gallery Item ======-->
                <div class="single-project-item mb-30 wow fadeInLeft">
                    <div class="project-img">
                         <a href="{{ route('category.product.detail',['id' => $product->id]) }}"><img src="{{ url('').'/'.$product->front_image }}" alt="Gallery Image"></a>
                        <div class="hover-content">
                            <div class="text text-white">
                                <h3 class="title"><a href="{{ route('category.product.detail',['id' => $product->id]) }}">{{$product->name}}</a></h3>
                            </div>
                            <a href="{{ route('category.product.detail',['id' => $product->id]) }}" class="icon-btn"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>  
                </div>
            </div>
            @empty
                <h5>No product found</h5>
            @endforelse

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
