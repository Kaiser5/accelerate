<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer clearfix" role="contentinfo">
			<div class="site-info">
				<div class="site-description">
					<p><?php bloginfo('description'); ?></p>
					<p>&copy; <?php bloginfo('title'); ?>, LLC
				</div>

				<div class="social-media" role="navigation">
					
						
				  <a href="https://twitter.com/Skillcrush"><i class="fa fa-twitter circle"></i>
				    <span class="screen-reader-text">Twitter</span></a>
				  <a href="https://facebook.com/Skillcrush"><i class="fa fa-facebook circle"></i>
				    <span class="screen-reader-text">facebook</span>
				  <a href="https://www.linkedin.com/company/skillcrush"><i class="fa fa-linkedin circle"></i>  
				    <span class="screen-reader-text">linkedin</span>
				</div>
				
				
			</div><!-- .site-info -->
		</footer><!-- #colophon -->

	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
