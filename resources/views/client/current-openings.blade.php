@extends('client.header')
@section('content')

   <!-- Include jQuery -->
   <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

   <!-- Include jQuery UI -->
   <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

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
<!--====== Start Page-title-area section ======-->
<section class="page-title-area text-white bg_cover desktop-view" style="background-image: url(assets/images/current-openings-header-img4.jpg);">
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
<section class="mobile-view">
<section class="page-title-area text-white bg_cover" style="background-image: url(assets/images/current-openings-header-img4.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Join Us </h1>
           
        </div>
    </div>
</section>
<div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="{{url('/')}}">Home | </a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Current Openings </span>
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
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js">
</script>
<script type="text/javascript">
    var route = "{{ url('autocomplete-search') }}";
    $('#location').typeahead({
        source: function (query, process) {
            return $.get(route, {
                query: query
            }, function (data) {
                  // Extract 'location' field from the response
                  var locations = data.map(function(item) {
                    return item.location;
                });
                return process(locations);
            });
        }
    });
    var department = "{{ url('autocomplete-department') }}";
    $('#department').typeahead({
        source: function (query, process) {
            return $.get(department, {
                query: query
            }, function (data) {
                  // Extract 'location' field from the response
                  var name = data.map(function(item) {
                    return item.name;
                });
                return process(name);
            });
        }
    });
</script>
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
