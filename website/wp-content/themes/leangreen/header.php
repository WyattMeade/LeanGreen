<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700|Amatic+SC:400,700" rel="stylesheet" type="text/css">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<nav class="main">
			<ul class="large_6 col leftNav">
				<li><a href="#">Home</a></li>
				<li><a href="#">Who We Serve</a></li>
				<li><a href="#">Testimonials</a></li>
			</ul>
			<div class="large_3 col logoHome"><img src="<?php bloginfo( 'template_url' ); ?>/images/img_global_logo.png"></div>
			<ul class="large_6 col rightNav">
				<li><a href="#">Vending Solutions</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</nav>
	</header>