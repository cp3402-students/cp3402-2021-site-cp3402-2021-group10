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
        <div class="footer-area">
            <div class="container">
                <div class="footer-content">
                    <a href="index.html" class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo2.png" alt="logo">
                    </a>
                    <ul class="social-links">
                        <li><a href="#" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                        <li><a href="#" target="_blank"><i class="ri-twitter-fill"></i></a></li>
                        <li><a href="#" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
                        <li><a href="#" target="_blank"><i class="ri-messenger-fill"></i></a></li>
                        <li><a href="#" target="_blank"><i class="ri-github-fill"></i></a></li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="<?php echo get_home_url(); ?>/contact-us" class="nav-link">Support</a></li>
                        <li class="nav-item"><a href="<?php echo get_home_url(); ?>/privacy-policy" class="nav-link">Privacy Policy</a></li>
                        <li class="nav-item"><a href="<?php echo get_home_url(); ?>/faq" class="nav-link">FAQ's</a></li>
                        <li class="nav-item"><a href="<?php echo get_home_url(); ?>/contact-us" class="nav-link">Contact</a></li>
                    </ul>
                    <p class="copyright">Copyright @2021 <strong>G10</strong>.</p>
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
