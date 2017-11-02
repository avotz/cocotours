<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * Template Name: Page Rent A Car 
 * @package cocotours
 */

get_header(); ?>
<section class="banner banner-page">
               
                    
                     <?php if ( has_post_thumbnail() ) :

					  	 	$id = get_post_thumbnail_id($post->ID);
					  	 	$thumb_url = wp_get_attachment_image_src($id,'tour-gallery', true);
					  	 	?>
					    	
							<div class="item" style="background-image: url('<?php echo $thumb_url[0] ?>');">
					  	  		
					  	  	</div>
							
						<?php else : ?>
					  	   <div class="item" style="background-image:url('<?php echo get_template_directory_uri();  ?>/img/banner3.jpg');">
					  	  		
					  	  </div>
					  	 
					  	<?php endif; ?>
                   
               

             

       </section>
	<section class="main txt-white txt-shadow">
		<div  class="inner">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'renta' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</div><!-- #main -->
	</section><!-- #primary -->

<?php
/*get_sidebar();*/
get_footer();
