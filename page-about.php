<?php
/**
 * The template for displaying the about page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */


	get_header(); ?>
	
	<div id="primary" class="page-about hero-content">
	  <div class="site-content" role="main">
	     <?php while ( have_posts() ) : the_post(); ?> 
		   <?php the_content(); ?>
		   <?php endwhile; //end of the loop. ?>
		</div><!-- .site-content -->
	</div><!-- .about-page -->
	
	<section class="about-services">
	  <div class="about-content">
	    <h2>Our Services</h2>
	  <p>We take pride in our clients and the content we create for them.<br>
		Here's a brief overview of our offered services.</p>
		
	
	 <article class="about-page-services">	
      <aside class="services">	
		   	
	<?php query_posts('posts_per_page=4&post_type=service_customs'); ?>
	 <?php while (have_posts() ) : the_post();
		$services = get_field('services');
		$image_1 = get_field('image_1');
		$size = "medium";
	?>
 	
	<div class="individual-services">	
	  	
	<figure>
	  <?php echo wp_get_attachment_image($image_1, $size); ?>
	</figure>
	
		  	 
	<div class="services-content">
	   <h2><?php the_title(); ?></h2><?php the_content(); ?>
	</div>
	 
	     			 
	<?php endwhile; //end of the loop. ?>
	  <?php wp_reset_query(); // resets the altered query back to the original ?>
		
		</div>
	   </aside>
	  </article>
	 </div>
	</section>


	

<?php get_footer(); ?>