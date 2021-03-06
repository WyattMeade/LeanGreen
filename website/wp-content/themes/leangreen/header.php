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
		<a href="#" id="menu-button" class="menu clearfix">Menu <i class="icon-menu"></i></a>
		<?php

		$defaults = array(
			'theme_location'  => '',
			'menu'            => '',
			'container'       => 'nav',
			'container_class' => 'main',
			'container_id'    => 'menu',
			'menu_class'      => 'menu large_15 col centered',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth'           => 0,
			'walker'          => ''
		);

		wp_nav_menu( $defaults );

		?>
		<div class="headerSocial">
			<button><a href="<?php the_field('social_fb', 'option'); ?>" target="_blank" alt="Facebook"><span><i class="icon-facebook-alt"></i></span></a></button>
			<button><a href="<?php the_field('social_twitter', 'option'); ?>" target="_blank" alt="Twitter"><span><i class="icon-twitter"></i></span></a></button>
			<button><a href="<?php the_field('social_pin', 'option'); ?>" target="_blank" alt="Pinterest"><span><i class="icon-pinterest"></i></span></a></button>
		</div>
	</header>