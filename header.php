<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?><!doctype html>

<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js gt-ie9" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head id="<?php echo of_get_option('meta_headid'); ?>" data-template-set="html5-reset-wordpress-theme">

	<meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--320-->
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<!--[if IE ]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<![endif]-->

	<?php if (is_search()) echo '<meta name="robots" content="noindex, nofollow" />'; ?>

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">

	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<!--Google will often use this as its description of your page/site. Make it good.-->

	<?php if (true == of_get_option('meta_author')) echo '<meta name="author" content="'.of_get_option("meta_author").'" />'; ?>

	<?php if (true == of_get_option('meta_google')) echo '<meta name="google-site-verification" content="'.of_get_option("meta_google").'" />'; ?>

	<meta name="Copyright" content="Copyright &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. All Rights Reserved.">

	<?php if (true == of_get_option('meta_viewport')) {
	echo '<meta name="viewport" content="'.of_get_option("meta_viewport").'" />';
	echo '<!--  Mobile Viewport Fix
	j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag
	device-width : Occupy full width of the screen in its current orientation
	initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
	maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width
	-->';
	} ?>

	<?php if (true == of_get_option('head_favicon')) {
	echo '<link rel="shortcut icon" href="'.of_get_option("head_favicon").'" />';
	echo '<!-- This is the traditional favicon.
		 - size: 16x16 or 32x32
		 - transparency is OK
		 - see wikipedia for info on browser support: http://mky.be/favicon/ -->';
	} ?>

	<?php if (true == of_get_option('head_apple_touch_icon')) {
	echo '<link rel="apple-touch-icon" href="'.of_get_option("head_apple_touch_icon").'">';
	echo '<!-- The is the icon for iOS Web Clip.
		 - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4 retina display (IMHO, just go ahead and use the biggest one)
		 - To prevent iOS from applying its styles to the icon name it thusly: apple-touch-icon-precomposed.png
		 - Transparency is not recommended (iOS will put a black BG behind the icon) -->';
	} ?>

    <link href='http://fonts.googleapis.com/css?family=Lato:400,700|Montserrat' rel='stylesheet' type='text/css'>

	<!-- concatenate and minify for production -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />

	<!-- This is an un-minified, complete version of Modernizr.
		 Before you move to production, you should generate a custom build that only has the detects you need. -->
	<script src="<?php echo get_template_directory_uri(); ?>/_/js/modernizr-2.7.1.custom.js"></script>

	<!-- Application-specific meta tags -->
	<?php if (true == of_get_option('meta_app_win_name')) {
	echo '<!-- Windows 8 -->';
	echo '<meta name="application-name" content="'.of_get_option("meta_app_win_name").'" /> ';
	echo '<meta name="msapplication-TileColor" content="'.of_get_option("meta_app_win_color").'" /> ';
	echo '<meta name="msapplication-TileImage" content="'.of_get_option("meta_app_win_image").'" />';
	} ?>

	<?php if (true == of_get_option('meta_app_twt_card')) {
	echo '<!-- Twitter -->';
	echo '<meta name="twitter:card" content="'.of_get_option("meta_app_twt_card").'" />';
	echo '<meta name="twitter:site" content="'.of_get_option("meta_app_twt_site").'" />';
	echo '<meta name="twitter:title" content="'.of_get_option("meta_app_twt_title").'">';
	echo '<meta name="twitter:description" content="'.of_get_option("meta_app_twt_description").'" />';
	echo '<meta name="twitter:url" content="'.of_get_option("meta_app_twt_url").'" />';
	} ?>

	<?php if (true == of_get_option('meta_app_fb_title')) {
	echo '<!-- Facebook -->';
	echo '<meta property="og:title" content="'.of_get_option("meta_app_fb_title").'" />';
	echo '<meta property="og:description" content="'.of_get_option("meta_app_fb_description").'" />';
	echo '<meta property="og:url" content="'.of_get_option("meta_app_fb_url").'" />';
	echo '<meta property="og:image" content="'.of_get_option("meta_app_fb_image").'" />';
	} ?>

	<!-- Dublin Core Metadata : http://dublincore.org/
	Do we need this?
	-->
	<!--<meta name="DC.title" content="Project Name">
	<meta name="DC.subject" content="What you're about.">
	<meta name="DC.creator" content="Who made this site.">-->

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_enqueue_script('header_js', get_bloginfo('template_url').'/js/header.js', array('jquery')); ?>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <nav id="mobileNav">
        <?php wp_nav_menu( array('menu' => 'primary') ); ?>
    </nav>
    <div id="pageWrapper">
		<header id="header" role="header">
		    <div class="header-row row">
    			<div class="columns logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
    		    <div id="headerContent" class="columns">
    		        <?php dynamic_sidebar( 'Header Description' ); ?>
    		    </div>
                <nav id="fullNav" class="columns right" role="navigation">
        			<?php wp_nav_menu( array('menu' => 'primary') ); ?>
        		</nav>
                <nav id="mobileNavButton">
                    <i class="fa fa-bars"></i>
                </nav>
		    </div>
		</header>
		<div id="pageContent">