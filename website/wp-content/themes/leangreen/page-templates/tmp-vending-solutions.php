<?php
/**
 * Template Name: Vending Solutions
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<section class="clearfix">
		<div class="large_7 col centered">
			<h1><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>
		</div>
	</section>
	<section class="clearfix">

	<?php 
		$query_vs = new WP_Query('post_type=vendingsolutions&posts_per_page=-1');
		$num_of_posts = $wp_query->post_count;
		$current_count = 0;
	?>

	<?php if ( have_posts() ) : ?> 

		<?php while ($query_vs->have_posts()) : $query_vs->the_post(); ?>

			<?php if($count == 0) { ?>

				<div class="row">

			<?php } ?>

			<?php
				$count++;
				$current_count++;
			?>

			<div class="large_5 col">

				<?php the_title(); ?>
				<?php the_content(); ?>

			</div>

			<?php if($count == 3 || $current_count == $num_of_posts) { ?>

				<?php $count = 0; ?>
			
				</div>

			<?php } ?>

		<?php endwhile; ?>

	<?php endif; ?>
	<?php wp_reset_query(); ?>

		<div class="row">
			<div class="large_12 col centered">
			<img src="<?php bloginfo( 'template_url' ); ?>/images/img_dreammachine.png">
			</div>
		</div>
	</section>

<?php get_footer(); ?>