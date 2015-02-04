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
			<h1>Who We Serve</h1>
			<p>Our customers include schools, businesses and everything in between. Whatever your vending needs, chances are LeanGreen has you covered. Learn more about what we offer on our <a href="#">Vending Solutions</a> page.</p>
		</div>
	</section>
	<section class="clients">
		<div class="row">
			<div class="large_7 col">
				<div class="clientContainer corp">
					<img src="<?php bloginfo( 'template_url' ); ?>/images/img_whoseserve_corporate.png">
					<p><button><span>Corporate Clients</span></button></p>
				</div>
			</div>
			<div class="large_7 col pull-right">
				<div class="clientContainer school">
					<img src="<?php bloginfo( 'template_url' ); ?>/images/img_whoweserve_schools.png">
					<p><button><span>Schools / Colleges</span></button></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="large_7 col">
				<div class="clientContainer club">
					<img src="<?php bloginfo( 'template_url' ); ?>/images/img_whoweserve_healthclubs.png">
					<p><button><span>YMCA / Health Clubs</span></button></p>
				</div>
			</div>
			<div class="large_7 col pull-right">
				<div class="clientContainer park">
					<img src="<?php bloginfo( 'template_url' ); ?>/images/img_whoweserve_parkdistricts.png">
					<p><button><span>Park Districts</span></button></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="large_7 col">
				<div class="clientContainer hospital">
					<img src="<?php bloginfo( 'template_url' ); ?>/images/img_whoweserve_hospitals.png">
					<p><button><span>YMCA / Health Clubs</span></button></p>
				</div>
			</div>
			<div class="large_7 col pull-right">
				<div class="clientContainer loc">
					<img src="<?php bloginfo( 'template_url' ); ?>/images/img_whoweserve_yourlocation.png">
					<p><button><span>Park Districts</span></button></p>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>