<?php
/**
 * The template for displaying the homepage
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

		<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<a class="button" href="<?php echo site_url('/case-studies/') ?>">View Our Work</a>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	   </div><!-- #primary -->
	
	   <section class="featured-work">
	     <div class="site-content" clearfix>
	       <h4>Featured Work</h4>
	
	    <ul class="homepage-featured-work">
	      <?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
	
	<!-- start the loop -->
		<?php while ( have_posts() ) : the_post();
		    $image_1 = get_field('image_1');
		    $image_2 = get_field('image_2');
            $image_3 = get_field('image_3');
		    $size = "medium";
		?>
		
		<li class="individual-featured-work">
		
		 <figure>
		   <?php echo wp_get_attachment_image($image_1, $size); ?>
		 </figure>
		
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		  </li>
		   <?php endwhile; //end of the loop. ?>
		    <?php wp_reset_query(); // resets the altered query back to the original ?>
		  </ul>
        </div>
	</section>
	
	<!-- Recent Blog Post -->
	<section class="recent-posts">
      <div class="site-content">
	    <div class="blog-post">
	   	   <h4>From the Blog</h4>
		    <?php query_posts('posts_per_page=1'); ?>
		      <?php while ( have_posts() ) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_excerpt(); ?>
			  <?php endwhile; // end of the loop. ?>
            <?php wp_reset_query(); // resets the altered query back to the original ?>
		  </div>
	   <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</div>
			</div>

<?php endif; ?>
		
    </section>

<?php get_footer(); ?>