<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<section class="clearfix">
			<div class="large_7 small_15 col centered">
				<h1><?php the_field('page_title'); ?></h1>
			</div>
			<div class="large_8 small_15 col centered defaultPage">
				<?php the_content(); ?>
			</div>
		</section>

	<?php endwhile; else: ?>

		<p>Sorry, this page does not exist</p>

	<?php endif; ?>

<?php get_footer(); ?>