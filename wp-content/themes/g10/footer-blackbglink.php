<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package G10
 */

?>

	<footer id="colophon" class="site-footer">
		<!-- Start Footer Area -->
        <div class="footer-area footer-style-two bg-black">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <a href="index.html" class="logo">
                                <?php the_custom_logo(); ?>
                            </a>
                            <p>Best solution for your it startup business, consecteturadipiscing elit. Scelerisque amet odio velit,  auctor nam elit nulla.</p>
                            <ul class="social-links">
                                <li><a href="#" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                                <li><a href="#" target="_blank"><i class="ri-twitter-fill"></i></a></li>
                                <li><a href="#" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
                                <li><a href="#" target="_blank"><i class="ri-messenger-fill"></i></a></li>
                                <li><a href="#" target="_blank"><i class="ri-github-fill"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget pl-2">
                            <h3>Company</h3>
                            <ul class="links-list">
                                <li><a href="<?php echo get_home_url(); ?>/about-us">About Us</a></li>
                                <li><a href="<?php echo get_home_url(); ?>/privacy-policy">Refund Policy</a></li>
                                <li><a href="<?php echo get_home_url(); ?>/faq">FAQ's</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Support</h3>
                            <ul class="links-list">
                                <li><a href="<?php echo get_home_url(); ?>/contact">Support</a></li>
                                <li><a href="<?php echo get_home_url(); ?>/privacy-policy">Privacy Policy</a></li>
                                <li><a href="<?php echo get_home_url(); ?>/faq">FAQ's</a></li>
                                <li><a href="<?php echo get_home_url(); ?>/contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Useful Links</h3>
                            <ul class="links-list">
                                <li><a href="<?php echo get_home_url(); ?>/privacy-policy">Privacy Policy</a></li>
                                <li><a href="<?php echo get_home_url(); ?>/privacy-policy">Return Policy</a></li>
                                <li><a href="<?php echo get_home_url(); ?>/how-it-works">How It Works?</a></li>
                                <li><a href="<?php echo get_home_url(); ?>/contact-us">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Newsletter</h3>
                            <p>Best solution for your it startup business, consecteturadipiscing elit.</p>
                            <form class="newsletter-form" data-toggle="validator">
                                <input type="text" class="input-newsletter" placeholder="Your Email" name="EMAIL" required autocomplete="off">
                                <button type="submit"><i class="ri-send-plane-2-line"></i></button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="copyright-area">
                    <p>Copyright @2021 <strong>G10</strong>.</p>
                </div>
            </div>
        </div>
        <!-- End Footer Area -->

        <div class="go-top"><i class="ri-arrow-up-s-line"></i></div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper-bundle.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/magnific-popup.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/meanmenu.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/appear.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/form-validator.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/contact-form-script.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/ajaxchimp.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/aos.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
		
</body>
</html>
