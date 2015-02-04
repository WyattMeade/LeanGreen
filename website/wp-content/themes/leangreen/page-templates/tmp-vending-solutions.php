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

	<?php $query_vs = new WP_Query('post_type=vendingsolutions&posts_per_page=-1'); ?>

	<?php if ( have_posts() ) : ?> 

		<?php while ($query_vs->have_posts()) : $query_vs->the_post(); ?>

			<?php if($count == 0) { ?>

				<div class="row">

			<?php } ?>

			<?php $count++; ?>

			<div class="large_5 col">

				<?php the_title(); ?>

			</div>

			<?php if($count == 3) { ?>

				<?php $count = 0; ?>
			
				</div>

			<?php } ?>
		<?php endwhile; ?>

	<?php endif; ?>


		<div class="row">
			<div class="large_5 col">
				<h4>Healthy Snacks</h4>
				<p>We offer the largest selection of healthier snacks than pretty much anyone else in the business. From Clif Bars to Terra Chips to a mix of trail mix, our snack selection is unparalleled.</p>
			</div>
			<div class="large_5 col">
				<h4>Traditional Snacks</h4>
				<p>Healthier snacks gave us our reputation, but we understand the demand for, um... more indulgent options. That's why we can also hook you up with all the traditional chips, chocolates, and candy bars that have been enjoyed for years.</p>
			</div>
			<div class="large_5 col">
				<h4>Drinks Snacks</h4>
				<p>We're a one-stop shop for liquid-y thirst quenchers: Juices, Teas, Coke, Pepsi, energy drinks, fizzy drinks, sports drinks, all-natural drinks, and milk made from just about anything that can make milk. Oh, and let's not forget water.</p>
			</div>
		</div>
		<div class="row">
			<div class="large_5 col">
				<h4>Coffee</h4>
				<p>We provide great-tasting coffee two ways: 1) We can place a state-of-the-art coffee vending machine in your office or 2) We can provide you with commercial coffee brewers, filters, the works, so that you can brew fresh pots of coffee each day.</p>
			</div>
			<div class="large_5 col">
				<h4>Guaranteed Delivery</h4>
				<p>All of our machines come with a feature called "Guaranteed Delivery," which tells the machine to give you a refund on the spot if your item doesn't vend properly. Yeah, we thought you'd like that.</p>
			</div>
			<div class="large_5 col">
				<h4>Remote Monitoring</h4>
				<p>Our machines send us data so we always know when your vending machine is getting low on product and needs to be restocked. We're geeks about this data.</p>
			</div>
		</div>
		<div class="row">
			<div class="large_5 col centered">
				<h4>Cashless Payments</h4>
				<p>Don't have cash? No problem. Our machines take debit cards, Visa, Mastercard, AMEX, and Discover. You can even pay using Tap&amp;Go payments such as Apple Pay.</p>
			</div>
		</div>
		<div class="row">
			<div class="large_12 col centered">
			<img src="<?php bloginfo( 'template_url' ); ?>/images/img_dreammachine.png">
			</div>
		</div>
	</section>

<?php get_footer(); ?>