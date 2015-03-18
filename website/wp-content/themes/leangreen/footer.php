<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	<footer class="clearfix">
		<div class="main">
			<div class="large_6 small_15 col footerInfo">
				<p>LeanGreen Vending services the greater Chicagoland area. Please call to enquire if we cover your area.</p>
			</div>
			<div class="large_5 small_15 col social">
				<p>Telephone: 888-947-8777</p>
				<p><a href="#">info@leangreenhv.com</a></p>
				<span>Follow us:&nbsp;</span>
				<div>
					<button><a href="http://facebook.com" target="_blank" alt="Facebook"><span><i class="icon-facebook-alt"></i></span></a></button>
					<button><a href="http://twitter.com" target="_blank" alt="Twitter"><span><i class="icon-twitter"></i></span></a></button>
					<button><a href="http://pinterest.com" target="_blank" alt="Pinterest"><span><i class="icon-pinterest"></i></span></a></button>
				</div>
			</div>
			<div class="large_4 small_15 col">
				<ul>
					<li><a href="/about/terms-conditions">Terms & Conditions</a></li>
					<li><a href="/sitemap">Sitemap</a></li>
				</ul>
				<p class="copyright">&copy; Copyright Leangreen Healthy Vending <?php the_date('Y'); ?></p>
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>

</body>
</html>
