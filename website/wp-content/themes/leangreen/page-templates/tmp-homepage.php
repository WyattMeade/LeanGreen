<?php
/**
 * Template Name: Homepage
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<?php $pageID = $page_id; ?>

	<section class="homeMain clearfix">
		<div class="main">
			<div class="large_11 small_15 col centered">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/img_global_logo.png" class="mobileHome">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/img_home_header.png">

				<?php if ( have_posts() ) : 

					// Start the loop.
					while ( have_posts() ) : the_post();

						the_content();

					// End the loop.
					endwhile;

				endif; ?>
				
				<img src="<?php bloginfo( 'template_url' ); ?>/images/img_home_header_down.png">
			</div>
		</div>
	</section>

	<?php wp_reset_query(); ?>

	<?php

	$count = 0;
	$altBG = 'alt-bg';
	$pullRight = 'pull-right';
	$homeList_query = new WP_Query( 'post_type=page&posts_per_page=-1&post_parent=0&order=ASC&orderby=menu_order' ); ?>

	<?php while ( $homeList_query->have_posts() ) : $homeList_query->the_post(); ?>

	<?php

	if($post->ID != $pageID) {

		/* Get the Custom Fields of the Post */
		$custom_fields = get_post_custom();

		$homepageTitle = $custom_fields['homepage_title'][0];
		$homepageExcerpt = $custom_fields['homepage_excerpt'][0];
		$homepageButtonText = $custom_fields['homepage_button_text'][0];
		$homepageColorScheme = $custom_fields['homepage_color_scheme'][0];

		?>

		<section class="section theme-<?php if($homepageColorScheme){ echo $homepageColorScheme; } ?> <?php if($count == 0) { echo $altBG; } ?> clearfix">
			<div class="main">
				<div class="large_8 small_15 col <?php if($count == 0) { echo $pullRight; } ?> table">
					<div class="table-cell">
						<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
							the_post_thumbnail('full');
						} ?>
					</div>
				</div>
				<div class="large_7 small_15 col table">
					<div class="table-cell">
						<h1><?php if($homepageTitle){ echo $homepageTitle; } ?></h1>
						<p><?php if($homepageExcerpt){ echo $homepageExcerpt; } ?></p>
						<a class="btn" href="<?php the_permalink(); ?>"><span><?php if($homepageButtonText){ echo $homepageButtonText; } ?></span></a>
					</div>
				</div>
			</div>
		</section>

		<?php if($count > 0) {

			$count = 0;

		} else {

			$count++;

		} ?>

	<?php } ?>

	<?php endwhile; ?>

	<?php wp_reset_query(); ?>

<?php get_footer(); ?>