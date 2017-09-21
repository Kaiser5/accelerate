<?php
/**
 * The template for displaying all pages
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
			</div>
	</div><!-- #primary -->
	
	<section class="our-services">
	     <div class="site-content" clearfix>
	       <h4>Our Services</h4>
		   <p>We take pride in our clients and the content we create for them. Here's a brief overview of our offered serves.</p>
		   
	      <ul class="about-our-services">
		  <?php query_posts('posts_per_page=4&post_type=case_studies'); ?>
	        <?php while ( have_posts() ) : the_post();
			$image_1 = get_field('image_1');
		    $image_2 = get_field('image_2');
            $image_3 = get_field('image_3');
			$image_4 = get_field('image_4');
		    $size = "medium";  	?>
		
		<li class="individual-our-services">
		
			<figure>
		     <?php echo wp_get_attachment_image($image_1, $size); ?>
		    </figure>
			 
			<h2><?php_the_title(); ?></h2>
		</l>
			<?php endwhile: ?>
			<?php wp_reset_query(); // resets the altered query back to the original ?>
		   </div>
        </div>
	</section>

	
<?php get_footer(); ?>

<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
