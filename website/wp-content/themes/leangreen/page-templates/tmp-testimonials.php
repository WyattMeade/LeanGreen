<?php
/**
 * Template Name: Testimonials
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
				<?php the_content(); ?>
			</div>
		</section>
		<section class="clearfix">

	<?php endwhile; else: ?>

	    <p>Sorry, this page does not exist</p>

	<?php endif; ?>


	<?php 
		$query_testimonials = new WP_Query('post_type=testimonialspost&posts_per_page=-1&order=ASC&orderby=date');
		$num_of_posts = $query_testimonials->post_count;
		$current_count = 1;
		$count = 0;
	?>

	<?php if ( have_posts() ) : ?> 

		<?php while ($query_testimonials->have_posts()) : $query_testimonials->the_post(); ?>

			<?php if($count == 0) { ?>

				<div class="row text-center">

			<?php } ?>

			<div class="large_5 small_15 col inline-block">

				<p><img src="<?php bloginfo( 'template_url' ); ?>/images/img_quotes.png"><?php the_content(); ?></p>
				<h6><?php the_title(); ?></h6>

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
	</section>
	<section class="clientContainer">
		<h1>Some of Our Clients</h1>
		<?php 
			$query_clients = new WP_Query('post_type=clients&posts_per_page=-1&order=ASC&orderby=date');
			$num_of_posts = $query_clients->post_count;
			$current_count = 1;
			$count = 0;
		?>

		<?php if ( have_posts() ) : ?> 

			<?php while ($query_clients->have_posts()) : $query_clients->the_post(); ?>

				<?php if($count == 0) { ?>

					<div class="row text-center">

				<?php } ?>

				<div class="large_3 small_15 col inline-block">

					<?php the_post_thumbnail(); ?> 					

				</div>
				
				<?php $count++; ?>
				<?php if($count == 5 || $current_count == $num_of_posts) { ?>
				
					</div>
					<?php $count = 0; ?>

				<?php } ?>
				<?php $current_count++; ?>

			<?php endwhile; ?>

		<?php endif; ?>
		<?php wp_reset_query(); ?>
	</section>

<?php get_footer(); ?>