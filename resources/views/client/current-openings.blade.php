@extends('client.header')
@section('content')

<!--====== Start Page-title-area section ======-->
<section class="page-title-area text-white bg_cover" style="background-image: url(assets/images/current-openings-header-img4.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Join Us </h1>
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
<section class="info-section pt-60 pb-10">
    <div class="container">
                            <!--<form class="review-form" method="post">-->
                            <!--    <div class="row">-->
                            <!--        <div class="col-lg-3">-->
                            <!--            <div class="form_group">-->
                            <!--                <select name="locations" id="locations" class="form_control">-->
                            <!--                  <option selected="true" value="" disabled="disabled"><i class="fas fa-search"></i> Location</option>-->
                            <!--                  <option value="Karnataka">Karnataka</option>-->
                            <!--                  <option value="Maharashtra">Maharashtra</option>-->
                            <!--                  <option value="Bihar">Bihar</option>-->
                            <!--                  <option value="Tamil Nadu">Tamil Nadu</option>-->
                            <!--                </select>  -->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--        <div class="col-lg-3">-->
                            <!--            <div class="form_group">-->
                            <!--                <select name="locations" id="locations" class="form_control">-->
                            <!--                  <option selected="true" value="" disabled="disabled"><i class="fa fa-magnifying-glass"></i> Position</option>-->
                            <!--                  <option value="Karnataka">Karnataka</option>-->
                            <!--                  <option value="Maharashtra">Maharashtra</option>-->
                            <!--                  <option value="Bihar">Bihar</option>-->
                            <!--                  <option value="Tamil Nadu">Tamil Nadu</option>-->
                            <!--                </select>  -->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--        <div class="col-lg-3">-->
                            <!--            <div class="form_group">-->
                            <!--                <select name="locations" id="locations" class="form_control">-->
                            <!--                  <option selected="true" value="" disabled="disabled"><i class="fa-solid fa-magnifying-glass"></i> Department</option>-->
                            <!--                  <option value="Karnataka">Karnataka</option>-->
                            <!--                  <option value="Maharashtra">Maharashtra</option>-->
                            <!--                  <option value="Bihar">Bihar</option>-->
                            <!--                  <option value="Tamil Nadu">Tamil Nadu</option>-->
                            <!--                </select>  -->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--        <div class="col-lg-3">-->
                            <!--            <div class="form_group">-->
                            <!--                <button type="submit" class="main-btn primary-btn">Find Jobs</button>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--</form>-->
                            <form class="contact-form">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form_group">
                                            <label><i class="fa-solid fa-location-dot"></i></label>
                                            <input type="text" class="form_control" placeholder="Job location" id="location" name="location" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form_group">
                                            <label><i class="fa fa-user"></i></label>
                                            <input type="text" class="form_control" placeholder="Position" id="position" name="position" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form_group">
                                            <label><i class="fa-solid fa-briefcase"></i></label>
                                            <input type="text" class="form_control" placeholder="Department" id="department" name="department" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form_group">
                                            <button class="main-btn primary-btn" id="searchBtn" type="button">Find Jobs</button>
                                        </div>
                                    </div>
                                 </div>
                                </form>
        
    </div>
</section>
<!--====== End Info Section ======-->



<!--====== Start Info Section ======-->
<section class="info-section pt-30 pb-30">
    <div class="container">
        <div class="row justify-content-center" id="content_port">         
                @include('client.opening-result')
        </div>
        <div class="ajax-load text-center test-bold fs-25 py-4" style="display:none">

            <p>
               <img 
               src="{{ asset('assets/img/loader.gif') }}"
               srcset="{{ asset('assets/img/loader.gif') }}?tr=w-60,h-60,420w"
               alt="">
           </p>

       </div>
    </div>
</section>
<!--====== End Info Section ======-->

<br />

@endsection
@section('scripts')
@parent
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function () {
        var page = 1; // Initial page
        var isLoading = false;

        function loadResults(page) {
            var location = $('#location').val();
            var position = $('#position').val();
            var department = $('#department').val();

            $.ajax({
                url: '/search-openings', // Replace with your actual search endpoint
                type: 'GET',
                data: { 
                    page: page,
                    location: location,
                    position: position,
                    department: department
                },
                beforeSend: function () {
                    isLoading = true;
                    $('.ajax-load').show();
                },
                success: function (data) {
                        if (!data.html) {
                            $("#no_portfolio1").hide();
                            $('.ajax-load').html("No more careers available");
                        } else {
                            $('.ajax-load').hide();
                            $("#content_port").empty().append(data.html);
                        }
                    },
                complete: function () {
                    isLoading = false;
                    $('.ajax-load').hide();
                },
            });
        }

        // Initial load
        loadResults(page);

        // Search button click
        $('#searchBtn').on('click', function () {
            page = 1;
            $('#results').empty();
            loadResults(page);
        });

        // Load more button click
        $('#loadMoreBtn').on('click', function () {
            if (!isLoading) {
                loadResults(page);
            }
        });
    });
</script>


@endsection
