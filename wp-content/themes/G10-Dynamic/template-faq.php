<?php
//Template Name:FAQ
get_header('two');
?>

<!-- Start Page Title Area -->
<div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>Frequently Asked Questions</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>FAQ</li>
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

        <!-- Start FAQ Area -->
        <div class="faq-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="faq-sidebar">
                            <ul>
                                <?php $rows=get_field('faq_links');
                                if($rows) {foreach($rows as $row){
                                ?>
                                <li><a href="<?php echo $row['faq_url'] ?>"><span><?php echo $row['link_text'] ?></span></a></li>
                                <?php }} ?>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="faq-accordion accordion" id="faqAccordion">
                            <?php $rows=get_field('faq_accordion');
                            $n=0;
                            if($rows) {foreach($rows as $row){
                                $n=$n+1;
                            ?>
                            <div class="accordion-item">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $n; ?>" aria-expanded="true" aria-controls="collapse<?php echo $n; ?>"><?php echo $row['acc_title']; ?></button>
                                <div id="collapse<?php echo $n; ?>" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p><?php echo $row['acc_description']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php }} ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End FAQ Area -->

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