<?php
/**
 * The template for service customs
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
		
	<?php while ( have_posts() ) : the_post(); 
		$services = get_field('services');
		$link = get_field('site_link');
		$image_1 = get_field('image_1');
		$image_2 = get_field('image_2');
		$image_3 = get_field('image_3');
		$image_4 = get_field('image_4');
	?>
	
		<article class="service-customs">
		<aside class="service-customs-sidebar">
		
		<h5><?php echo $services; ?></h5>
			
	    <div class="service-custom-images">
		  <?php echo wp_get_attachment_image($image_1, $size); ?>
	      <?php echo wp_get_attachment_image($image_2, $size); ?>
	      <?php echo wp_get_attachment_image($image_3, $size); ?>
		  <?php echo wp_get_attachment_image($image_4, $size); ?>
		</div>
	  </article>
	  
	  <?php the_content(); ?>
	</aside>
			
	  <?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
 	</div><!-- #primary -->

<?php get_footer(); ?>

