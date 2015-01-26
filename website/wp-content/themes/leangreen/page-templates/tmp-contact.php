<?php
/**
 * Template Name: Contact
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<section class="clearfix">
		<div class="row">
			<div class="large_5 col">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/img_Contact_One.png">
				<h6>Chat</h6>
				<p>You call or email and tell us what kind of vending you're looking for.</p>
			</div>
			<div class="large_5 col">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/img_Contact_Two.png">
				<h6>Meet</h6>
				<p>We come out to see your location and to describe how we can meet all of your needs.</p>
			</div>
			<div class="large_5 col">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/img_Contact_Three.png">
				<h6>Agree</h6>
				<p>We sign a standard agreement basically stating that we have to live up to our promises or you can boot us to the curb.</p>
			</div>
		</div>
		<div class="row">
			<div class="large_10 col centered">
				<h5>You will never be asked to rent or lease any of our equipment. We make our money on the reasonable markup on the products we sell in the machines.</h5>
			</div>
		</div>
	</section>
	<section class="clearfix contactForm">
		<div class="row">
			<div class="large_7 col centered">
				<h1>Contact Us</h1>
				<p>Please use your online form or give us a ring at 888-947-8777</p>
				<p>You can also email us at <a href="#">info@leangreenhv.com</a>.</p>
				<p><span>(Note: We currently service just the Greater Chicago area.)</span></p>
			</div>
		</div>
		<div class="row">
			<form class="clearfix">
				<div class="large_6 col">
					<p>Your Name*<br>
					<input type="text" name="name"></p>
					<p>Phone*<br>
					<input type="text" name="phone"></p>
					<p>Email*<br>
					<input type="text" name="email"></p>
					<p>Name of your Business/Institution<br>
					<input type="text" name="business"></p>
					<p>What city are you located in?<br>
					<input type="text" name="city"></p>
				</div>
				<div class="large_6 col">
					<p>Location Description (School, Office, Gym, etc.)<br>
					<input type="text" name="description"></p>
					<p>Number of People the Machines will Serve<br>
					<input type="text" name="people"></p>
					<p>How many machines do you currently have?<br>
					<input type="text" name="machines"></p>
					<p>When does your current vending contract expire?<br>
					<input type="text" name="contract"></p>
					<p>How did you find out about us?<br>
					<input type="text" name="discover"></p>
					<p><button name="submit"><span class="bgOrange">Send!</span></button></p>
				</div>
			</form>
		</div>
		<div class="row">
			<div class="large_12 col centered">
				<h6>PRIVACY: We hate spam as much as you do. That's why we will never rent, sell, or share any of your personal information with anyone. We may, however, send you an email every once in a while with special announcements. You will always be given the option to opt out at any time.</h6>
			</div>
		</div>
	</section>

<?php get_footer(); ?>