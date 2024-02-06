

<div class="modal fade sidebar-panel-wrapper" id="service-modal">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <button class="close" data-dismiss="modal" style="color:#000;"><i class="fa fa-times"></i></button>
            <div class="sidebar-wrapper">
                <div class="sidebar-information-area">
                    <div class="row no-gutters">
                        <div class="col-xl-12 col-lg-12 sidebar-widget">
                            <div class="description-wrapper mt-30">
                                <h3 class="title" style="color:#000;">Drop us a message</h3>
                                <!--<p style="color:#000;">Our team will get back to you shortly.</p>-->
                                <!--=== Review Form ===-->
                                <div class="review-form-area wow fadeInUp mt-10 mb-10">
                                    <form class="review-form service-form" method="post" id="service-form"
                                        action="{{ route('home.save_enquiry') }}">
                                        @csrf
                                       
                                        <input type="hidden" name="type" value="3">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form_group">
                                                    <input type="text" class="form_control" onkeypress="return /[a-zA-Z,' ']/i.test(event.key)" placeholder="Your Name"
                                                        name="name" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form_group">
                                                    <input type="text" class="form_control" onkeypress="num_validate(event)" 
                                                    oninput="maxLengthCheck(this)" maxlength="10" minlength="10" 
                                                    placeholder="Phone Number" name="phone" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form_group">
                                                    <input type="text" class="form_control" placeholder="Email Address"
                                                         name="email" id="emailField" required oninput="validateDomain()">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form_group">
                                                    <input type="text" class="form_control" placeholder="Location"
                                                        name="loc" required>
                                                </div>
                                            </div>
                                       
                                            <div class="col-lg-12">
                                                <div class="form_group">
                                                    <textarea name="message" class="form_control"
                                                        placeholder="Message" required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form_group">
                                                    <button type="submit"
                                                        class="main-btn primary-btn">Submit</button>
                                                </div>
                                                <br/>
                                                <div class="my-3 d-none service-message" style="width: 100%">
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
        </div>
    </div>
</div>
