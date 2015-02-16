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
			<div class="large_7 col centered">
				<h1><?php the_field('page_title'); ?></h1>
			</div>
		</section>
		<section class="clearfix history">
			<div class="large_5 col">
				<p><?php the_field('left_column_about'); ?></p>
			</div>
			<div class="large_5 col">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/aboutus_animation.gif">
				<h6>Brian continues to scour the area, ridding environments of their once sad vending options and putting new life into people's daily snack choices.</h6>
			</div>
			<div class="large_5 col">
				<p><?php the_field('right_column_about'); ?></p>
			</div>
		</section>

	<?php endwhile; else: ?>

		<p>Sorry, this page does not exist</p>

	<?php endif; ?>

	<?php $the_query = new WP_Query( 'page_id=20' ); while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		<section class="clearfix aboutUs">
			<div class="large_5 col">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/img_missionsnacks.png">
				<h6>Our Mission Is Simple:<br><span>to make healthier snacks &amp; drinks much more available to people throughout Chicago.</span></p>
			</div>
			<div class="large_10 col">
				<h1><?php the_field('page_title'); ?></h1>
				<?php the_content(); ?>
				<p><button><a href="/contact-us"><span class="bgLtGreen">Contact Us</span></a></button></p>
			</div>
		</section>

	<?php endwhile; ?>

	<?php wp_reset_query(); ?>

<?php get_footer(); ?>