<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>
			
			<!-- Display the nav in the footer -->
			<?php wp_nav_menu( array( 'theme_location' => 'footer_menu') ); ?>
			
			<div class="site-info">
				
				<!-- Fetch the Title and tagline -->
				<p><?php bloginfo( 'name'); ?></p>
				<p><?php bloginfo('description'); ?></p>

				<p>Harpsundsvägen 139</p>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
