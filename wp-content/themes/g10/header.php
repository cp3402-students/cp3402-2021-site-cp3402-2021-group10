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

        <title>G10 App</title>

        <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/assets/img/favicon.png">
    </head>
    <body>

        <!-- Start Navbar Area -->
        <div class="navbar-area navbar-style-two">
            <div class="g10-responsive-nav">
                <div class="container">
                    <div class="g10-responsive-menu">
                        <div class="logo">
                            <a href="index.html"><img src="<?php bloginfo('template_directory'); ?>/assets/img/black-logo.png" alt="logo"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="g10-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="index.html"><img src="<?php bloginfo('template_directory'); ?>/assets/img/black-logo.png" alt="logo"></a>
                        <div class="collapse navbar-collapse mean-menu">
							<?php wp_nav_menu(array('theme_location'=>'menu-1', 'menu_class'=>'navbar-nav'))  ?>
                            <ul class="navbar-nav">
                                <li class="nav-item"><a href="index.html" class="nav-link active">Home</a>
                                </li>
                                <li class="nav-item"><a href="about-us.html" class="nav-link">About Us</a> 
                                </li>
                                <li class="nav-item megamenu"><a href="#" class="dropdown-toggle nav-link">Pages</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col">
                                                        <h6 class="submenu-title">Pages I</h6>
                                                        <ul class="megamenu-submenu">
                                                            <li><a href="how-it-works.html">How It Works</a></li>
                                                            <li><a href="pricing.html">Pricing Plan</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="submenu-title">Pages II</h6>
                                                        <ul class="megamenu-submenu">
                                                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="submenu-title">Pages III</h6>
                                                        <ul class="megamenu-submenu">
                                                            <li><a href="faq.html">FAQ</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col">
                                                        <a href="#" target="_blank" class="d-block p-0">
                                                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/navbar.jpg" alt="image">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <!-- ***SIMPLE DROPDOWN - IN CASE YOU NEED IT***
                                <li class="nav-item"><a href="#" class="dropdown-toggle nav-link">Shop</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="products.html" class="nav-link">Products List</a></li>
                                        <li class="nav-item"><a href="cart.html" class="nav-link">Cart</a></li>
                                    </ul>
                                </li> -->
                                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                            </ul>
                            <div class="others-option">
                                <a href="contact.html" class="default-btn">Get Started</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->
