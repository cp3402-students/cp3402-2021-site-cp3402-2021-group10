<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package G10
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Link of CSS files -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/aos.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/fontawesome.min.css">   
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/remixicon.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">

		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'g10' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			
			$g10_description = get_bloginfo( 'description', 'display' );
			if ( $g10_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $g10_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			
            <!-- Start Navbar Area -->
            <div class="navbar-area">
                <div class="g10-responsive-nav">
                    <div class="container">
                        <div class="g10-responsive-menu">
                            <div class="logo">
                                <?php the_custom_logo(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="g10-nav">
                    <div class="container">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <?php echo the_custom_logo(); ?>
                            <div class="collapse navbar-collapse mean-menu">
                                <ul class="navbar-nav">
                                    <li class="nav-item"><a href="<?php echo get_home_url();?>" class="nav-link active">Home</a>
                                    </li>
                                    <li class="nav-item"><a href="#" class="dropdown-toggle nav-link">Product</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?php echo get_home_url();?>/how-it-works">How It Works</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a href="#" class="dropdown-toggle nav-link">About</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?php echo get_home_url();?>/about-us">About Us</a></li>
                                            <li><a href="<?php echo get_home_url();?>/pricing">Pricing Plan</a></li>
                                            <li><a href="<?php echo get_home_url();?>/faq">FAQ</a></li>
                                            <li><a href="<?php echo get_home_url();?>/privacy-policy">Privacy Policy</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a href="<?php echo get_home_url();?>/contact-us" class="nav-link">Contacts</a></li>
                                </ul>
                                <div class="others-option">
                                    <a href="<?php echo get_home_url();?>/contact-us" class="default-btn">Get Started</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- End Navbar Area -->

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
