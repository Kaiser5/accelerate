<?php
/**
 * The template for displaying the about page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */


<?php
/**
 * The template for displaying the about page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */


get_header(); ?>

	<div id="primary" class="about-page hero-content">
		<div class="main-content" role="main">
		  <?php while ( have_posts() ) : the_post(); 
		  <?php the_content(); ?>
		  <?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	 </div><!-- #primary -->
			
	 <section class="service-custom">
		<aside class="service-custom-sidebar">
		   <h2><?php the_title(); ?></a></h2>
	    <h5><?php echo $services; ?></h5>
		
		<div class="services">
          <h2>Our Services</h2>
            <p>We take pride in our clients and the content we create for them.<b>Here's a brief overview of our offered services.</p>
        </div>
		 
	 	
		</aside>
		
	   <div class="service-custom-images">
		  <a href="<?php the_permalink(); ?>">
		  <?php if ($image_1) {
		  echo wp_get_attachment_image($image_1, $size); } ?>
		</div>
		
		<a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
	  </section>
			
	  <?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
 	</div><!-- #primary -->

<?php get_footer(); ?>