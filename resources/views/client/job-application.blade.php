@extends('client.header')
@section('content')


<style>
    .job-open ul {

        list-style: none;
        padding: 0;
    }

    .job-open li {
        padding-left: 1em;
    }

    .job-open li:before {
        content: "\f18c";
        font-family: FontAwesome;
        display: inline-block;
        margin-left: calc(1em * -1);
        color: #2a7d2e !important;
        margin-right: 0.5rem;
    }



    @media (max-width:567px) {
        .job-open h3 {
            font-size: 18px;
        }

        .job-open h6 {
            font-size: 16px;
        }
    }
</style>
<section class="faq-section pt-50 ptbmob-30 bg-dark-goc job-open">
    <div class="container">
        <div class="accordion" id="accordionOne">
            <div class="row">
                <div class="col-lg-10">
                    <h3 class="title">{{ $openings->position }}</h3>
                    <div class="faq-content-box wow fadeInLeft">
                        <div class="accordion-card mb-15">
                            <div class="accordion-header">
                                <h6 class="accordion-title" data-toggle="collapse" data-target="#collapse0" aria-expanded="true">
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
                                <h6 class="accordion-title collapsed" data-toggle="collapse" data-target="#collapse1" aria-expanded="false">
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
                                <h6 class="accordion-title collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="false">
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
<section class="shop-details-section pt-10 pb-10">
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

                                <input type="hidden" name="id" value="{{ $openings->id }}">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" onkeypress="return /[a-zA-Z,' ']/i.test(event.key)" placeholder="First Name" name="fname" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" onkeypress="return /[a-zA-Z,' ']/i.test(event.key)" placeholder="Last Name" name="lname" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="email" class="form_control" placeholder="Email Address" name="email" id="emailInput" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" onkeypress="num_validate(event)" oninput="maxLengthCheck(this)" maxlength="10" minlength="10" placeholder="Phone Number" name="phone" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" onkeypress="return /[a-zA-Z,' ']/i.test(event.key)" placeholder="Qualification" name="qualification" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" onkeypress="num_validate(event)" placeholder="Years of Experience" name="experience" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control disable-style" placeholder="Position Applying" value="{{ $openings->position }}" name="job" required disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control disable-style" placeholder="Job Location" value="{{ $location->location }}" name="jobloc" required disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <label for="resumeFile">Upload Resume</label>
                                            <input type="file" id="resumeFile" class="form_control" accept="application/msword, application/pdf" placeholder="Resume" name="resumeFile" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <button type="submit" class="main-btn primary-btn">Submit Application</button>
                                        </div>
                                        <br />
                                        <div class="my-3 d-none success-message" style="width: 100%">
                                            <h4>Thank you, we will get back to you.</h4>
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

<style>
    .disable-style {
        background-color: #2a7d2e21;
    }
</style>



@endsection
@section('scripts')
@parent
<script>
    $(document).ready(function() {
        $('.review-form').submit(function(e) {
            e.preventDefault();

            var form = $(this);
            form.find(':submit').prop('disabled', true);
            var route = "{{ url('save_job') }}";

            $.ajax({
                type: 'POST',
                url: route,
                data: new FormData(form[0]),
                contentType: false,
                processData: false,
                success: function(response) {
                    // Handle the success response here
                    console.log(response);

                    // Show the success message
                    form.find('.success-message').removeClass('d-none').addClass('d-block');

                    // Reset the form and hide the success message after 5 seconds
                    setTimeout(function() {
                        form.find('.success-message').removeClass('d-block').addClass('d-none');
                        form[0].reset();
                    }, 5000);
                },
                error: function(error) {
                    // Handle the error response here
                    console.log(error);
                }
            });
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var emailInput = document.getElementById('emailInput');

        emailInput.addEventListener('input', function() {
            validateEmail();
        });

        function validateEmail() {
            var email = emailInput.value.trim();
            var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

            if (emailRegex.test(email)) {
                // Valid email format
                var allowedDomains = ['com', 'in', 'co']; // Add more domain extensions as needed
                var domain = email.split('.').pop();

                if (allowedDomains.includes(domain)) {
                    // Email is valid with allowed domain extension
                    emailInput.setCustomValidity('');
                } else {
                    // Invalid domain extension
                    emailInput.setCustomValidity('Please enter a valid email with allowed domain extension(s).');
                }
            } else {
                // Invalid email format
                emailInput.setCustomValidity('Please enter a valid email address.');
            }
        }
    });
</script>

@endsection