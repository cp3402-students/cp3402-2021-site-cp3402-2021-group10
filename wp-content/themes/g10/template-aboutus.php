<?php
//Template Name:About Us
get_header();
?>

        <!-- Start Page Title Area -->
        <div class="page-title-area page-title-style-two">
            <div class="container">
                <div class="page-title-content">
                    <h2>About Us</h2>
                    <ul>
                        <li><a href="<?php echo get_home_url(); ?>">Home</a></li>
                        <li>About Us</li>
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

        <!-- Start About Area -->
        <div class="about-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-content">
                            <span class="sub-title"><?php the_field('au_title'); ?></span>
                            <h2><?php the_field('au_subtitle'); ?></h2>
                            <div><?php the_field('au_description'); ?></div>
                            <div class="btn-box">
                                <a href="<?php the_field('au_button_url'); ?>" class="default-btn"><?php the_field('au_button_text'); ?></a>
                                <a href="<?php the_field('all_features_url'); ?>" class="link-btn">See All Features</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="about-img">
                            <img src="<?php the_field('au_image'); ?>" data-aos="fade-up" alt="about">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Area -->

        <!-- Start App Progress Area -->
        <div class="app-progress-area" style="padding-bottom:100px;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="app-progress-image text-center">
                            <img src="<?php the_field('ap_image'); ?>" alt="app-img">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="app-progress-content">
                            <span class="sub-title"><?php the_field('ap_title'); ?></span>
                            <h2><?php the_field('ap_subtitle'); ?></h2>
                            <p><?php the_field('ap_description'); ?><p>
                            <a href="<?php the_field('ap_button_url'); ?>" class="default-btn">Start Free Trial</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End App Progress Area -->

        <!-- Start Team Area -->
        <div class="team-area pt-100 pb-75">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title"><?php the_field('oe_title'); ?></span>
                    <h2><?php the_field('oe_subtitle'); ?></h2>
                </div>
                <div class="row justify-content-center">
                    <?php $rows = get_field('oe_details');
                    if($rows) {foreach($rows as $row){
                    ?>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-team-member">
                            <div class="image">
                                <img src="<?php echo $row['oe_image']; ?>" alt="image">
                            </div>
                            <div class="content">
                                <h3><?php echo $row['oe_name']; ?></h3>
                                <span><?php echo $row['oe_designation']; ?></span>
                            </div>
                            <ul class="social-links">
                                <li><a href="<?php echo $row['oe_fb']; ?>" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                                <li><a href="<?php echo $row['oe_in']; ?>" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
                                <li><a href="<?php echo $row['oe_twitter']; ?>" target="_blank"><i class="ri-twitter-fill"></i></a></li>
                                <li><a href="#<?php echo $row['oe_insta']; ?>" target="_blank"><i class="ri-instagram-line"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <?php }} ?>
                    
                </div>
            </div>
        </div>
        <!-- End Team Area -->

        <!-- Start Feedback Area -->
        <div class="feedback-area bg-F4F8FC ptb-100">
            <div class="container">
                <div class="feedback-tabs">
                    <div class="tab-content" id="myTabContent">
                        <?php $rows = get_field('review_details'); 
                        $n=0;
                        if($rows) {foreach($rows as $row) {
                            $n=$n+1;
                        ?>
                        <div class="tab-pane fade <?php if($row['r_active']=='yes') {echo 'show active';} ?>" id="feedback<?php echo $n; ?>" role="tabpanel">
                            <p><?php echo $row['re_review']; ?></p>
                            <h6><span><?php echo $row['re_name']; ?></span> - <?php echo $row['re_designation']; ?></h6>
                        </div>
                        <?php }} ?>
                        
                    </div>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <?php $rows = get_field('review_details'); 
                        $n=0;
                        if($rows) {foreach($rows as $row) {
                            $n=$n+1;
                        ?>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link <?php if($row['r_active']=='yes') {echo 'active';} ?>" id="feedback<?php echo $n; ?>-tab" data-bs-toggle="tab" data-bs-target="#feedback<?php echo $n; ?>" type="button" role="tab" aria-controls="feedback<?php echo $n; ?>" aria-selected="true"><img src="<?php echo $row['reviewer_image']; ?>" alt="user"></button>
                        </li>
                        <?php }} ?>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Feedback Area -->

        <!-- Start Partner Area -->
        <div class="partner-area ptb-100">
            <div class="container">
                <div class="partner-title">
                    <?php the_field('company_slider_title'); ?>
                </div>
                <div class="partner-slides owl-carousel owl-theme">
                    <?php $rows = get_field('company_slider');
                        if($rows) {foreach($rows as $row) { ?>
                    <div class="partner-item">
                        <a href="#" class="d-block">
                            <img src="<?php echo $row['company_slider_image']; ?>" alt="image">
                        </a>
                    </div>
                    <?php }} ?>
                    
                </div>
            </div>
        </div>
        <!-- End Partner Area -->

        <!-- Start Funfacts Area -->
        <div class="funfacts-area ptb-100">
            <div class="container">
                <div class="row justify-content-center m-0">
                    <?php $rows = get_field('fun_fact_details');
                    if($rows) {foreach($rows as $row){
                    ?>
                    <div class="col-lg-3 col-sm-6 col-md-6 p-0">
                        <div class="funfacts-box mb-0 <?php echo $row['ff_background'] ?>">
                            <div class="icon">
                                <i class="<?php echo $row['ff_iconclass'] ?>"></i>
                            </div>
                            <p><?php echo $row['ff_text'] ?></p>
                            <h3><span class="odometer" data-count="<?php echo $row['ff_count'] ?>">00</span><span class="sign"><?php echo $row['ff_count_unit'] ?></span></h3>
                        </div>
                    </div>
                    <?php }} ?>
                    
                </div>
            </div>
        </div>
        <!-- End Funfacts Area -->

        <!-- Start App Download Area -->
        <div class="app-download-area">
            <div class="container">
                <div class="app-download-inner">
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
                    <div class="shape5"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape4.png" alt="shape4"></div>
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
        <!-- End App Download Area -->


<?php get_footer(); ?>