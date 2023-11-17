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