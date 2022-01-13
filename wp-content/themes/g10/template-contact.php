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
                    <h2><?php  the_field('cf_title'); ?></h2>
                    <p><?php  the_field('cf_description'); ?></p>
                </div>
                <div class="contact-form">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" required data-error="Please enter your name" placeholder="Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" id="email" required data-error="Please enter your email" placeholder="Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="phone_number" class="form-control" id="phone_number" required data-error="Please enter your phone number" placeholder="Phone number">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="msg_subject" class="form-control" id="msg_subject" placeholder="Subject" required data-error="Please enter your subject subject">
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
                <iframe src="<?php the_field('map_url'); ?>"></iframe>
            </div>
        </div>
        <!-- End Contact Area -->

        <!-- Start Contact Info Area -->
        <div class="contact-info-area pb-100">
            <div class="container">
                <div class="contact-info-inner">
                    <h2><?php the_field('contact_text'); ?></h2>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-contact-info-box">
                                <div class="icon bg1">
                                    <i class="ri-customer-service-2-line"></i>
                                </div>
                                <?php $rows=get_field('contact_phone'); 
                                if($rows) {foreach($rows as $row){
                                ?>
                                <h3><a href="tel:<?php echo $row['phone_no']; ?>"><?php echo $row['phone_no']; ?></a></h3>
                                <?php }} ?>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-contact-info-box">
                                <div class="icon">
                                    <i class="ri-earth-line"></i>
                                </div>
                                <?php $rows=get_field('contact_email'); 
                                if($rows) {foreach($rows as $row){
                                ?>
                                <h3><a href="mailto:<?php echo $row['email_address']; ?>"><?php echo $row['email_address']; ?></a></h3>
                                <?php }} ?>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-contact-info-box">
                                <div class="icon bg2">
                                    <i class="ri-map-pin-line"></i>
                                </div>
                                <h3><?php the_field('contact_address'); ?></h3>
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


<?php get_footer(); ?>