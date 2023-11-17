@extends('client.header')
@section('content')
<style>
     @media (max-width:567px){
.features-thumb-item-two{
    text-align: center !important;
}
.main-btn-2{
    margin-top: -4rem !important;
    position: absolute !important;
    right: 95px !important;
    top: auto !important;
}
.main-btn-1{
   margin-top: -1rem !important;  
}
.features-thumb-item-two-1{
    margin-top:3rem !important;
}
}
     
</style>
		
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
        <section class="features-section pt-60">
            <div class="container">
                <div class="row align-items-xl-center">
                    <div class="col-lg-6">
                        <div class="section-title mb-55 wow fadeInLeft">
                            <!-- <span class="sub-title"><img src="assets/images/grass.svg" alt=""> What We Do For Gardening</span> -->
                            <h2>Our Range of Products</h2>
                        </div>
                    </div>
                    <!--<div class="col-lg-6">-->
                    <!--    <div class="features-content-box mb-55 wow fadeInRight">-->
                    <!--        <p>Sed perspiciatis unde omnis isnatu volunteer accusantium doloremque laudantium totam rem apeira eaque ipsa quae ab eillo inventore veritatis et quasi architecto beatae vitae</p>-->
                            <!-- <a href="about.html" class="btn-link">Learn More<i class="far fa-angle-double-right"></i></a> -->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
                <div class="row">

                    @foreach($categories as $category)
                    <div class="col-xl-3 col-md-6 col-sm-12">
                        <div class="features-thumb-item-two mb-40 wow fadeInDown" data-wow-delay=".2s">
                            <div class="thumb">
                               <a href="{{ route('category.products',['id' => $category->id, 'sub_id' => 0]) }}"> <img src="{{ url('').'/'.$category->image }}" alt="Image"></a>
                            </div>
                            <br/>
							<div class="padc01">
                                <a href="{{ route('category.products',['id' => $category->id, 'sub_id' => 0]) }}"><h5 class="title">{{$category->name}}</h5></a>
                                <p>{{$category->description}}</p>
                            </div>
							<br/><br/><br/>
							<div class="menu-button d-xl-block">
                                <a href="{{ route('category.products',['id' => $category->id, 'sub_id' => 0]) }}" class="main-btn primary-btn">Know More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

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