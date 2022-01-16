<?php
//Template Name:Home
get_header();
?>

<!-- Start Banner Wrapper Area -->
<div class="banner-wrapper-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12">
                        <div class="banner-wrapper-content">
                            <span class="sub-title"><?php the_field('secure_title'); ?></span>
                            <h1><?php the_field('secure_subtitle'); ?></h1>
                            <p><?php the_field('secure_description'); ?></p>
                            <a href="<?php the_field('secure_button_url');?>" class="default-btn"><?php the_field('secure_button'); ?></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="banner-wrapper-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner/banner-img1.png" alt="banner-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner/banner-img2.png" data-aos="fade-left" alt="banner-img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape13"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape15.png" alt="shape"></div>
            <div class="shape14"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape17.png" alt="shape"></div>
            <div class="shape15"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape18.png" alt="shape"></div>
        </div>
        <!-- End Banner Wrapper Area -->

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

        <!-- Start Overview Area -->
        <div class="overview-area">
            <div class="container-fluid">
                <div class="row m-0">
                    <div class="col-xl-6 col-lg-12 col-md-12 p-0">
                        <div class="overview-content">
                            <h2><?php the_field('home3_title'); ?></h2>
                            <p><?php the_field('home3_description'); ?></p>
                            <ul class="features-list">
                                <?php $rows = get_field('home_icongroup'); 
                                if($rows) {foreach($rows as $row) {
                                ?>
                                <li>
                                    <div class="icon">
                                        <i class="<?php echo $row['home3_icon']; ?>"></i>
                                    </div>
                                    <h3><?php echo $row['home3_icontitle']; ?></h3>
                                    <p><?php echo $row['home3_icondesc']; ?></p>
                                </li>
                                <?php }} ?>
                                
                            </ul>
                            <div class="btn-box">
                                <a href="<?php the_field('home3_button'); ?>" class="default-btn">Start Free Trail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12 p-0">
                        <div class="overview-image bg1">
                            <img src="<?php the_field('section3_image'); ?>" alt="overview">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Overview Area -->

        <!-- Start Features Area -->
        <div class="features-area pt-100 pb-75">
            <div class="container">
                <ul class="features-boxes-list">
                    <?php $rows = get_field('feature_set');
                    if($rows) {foreach($rows as $row){
                    ?>
                    <li>
                        <div class="features-list-box">
                            <div class="icon <?php echo $row['bg_class']; ?>">
                                <i class="<?php echo $row['feature_icon']; ?>"></i>
                            </div>
                            <h3><?php echo $row['feature_details']; ?></h3>
                        </div>
                    </li>
                    <?php }} ?>
                    
                </ul>
            </div>
        </div>
        <!-- End Features Area -->

        <!-- Start Video Area -->
        <div class="video-area">
            <div class="container">
                <div class="video-box">
                    <img src="<?php the_field('video_image'); ?>" alt="video-image">
                    <a href="https://vimeo.com/665450269" class="video-btn popup-video"><i class="ri-play-line"></i></a>
                    <div class="shape">
                        <img class="shape1" src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape1.png" alt="shape1">
                        <img class="shape2" src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape2.png" alt="shape2">
                    </div>
                </div>
            </div>
        </div>
        <!-- End Video Area -->

        <!-- Start Features Area -->
        <div class="features-area pt-100 pb-75">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title"><?php the_field('keyfeature_title'); ?></span>
                    <h2><?php the_field('keyfeature_subtitle'); ?></h2>
                </div>
                <div class="row justify-content-center">
                    <?php $rows = get_field('key_features_set');
                    if($rows) {foreach($rows as $row) {
                    ?>
                    <div class="col-lg-4 col-sm-6 col-md-6">
                        <div class="features-item">
                            <div class="icon <?php echo $row['background_class']; ?>">
                                <i class="<?php echo $row['keyfeature_icon']; ?>"></i>
                            </div>
                            <h3><?php echo $row['keyfeature_title']; ?></h3>
                            <p><?php echo $row['keyfeature_des']; ?></p>
                        </div>
                    </div>
                    <?php }} ?>
                    
                </div>
            </div>
        </div>
        <!-- End Features Area -->

        <!-- Start Screenshots Area -->
        <div class="screenshots-area bg-black-color ptb-100">
            <div class="container">
                <div class="section-title color-white">
                    <span class="sub-title"><?php the_field('appscreen_title'); ?></span>
                    <h2><?php the_field('appscreen_subtitle'); ?></h2>
                </div>
                <div class="screenshots-slides owl-carousel owl-theme">
                    <?php $rows = get_field('appscreen_slides');
                    if($rows) {foreach($rows as $row) {
                    ?>
                    <div class="single-screenshot-item">
                        <img src="<?php echo $row['appscreen_image']; ?>" alt="screenshots">
                    </div>
                    <?php }} ?>
                    
                </div>
            </div>
        </div>
        <!-- End Screenshots Area -->

        <!-- Start Software Integrations Area -->
        <div class="software-integrations-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="software-integrations-content">
                            <span class="sub-title"><?php the_field('si_title'); ?></span>
                            <h2><?php the_field('si_subtitle'); ?></h2>
                            <p><?php the_field('si_description'); ?></p>
                            <a href="<?php the_field('si_button_url'); ?>" class="default-btn">Get Started</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="software-integrations-list">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/bg-shape2.png" alt="bg-shape">
                            <ul>
                                <li data-aos="fade-down"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/software-integrations/atlassian.png" class="atlassian" alt="atlassian"></li>
                                <li data-aos="fade-right"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/software-integrations/skype.png" class="skype" alt="skype"></li>
                                <li data-aos="fade-up"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/software-integrations/gdrive.png" class="gdrive" alt="gdrive"></li>
                                <li data-aos="fade-down"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/software-integrations/slack.png" class="slack" alt="slack"></li>
                                <li data-aos="fade-up"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/software-integrations/jira.png" class="jira" alt="jira"></li>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/software-integrations/frame.png" class="frame" alt="frame"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape6"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape5.png" alt="shape"></div>
        </div>
        <!-- End Software Integrations Area -->

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

        <!-- Start Pricing Area -->
        <div class="pricing-area bg-black-color ptb-100">
            <div class="container">
                <div class="section-title color-white">
                    <span class="sub-title"><?php the_field('pp_title'); ?></span>
                    <h2><?php the_field('pp_subtitle'); ?></h2>
                </div>
                <div class="row justify-content-center">
                <?php $rows = get_field('card_details');
                        if($rows) {foreach($rows as $row){
                        ?>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-pricing-box <?php if($row['is_active']=='yes') {echo 'active';} ?>">
                            <div class="title">
                                <h3><?php  echo $row['card_title'] ?></h3>
                                <p><?php  echo $row['card_subtitle'] ?></p>
                            </div>
                            <?php if($row['is_popular']=='yes'){ ?><span class="popular">Most Popular</span> <?php } ?>
                            <div class="price">
                            <?php  echo $row['card_price'] ?> <span>/Month</span>
                            </div>
                            <a href="<?php  echo $row['card_button_url'] ?>" class="default-btn">Purchase Plan</a>
                            <ul class="features-list">
                                <?php $cards = $row['card_features'];
                                if($cards) {foreach($cards as $card) {
                                ?>
                                <li><i class="<?php echo $card['card_icon_class']; ?>"></i> <?php echo $card['card_feature_details']; ?></li>
                                <?php }} ?>
                                
                            </ul>
                        </div>
                    </div>
                    <?php }} ?>
                    
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="see-more-pricing color-white">
                            <a href="<?php echo get_home_url();?>/pricing" class="link-btn">See All Pricing Plan</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape7"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape6.png" alt="shape"></div>
            <div class="shape8"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape7.png" alt="shape"></div>
        </div>
        <!-- End Pricing Area -->

        <!-- Start Feedback Area -->
        <div class="feedback-area bg-F4F8FC ptb-100">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title"><?php the_field('cr_title'); ?></span>
                    <h2><?php the_field('cr_subtitle'); ?></h2>
                </div>
                <div class="feedback-slides owl-carousel owl-theme">
                    <?php $rows = get_field('review_details'); 
                    if($rows) {foreach($rows as $row){
                    ?>
                    <div class="single-feedback-box">
                        <div class="client-info">
                            <div class="d-flex align-items-center">
                                <img src="<?php echo $row['reviewer_image']; ?>" alt="user">
                                <div class="title">
                                    <h3><?php echo $row['re_name']; ?></h3>
                                    <span><?php echo $row['re_designation']; ?></span>
                                </div>
                            </div>
                        </div>
                        <p><?php echo $row['re_review']; ?></p>
                        <div class="rating d-flex align-items-center justify-content-between">
                            <h5><?php echo $row['re_field']; ?></h5>
                            <div>
                                <?php 
                                $stars = $row['star_rating'];
                                if($stars) {foreach($stars as $star){
                                ?>
                                <i class="<?php 
                                if($star['star']=='full_star') {echo 'ri-star-fill';}
                                if($star['star']=='half_star') {echo 'ri-star-half-line';} 
                                if($star['star']=='empty_star') {echo 'ri-star-line';} 
                                ?>"></i>
                                <?php }} ?>
                            </div>
                        </div>
                    </div>
                    <?php }} ?>
                    
                </div>
            </div>
        </div>
        <!-- End Feedback Area -->


<?php get_footer(); ?>
