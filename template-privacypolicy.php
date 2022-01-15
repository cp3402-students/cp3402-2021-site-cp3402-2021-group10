<?php
//Template Name:Privacy Policy
get_header('two');
?>

<!-- Start Page Title Area -->
<div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>Privacy Policy</h2>
                    <ul>
                        <li><a href="<?php echo get_home_url();?>">Home</a></li>
                        <li>Privacy Policy</li>
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

        <!-- Start Privacy Policy Area -->
        <div class="privacy-policy-area ptb-100">
            <div class="container">
                <div class="privacy-policy-content">
                    <p><?php the_field('privacy_policy_details'); ?></p>
                </div>
            </div>
        </div>
        <!-- End Privacy Policy Area -->

        <!-- Start App Download Area -->
        <div class="app-download-area pb-100">
            <div class="container">
                <div class="app-download-inner bg-gray">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="app-download-content">
                                <span class="sub-title"><?php the_field('da_title'); ?></span>
                                <h2><?php the_field('da_subtitle'); ?></h2>
                                <p><?php the_field('da_description'); ?></p>
                                <div class="btn-box">
                                    <a href="<?php the_field('google_play_button_url'); ?>" class="playstore-btn" target="_blank">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/play-store.png" alt="image">
                                        Get It On
                                        <span>Google Play</span>
                                    </a>
                                    <a href="<?php the_field('apple_store_button_url'); ?>" class="applestore-btn" target="_blank">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/apple-store.png" alt="image">
                                        Download on the
                                        <span>Apple Store</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="app-download-image" data-aos="fade-up">
                                <img src="<?php the_field('da_image'); ?>" alt="app-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End App Download Area -->


<?php get_footer(); ?>