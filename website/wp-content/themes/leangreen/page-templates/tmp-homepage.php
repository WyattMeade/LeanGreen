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

		?>

		<section class="section <?php if($count == 0) { echo $altBG; } ?> clearfix">
			<div class="main">
				<div class="large_8 small_15 col <?php if($count == 0) { echo $pullRight; } ?> table">
					<div class="table-cell">
						<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
							the_post_thumbnail();
						} ?>
					</div>
				</div>
				<div class="large_7 small_15 col table">
					<div class="table-cell">
						<h1 class="colorGreen"><?php if($homepageTitle){ echo $homepageTitle; } ?></h1>
						<p><?php if($homepageExcerpt){ echo $homepageExcerpt; } ?></p>
						<button><span class="bgGreen"><?php if($homepageButtonText){ echo $homepageButtonText; } ?></span></button>
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

	<!--
	<section class="homeOne clearfix">
		<div class="main">
			<div class="large_8 small_15 col pull-right table">
				<div class="table-cell">
					<img src="<?php bloginfo( 'template_url' ); ?>/images/img_home_whoweserve.png">
				</div>
			</div>
			<div class="large_7 small_15 col table">
				<div class="table-cell">
					<h1 class="colorGreen">To Serve and Vend</h1>
					<p>Whether you're a school, office, health club, hospital, park district, YMCA, etc... our mission is to vend like no one has vended before! We have a broad range of customers, each unique in their vending needs. That's why we go to great lengths to listen to what you're looking for and then deliver the best fit of equipment and products to meet your needs.</p>
					<button><span class="bgGreen">Who We Serve</span></button>
				</div>
			</div>
		</div>
	</section>
	<section class="homeTwo clearfix">
		<div class="main">
			<div class="large_8 small_15 col table">
				<div class="table-cell">
					<img src="<?php bloginfo( 'template_url' ); ?>/images/img_home_testimonials.png">
				</div>
			</div>
			<div class="large_7 small_15 col table">
				<div class="table-cell">
					<h1 class="colorPurple">A Friendly Face Behind Every Machine</h1>
					<p>Is the vending status quo as good as it gets? Nope. At LeanGreen Vending, we listen and we deliver. Our Customer Service is unparalleled. We could go on and on about why our service is different but our customers say it so much better.</p>
					<button><span class="bgPurple">Testimonials</span></button>
				</div>
			</div>
		</div>
	</section>
	<section class="homeOne clearfix">
		<div class="main">
			<div class="large_8 small_15 col pull-right table">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/img_home_vendingsolutions.png">
			</div>
			<div class="large_7 small_15 col table">
				<div class="table-cell">
					<h1 class="colorGold">Something' For Everyone</h1>
					<p>Snack machines? Check. Cold drink machines? Ditto. Coffee? You bet. Micro-Markets? Piece of cake. Piece of Cake machine? Um... no. But we do offer ice cream vending! Whatever your location needs, we can provide modern, attractive equipment and a better (and broader) product selection.</p>
					<button><span class="bgGold">Vending Solutions</span></button>
				</div>
			</div>
		</div>
	</section>
	<section class="homeTwo clearfix">
		<div class="main">
			<div class="large_8 small_15 col table">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/img_home_aboutus.png">
			</div>
			<div class="large_7 small_15 col table">
				<div class="table-cell">
					<h1 class="colorLtGreen">Humble Snack Beginnings</h1>
					<p>We started with just one vending machine in 2011. In less than 3 years, we now cover all of Greater Chicago. Click here to read more about our humble start and how we got this far this fast - with class.</p>
					<button><span class="bgLtGreen">About Us</span></button>
				</div>
			</div>
		</div>
	</section>
	<section class="homeOne clearfix">
		<div class="main">
			<div class="large_8 small_15 col pull-right table">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/img_home_contactus.png">
			</div>
			<div class="large_7 small_15 col table">
				<div class="table-cell">
					<h1 class="colorOrange">Give Us A Shout</h1>
					<p>Getting set up with our vending service couldn't be easier. We start with a chat, follow that up with a visit, and it's gravy (low-fat gravy of course) after that. Whatever form of communication you prefer, we look forward to starting (or continuing) the conversation with you.</p>
					<button><span class="bgOrange">Contact Us</span></button>
				</div>
			</div>
		</div>
	</section>
	-->

<?php get_footer(); ?>