@extends('client.header')
@section('content')

<!--====== Start Page-title-area section ======-->
<section class="page-title-area text-white bg_cover" style="background-image: url(assets/images/job-apply.jpg);">
    <div class="container">
        <!--======  Page-title-Inner ======-->
        <div class="page-title-inner text-center">
            <h1 class="page-title">Job Application </h1>
            <div class="gd-breadcrumb">
                <span class="breadcrumb-entry"><a href="index.html">Home</a></span>
                <span class="separator"></span>
                <span class="breadcrumb-entry active">Job Application </span>
            </div>
        </div>
    </div>
</section>
<!--====== End Page-title-area section ======-->

<section class="faq-section pt-95 bg-dark-goc">
    <div class="container">
        <div class="accordion" id="accordionOne">
            <div class="row">
                <div class="col-lg-10">
                    <h3 class="title">{{$openings->position}}</h3>
                    <div class="faq-content-box wow fadeInLeft">
                        <div class="accordion-card mb-15">
                            <div class="accordion-header">
                                <h6 class="accordion-title" data-toggle="collapse" data-target="#collapse0"
                                    aria-expanded="true">
                                    Job Description
                                </h6>
                            </div>
                            <div id="collapse0" class="accordion-collapse collapse show" data-parent="#accordionOne">
                                <div class="accordion-body">
                                    <p>
                                        <?php echo $openings->description ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card mb-15">
                            <div class="accordion-header">
                                <h6 class="accordion-title collapsed" data-toggle="collapse" data-target="#collapse1"
                                    aria-expanded="false">
                                    Roles & Responsibilities
                                </h6>
                            </div>
                            <div id="collapse1" class="accordion-collapse collapse" data-parent="#accordionOne">
                                <div class="accordion-body">
                                    <?php echo $openings->roles ?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card mb-15">
                            <div class="accordion-header">
                                <h6 class="accordion-title collapsed" data-toggle="collapse" data-target="#collapse2"
                                    aria-expanded="false">
                                    Qualification & Experience
                                </h6>
                            </div>
                            <div id="collapse2" class="accordion-collapse collapse" data-parent="#accordionOne">
                                <div class="accordion-body">
                                    <?php echo $openings->qualification ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--====== Start Shop Details Section ======-->
<section class="shop-details-section pt-30 pb-10">
    <div class="container">
        <div class="product-details-wrapper">
            <div class="row">
                <div class="col-xl-10 col-lg-10">
                    <div class="description-wrapper mt-30">
                        <h3 class="title" style="color:#000;">Job Application</h3>
                        <p>All fields are mandatory</p>
                        <!--=== Review Form ===-->
                        <div class="review-form-area wow fadeInUp mt-10 mb-10">
                            <form class="review-form" method="post" action="{{ route('home.save_job') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$openings->id}}">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="First Name"
                                                name="fname" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Last Name" name="lname"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="email" class="form_control" placeholder="Email Address"
                                                name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Phone Number" onkeypress="num_validate(event)"
                                                name="phone" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Position Applying" value="{{$openings->position}}"
                                                name="job" required disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Job Location" value="{{$openings->location}}"
                                                name="jobloc" required disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <!-- <label for="resumeFile">Upload Resume</label> -->
                                            <input type="file" id="resumeFile" class="form_control" accept="application/msword, application/pdf"
                                                placeholder="Job Location" name="resumeFile" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <button type="submit" class="main-btn primary-btn">Submit Application</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Shop Details Section ======-->

<br />

@endsection
@section('scripts')
@parent
<script type="text/javascript">

</script>
@endsection