<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title(' | ', true, 'right'); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo home_url(); ?>/bootstrap/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php echo home_url(); ?>/bootstrap/css/bootstrap-responsive.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script src="<?php echo home_url(); ?>/wp-content/themes/blankslate/NPE.js"></script>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header>
	<div id="branding" class="row">
		<div id="site-logo" class="span2"><a href="<?php echo home_url(); ?>"><img src="<?php echo home_url(); ?>/images/cornerlogo.gif"/></a></div>
        <div id="locations" class="span6">
            <div class="row-fluid">
                <div id="slo-loc-wrapper" class="span6">
                    <div id="slo-loc" class="location-button">
                        <h1 class="loc-heading">San Luis Obispo</h1>
                        <p>2935 S. Higuera<br/>(805) 541-6090</p>
                    </div>
                </div>
                <div id="sm-loc-wrapper" class="span6">
                    <div id="sm-loc" class="location-button">
                        <h1 class="loc-heading">Santa Maria</h1>
                        <p>2280 S. Meredith<br/>(805) 349-1300</p>
                    </div>
                </div>
            </div>
        </div>
		<div id="nav-tools" class="span4">
            
            <button id="translate-button" class="button translate-button">Espa&ntilde;ol</button>
            <div id="top-menu">
                <?php
                    $args = array( 'menu' => 'top-menu' );
                    wp_nav_menu($args); 
                ?>
            </div>
            <!--<div class="row-fluid">-->
                <div id="social-icons-wrapper">
                    <div id="facebook-icon" class="social-icon"><a href=""><img src="<?php echo home_url(); ?>/images/home_06.png" /></a></div>
                    <div id="yelp-icon" class="social-icon"><a href=""><img src="<?php echo home_url(); ?>/images/home_08.png" /></a></div>
                </div>
                <div id="search">
                    <?php get_search_form(); ?>
                </div>
            <!--</div>-->
		</div>
	</div>
	<nav>
		<?php wp_nav_menu( array( 'menu' => 'main-menu' ) ); ?>
	</nav>
</header>
<div id="responsive-buttons" class="row-fluid">
    <button id="resp-translate-button" class="button resp-top-btn">Espa&ntilde;ol</button>
    <button id="home-button" class="button resp-top-btn" onclick="location.href='/NPE'">Main Menu</button>
    <button id="call-button" class="button resp-top-btn">Call Now</button>
    <div id="openCallDialog" class="popup">
        <div>
            <a title="Close" class="close">X</a>
            <h2>Call Now!</h2>
            <p>We have two locations. Call us at our San Luis Obispo or Santa Maria locations!</p>
            <button id="call-sm" class="button phone-button" onclick='location.href="tel:8053491300"'>Call San Luis Obispo Location</button>
            <button id="call-slo" class="button phone-button" onclick='location.href="tel:8055416090"'>Call Santa Maria Location</button>
        </div>
    </div>
</div>
<div id="container" class="row-fluid">