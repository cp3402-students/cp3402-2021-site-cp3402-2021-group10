<?php
//Template Name:Pricing
get_header('two');
?>

<!-- Start Page Title Area -->
<div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>Pricing Plan</h2>
                    <ul>
                        <li><a href="<?php echo get_home_url();?>">Home</a></li>
                        <li>Pricing Plan</li>
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

        <?php $pricing_style=get_field('choose_style'); ?>

        <!-- Start Pricing Area -->
        <?php if($pricing_style=='style1') { ?>
        <div class="pricing-area pt-100 pb-75">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">PRICING TABLE</span>
                    <h2>No Hidden Charge Applied, Choose Your Plan</h2>
                </div>
                <div class="row align-items-center justify-content-center">
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
                    
                </div>
            </div>
            <div class="shape12"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape11.png" alt="shape"></div>
            <div class="shape13"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape15.png" alt="shape"></div>
        </div>
        <?php } ?>
        <!-- End Pricing Area -->

        <!-- Start Pricing Area -->
        <?php if($pricing_style=='style2') { ?>
        <div class="pricing-area bg-gradient-color pt-100 pb-75">
            <div class="container">
                <div class="pricing-tabs">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="pricing-section-title">
                                <span class="sub-title">PRICING TABLE</span>
                                <h2>No Hidden Charge Applied, Choose Your Plan</h2>
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="nav-monthly-tab" data-bs-toggle="tab" data-bs-target="#nav-monthly" type="button" role="tab" aria-controls="nav-monthly" aria-selected="true">Monthly</button>
                                        <button class="nav-link" id="nav-yearly-tab" data-bs-toggle="tab" data-bs-target="#nav-yearly" type="button" role="tab" aria-controls="nav-yearly" aria-selected="false">Yearly</button>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-monthly" role="tabpanel">
                                    <div class="row">
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
                    
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-yearly" role="tabpanel">
                                    <div class="row">
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
                                                <?php  echo $row['yearly_price'] ?> <span>/Year</span>
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
                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape7"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape6.png" alt="shape"></div>
            <div class="shape8"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape7.png" alt="shape"></div>
        </div>
        <?php } ?>
        <!-- End Pricing Area -->

        <!-- Start Pricing Area -->
        <?php if($pricing_style=='style3') { ?>
        <div class="pricing-area pt-100 pb-75">
            <div class="container">
                <div class="pricing-tabs">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="pricing-section-title black-color">
                                <span class="sub-title">PRICING TABLE</span>
                                <h2>No Hidden Charge Applied, Choose Your Plan</h2>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div class="row">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <!-- End Pricing Area -->

        <!-- Start Pricing Area -->
        <?php if($pricing_style=='style4') { ?>
        <div class="pricing-area bg-black-color ptb-100">
            <div class="container">
                <div class="section-title color-white">
                    <span class="sub-title">PRICING TABLE</span>
                    <h2>No Hidden Charge Applied, Choose Your Plan</h2>
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
                            <a href="#" class="link-btn">See All Pricing Plan</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape7"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape6.png" alt="shape"></div>
            <div class="shape8"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape7.png" alt="shape"></div>
        </div>
        <?php } ?>
        <!-- End Pricing Area -->

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

        <!-- Start Pricing Area -->
        <?php if($pricing_style=='style5') { ?>
        <div class="pricing-area gradient-color ptb-100">
            <div class="container">
                <div class="section-title color-white">
                    <span class="sub-title">PRICING TABLE</span>
                    <h2>No Hidden Charge Applied, Choose Your Plan</h2>
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
                            <a href="#" class="link-btn">See All Pricing Plan</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape7"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape6.png" alt="shape"></div>
            <div class="shape8"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape7.png" alt="shape"></div>
        </div>
        <?php } ?>
        <!-- End Pricing Area -->

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