<?php
/**
 * Template Name: Vending Solutions
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	    <section class="clearfix">
			<div class="large_7 medium_9 small_15 col centered">
				<h1><?php the_field('page_title'); ?></h1>
				<?php the_content(); ?>
			</div>
		</section>
		<section class="clearfix">

	<?php endwhile; else: ?>

	    <p>Sorry, this page does not exist</p>

	<?php endif; ?>

		<?php 
			$query_vs = new WP_Query('post_type=vendingsolutions&posts_per_page=-1&order=ASC&orderby=date');
			$num_of_posts = $query_vs->post_count;
			$current_count = 1;
			$count = 0;
		?>

		<?php if ( have_posts() ) : ?> 

			<?php while ($query_vs->have_posts()) : $query_vs->the_post(); ?>

				<?php if($count == 0) { ?>

					<div class="row text-center">

				<?php } ?>

				<div class="large_5 small_15 col inline-block">

					<h4><?php the_title(); ?></h4>
					<?php the_content(); ?>

				</div>
				
				<?php $count++; ?>
				<?php if($count == 3 || $current_count == $num_of_posts) { ?>
				
					</div>
					<?php $count = 0; ?>

				<?php } ?>
				<?php $current_count++; ?>

			<?php endwhile; ?>

		<?php endif; ?>
		<?php wp_reset_query(); ?>

		<div class="row">
			<div class="large_12 small_15 col centered">
			<img src="<?php bloginfo( 'template_url' ); ?>/images/img_dreammachine.png">
			</div>
		</div>
	</section>

<?php get_footer(); ?>