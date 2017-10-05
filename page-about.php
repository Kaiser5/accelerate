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
		 <?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>
				
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	   </div><!-- #primary -->
		
	 
		<section class="our-services">
		  <div class="site-content">
            <h2>Our Services</h2>
		    <p>We take pride in our clients and the content we create for them.<br>
		     Here's a brief overview of our offered services.</p>
          </div>
	 
		<div class="about-services">
	      <?php query_posts('posts_per_page=4&post_type=service_customs'); ?>
	
	<!-- start the loop -->
		<?php while ( have_posts() ) : the_post();
			$services = get_field('services');
		    $image_1 = get_field('image_1');
		    $image_2 = get_field('image_2');
            $image_3 = get_field('image_3');
			$image_4 = get_field('image_4');
		    $size = "medium";
		?>
		 
		<article class="service-custom-images">
		 <figure>
		   <?php echo wp_get_attachment_image($image_1, $size); ?>
		 </figure>
		
		   <?php endwhile; //end of the loop. ?>
		    <?php wp_reset_query(); // resets the altered query back to the original ?>
		  </div>
		  </article>
		  
		<div class="service-button">
		  <h3><a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a></h3>
		 </div>
	</section>
	 	 
	  
		

<?php get_footer(); ?>