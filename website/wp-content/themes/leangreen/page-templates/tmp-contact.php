<?php
/**
 * Template Name: Contact
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<section class="clearfix">
			<div class="row">
				<div class="large_5 small_15 col">
					<img src="<?php bloginfo( 'template_url' ); ?>/images/img_contact_one.png">
					<h6><?php the_field('column_1_heading'); ?></h6>
					<p><?php the_field('column_1_text'); ?></p>
				</div>
				<div class="large_5 small_15 col">
					<img src="<?php bloginfo( 'template_url' ); ?>/images/img_contact_two.png">
					<h6><?php the_field('column_2_heading'); ?></h6>
					<p><?php the_field('column_2_text'); ?></p>
				</div>
				<div class="large_5 small_15 col">
					<img src="<?php bloginfo( 'template_url' ); ?>/images/img_contact_three.png">
					<h6><?php the_field('column_3_heading'); ?></h6>
					<p><?php the_field('column_3_text'); ?></p>
				</div>
			</div>
			<div class="row">
				<div class="large_10 small_15 col centered">
					<h5><?php the_field('info_text'); ?></h5>
				</div>
			</div>
		</section>
	    <section class="clearfix contactForm">
			<div class="row">
				<div class="large_7 small_15 col centered">
					<h1><?php the_field('page_title'); ?></h1>
					<?php the_content(); ?>
				</div>
			</div>
			<div class="row">
				<div class="large_15 small_15 col centered">
					<?php echo do_shortcode( '[gravityform id="1" title="false" description="false"]' ); ?>
				</div>
			</div>
			<div class="row">
				<div class="large_12 small_15 col centered">
					<h6><?php the_field('privacy_text'); ?></h6>
				</div>
			</div>
		</section>

	<?php endwhile; else: ?>

	    <p>Sorry, this page does not exist</p>

	<?php endif; ?>

<?php get_footer(); ?>