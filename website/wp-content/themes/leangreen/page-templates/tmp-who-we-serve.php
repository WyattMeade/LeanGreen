<?php
/**
 * Template Name: Who We Serve
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<section>
		<div class="large_7 col centered">
			<?php if ( have_posts() ) : 

				// Start the loop.
				while ( have_posts() ) : the_post();

					the_content();

				// End the loop.
				endwhile;

			endif; ?>
		</div>
	</section>

	<?php wp_reset_query(); ?>

	<?php

	$count = 0;
	$homeList_query = new WP_Query( 'post_type=serve&posts_per_page=-1&order=ASC&orderby=menu_order' ); ?>

	<section class="clients">

	<?php while ( $homeList_query->have_posts() ) : $homeList_query->the_post(); ?>

		<?php if($count != 1) { ?>

		<div class="row">

		<?php } ?>

			<div class="large_7 col">
				<div class="clientContainer corp">
					<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
							the_post_thumbnail();
					} ?>
					<p><a href="#"><span><?php the_title(); ?></span></a></p>
				</div>
			</div>

		<?php if($count != 1) { 

		$count++;

		} else {

		$count = 0;

		?>

		</div>

		<?php } ?>

	<?php endwhile; ?>

	</section>

	<?php wp_reset_query(); ?>

<?php get_footer(); ?>