<?php
/**
 * Template Name: Testimonials
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
		<!--<div class="row">
			<div class="large_5 col">
				<p><img src="<?php bloginfo( 'template_url' ); ?>/images/img_quotes.png">Brian Lucas has made healthy vending products a hit at our schools because he is customer-friendly and customer-focused. He asks our students what they want and then he delivers.</p>
				<h6>Jim Szczepaniak, Community Relations Director, Niles Township High School District 219</h6>
			</div>
			<div class="large_5 col">
				<p><img src="<?php bloginfo( 'template_url' ); ?>/images/img_quotes.png">Leangreen Healthy Vending has the most impeccable customer service than any of my other vendors. From the open line of communication, honesty, integrity, and quick turnaround time, it is always a pleasure working with the Leangreen team. I've been able to develop a strong relationship with Leangreen's owner: Brian, who is one the most upstanding individuals I have ever encountered. He's always offering an analysis of consumption to make sure we are getting the best machines and products to serve my company very well. Brian and the Leangreen team makes you feel like family and not a customer; for that, I'll always support them!</p>
				<h6>Randall W. Walker, Office Manager, MSDSONLINE</h6>
			</div>
			<div class="large_5 col">
				<p><img src="<?php bloginfo( 'template_url' ); ?>/images/img_quotes.png">I can't seem to keep the machine full! Our employees really enjoy the healthy choices provided by LeanGreen!</p>
				<h6>Shea Prater, Ogilvy & Mather</h6>
			</div>
		</div>-->

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

				<div class="large_5 col inline-block">

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
		<div class="row">
			<div class="large_3 col">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/img_client_d219.png">
			</div>
			<div class="large_3 col">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/img_client_bswift.png">
			</div>
			<div class="large_3 col">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/img_client_elgin.png">
			</div>
			<div class="large_3 col">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/img_client_heartlandalliance.png">
			</div>
			<div class="large_3 col">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/img_client_ymca.png">
			</div>
		</div>
		<div class="row">
			<div class="large_3 col">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/img_client_tysonfoods.png">
			</div>
			<div class="large_3 col">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/img_client_rushcopley.png">
			</div>
			<div class="large_3 col">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/img_client_Romeoville.png">
			</div>
		</div>
	</section>

<?php get_footer(); ?>