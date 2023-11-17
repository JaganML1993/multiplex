@extends('client.header')
@section('content')

<!--====== Start Page-title-area section ======-->
<section class="page-title-area text-white bg_cover" style="background-image: url(assets/images/current-openings-header-img4.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Current Openings </h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{url('/')}}">Home</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Current Openings </span>
            </div>
        </div>
    </div>
</section>
<!--====== End Page-title-area section ======-->

<!--====== Start Project-Details section ======-->
<!--<section class="project-details-section pt-60 pb-60 services-img-round">-->
<!--    <div class="container">-->
<!--        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">-->

<!--            <div class="carousel-inner">-->
<!--                <div class="carousel-item active">-->
<!--                    <img class="d-block w-100" src="assets/images/jobs.jpg" alt="First slide">-->
<!--                </div>-->

<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!--====== End Project-Details section ======-->

<!--====== Start Info Section ======-->
<section class="info-section pt-60 pb-30">
    <div class="container">
        <div class="row text-center">
            <div class="col-xl-12 col-md-12">
                <p>Sorem ipsum dolor sit amet, consectetur adipiscing elit. Tortor nulla id neque scelerisque pulvinar.
                    amet interdum turpis consequat adipiscing. Elementum feugiat sed duis consectetur varius et cras
                    mattis.
                    Lobortis auctor sit in eu nisl fusce augue.
                </p>
            </div>
        </div>
        <hr />
        <br />
        <h3 class="title text-center">Current Openings</h3>

        <br />
        <div class="row justify-content-center">

            @if (count($openings))
                @foreach ($openings as $item)
                <div class="col-xl-4 col-md-6">
                    <!--====== Single Info Item ======-->
                    <div class="single-info-item style-three mb-20 wow fadeInUp">
                        <div class="shape shape-one"><span><img src="assets/images/info-shape-2.png" alt="shape"></span>
                        </div>
                        <div class="info">
                            <span><i class="fa-solid fa-location-dot"></i> {{$item->job_location}}</span>
                            <h4 class="title" style="font-size:17px;">{{$item->position}}</h4>
                            <span>Vacancies: {{$item->vacancies}}</span>
                            <br />
                            <a href="{{route('home.job_application',['id'=>$item->id])}}" class="main-btn primary-btn">View Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
                <h5>No openings available</h5>
            @endif
        </div>
    </div>
</section>
<!--====== End Info Section ======-->

<br />

@endsection
@section('scripts')
@parent
<script type="text/javascript">

</script>
@endsection
