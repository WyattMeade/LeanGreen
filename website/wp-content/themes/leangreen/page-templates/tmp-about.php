<?php
/**
 * Template Name: About
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<section class="clearfix">
			<div class="large_7 small_15 col centered">
				<h1><?php the_field('page_title'); ?></h1>
			</div>
		</section>
		<section class="clearfix history">
			<div class="large_5 small_15 col historyImageSm">
				<img src="<?php the_field('top_img_about'); ?>">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/about_gif_border_top.png">
				<h6><?php the_field('top_img_cap'); ?></h6>
				<img src="<?php bloginfo( 'template_url' ); ?>/images/about_gif_border_bot.png">
			</div>
			<div class="large_5 small_15 col">
				<p><?php the_field('left_column_about'); ?></p>
			</div>
			<div class="large_5 small_15 col historyImageLg">
				<img src="<?php the_field('top_img_about'); ?>">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/about_gif_border_top.png">
				<h6><?php the_field('top_img_cap'); ?></h6>
				<img src="<?php bloginfo( 'template_url' ); ?>/images/about_gif_border_bot.png">
			</div>
			<div class="large_5 small_15 col">
				<p><?php the_field('right_column_about'); ?></p>
			</div>
		</section>

	<?php endwhile; else: ?>

		<p>Sorry, this page does not exist</p>

	<?php endif; ?>

	<?php $the_query = new WP_Query( 'page_id=20' ); while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		<section class="clearfix aboutUs">
			<div class="large_5 small_15 col">
				<img src="<?php the_field('bot_img_about'); ?>">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/about_gif_border_top.png">
				<h6>Our Mission Is Simple:<br><span><?php the_field('bot_img_cap'); ?></span></h6>
				<img src="<?php bloginfo( 'template_url' ); ?>/images/about_gif_border_bot.png">
			</div>
			<div class="large_10 small_15 col">
				<h1><?php the_field('page_title'); ?></h1>
				<?php the_content(); ?>
				<p><a class="btn" href="/contact-us"><span class="bgLtGreen">Contact Us</span></a></p>
			</div>
		</section>

	<?php endwhile; ?>

	<?php wp_reset_query(); ?>

<?php get_footer(); ?>