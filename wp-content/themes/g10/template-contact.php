<?php
//Template Name:Contact
get_header('two');
?>

 <!-- Start Page Title Area -->
 <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>Contact Us</h2>
                    <ul>
                        <li><a href="<?php echo get_home_url(); ?>">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
            <div class="divider"></div>
            <div class="lines">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <div class="banner-shape1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape9.png" alt="image"></div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Contact Area -->
        <div class="contact-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <h2>Have Questions?</h2>
                    <p>If you have any inquiries about G10, feel free to drop us a message here, we will do our best to get to you within 1 Working Day.</p>
                </div>
                <div class="contact-form">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" required data-error="Please enter your name" placeholder="Please enter your Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" id="email" required data-error="Please enter your email" placeholder="Please enter your Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="phone_number" class="form-control" id="phone_number" required data-error="Please enter your phone number" placeholder="Please enter your Phone Number">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="msg_subject" class="form-control" id="msg_subject" placeholder="Enter your subject" required data-error="Please enter your Subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control" cols="30" rows="6" required data-error="Please enter your message" placeholder="Enter message..."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <button type="submit" class="default-btn"><i class='bx bx-paper-plane'></i> Send Message</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53665.58443803727!2d103.80976167078084!3d1.345383757670559!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da1767b42b8ec9%3A0x400f7acaedaa420!2sSingapore!5e0!3m2!1sen!2ssg!4v1641903815415!5m2!1sen!2ssg"></iframe>
            </div>
        </div>
        <!-- End Contact Area -->

        <!-- Start Contact Info Area -->
        <div class="contact-info-area pb-100">
            <div class="container">
                <div class="contact-info-inner">
                    <h2>Have any urgent question in mind please call or mail us</h2>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-contact-info-box">
                                <div class="icon bg1">
                                    <i class="ri-customer-service-2-line"></i>
                                </div>
                                <h3><a href="tel:(+65) 1234 5678">(+65) 1234 5678</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-contact-info-box">
                                <div class="icon">
                                    <i class="ri-earth-line"></i>
                                </div>
                                <h3><a href="mailto:G10_Project@gmail.com">G10_Project@gmail.com</a></h3>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-contact-info-box">
                                <div class="icon bg2">
                                    <i class="ri-map-pin-line"></i>
                                </div>
                                <h3>123 G10 Street, S123456, Singapore</h3>
                            </div>
                        </div>
                    </div>
                    <div class="lines">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Info Area -->


<?php get_footer('blackbglink'); ?>