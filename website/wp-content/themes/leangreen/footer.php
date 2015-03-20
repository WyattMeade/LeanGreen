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
				<p><?php the_field('footer_info', 'option'); ?></p>
			</div>
			<div class="large_5 small_15 col social">
				<p>Telephone: <?php the_field('footer_tel', 'option'); ?></p>
				<p><a href="mailto:<?php the_field('footer_email', 'option'); ?>"><?php the_field('footer_email', 'option'); ?></a></p>
				<span>Follow us:&nbsp;</span>
				<div>
					<button><a href="<?php the_field('footer_fb', 'option'); ?>" target="_blank" alt="Facebook"><span><i class="icon-facebook-alt"></i></span></a></button>
					<button><a href="<?php the_field('footer_twitter', 'option'); ?>" target="_blank" alt="Twitter"><span><i class="icon-twitter"></i></span></a></button>
					<button><a href="<?php the_field('footer_pinterest', 'option'); ?>" target="_blank" alt="Pinterest"><span><i class="icon-pinterest"></i></span></a></button>
				</div>
			</div>
			<div class="large_4 small_15 col">
				<ul>
					<li><a href="/about/terms-conditions">Terms & Conditions</a></li>
					<li><a href="/about/sitemap">Sitemap</a></li>
				</ul>
				<p class="copyright">&copy; <?php the_field('footer_copy', 'option'); ?> <?php the_date('Y'); ?></p>
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>

</body>
</html>
