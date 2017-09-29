<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


$categories = get_terms( array(
	'taxonomy' => 'product_cat',
	'hide_empty' => false,
	'slug' => get_query_var('product_cat')
	
) );

$categorySelected = $categories[0];




get_header('shop'); ?>
<section class="main">
	<em class="border-colors"></em>
	 <div class="inner">
		<header class="entry-header-shop">
		<?php if($categorySelected){ ?>
			<h1 class="entry-title striped clipped" data-text="<?php echo $categorySelected->name; ?>"><?php echo $categorySelected->name; ?></h1>
		<?php }else { ?>
				<h1 class="entry-title striped clipped" data-text="All our tours" >All our tours</h1>
			<?php	} ?>
		</header><!-- .entry-header -->
		
		<div class="tours tours-container flex-container-sb">
		
	
		<?php
			
			 $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

			if($categorySelected){
				$args = array(
				  'post_type' => 'product',
				  //'order' => 'ASC',
				  'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
				  'posts_per_page' => 12,
				   'paged' => $paged,
				   'tax_query' => array(
						
						array(
							'taxonomy' => 'product_cat',
							'field'    => 'slug',
							'terms'    => $categorySelected->slug,
						),
						
					)
 
				);
			  
			
			}else{
				$args = array(
				  'post_type' => 'product',
				  //'order' => 'ASC',
				  'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
				  'posts_per_page' => 12,
				   'paged' => $paged
				   
				  
				);
			}

			$items = new WP_Query( $args );
			 // Pagination fix
			  $temp_query = $wp_query;
			  $wp_query   = NULL;
			  $wp_query   = $items;
			  
			if( $items->have_posts() ) {
			  while( $items->have_posts() ) {
				 $items->the_post();
			   
				?>


					 <article class="tours-item" >
					 		<?php if ( has_post_thumbnail() ) :

									  $id = get_post_thumbnail_id($post->ID);
									  $thumb_url = wp_get_attachment_image_src($id,'tour-item', true);
									  ?>
									  
								   
									
								  <?php endif; ?>
								  <img src="<?php echo $thumb_url[0] ?>"  alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
						<span class="tours-item-title"><?php the_title(); ?></span>
						<div class="tours-item-price">
							<span>From 
							   <?php 
							  
								$currency = get_woocommerce_currency_symbol();

							   $product = new WC_Product( $post->ID ); 
							 /*echo $product->get_price_html();
							  
							 woocommerce_template_loop_price(); */
							  echo $currency;
							  
							  if(get_post_meta( get_the_ID(), '_wc_display_cost', true ))
								echo get_post_meta( get_the_ID(), '_wc_display_cost', true );
							  else 
								echo get_post_meta( get_the_ID(), '_wc_booking_cost', true )
							  // echo word_count(get_the_excerpt(), '24'); ?>
							  </span>
							</div>
						<span class="tours-item-button">view more</span>
						<a href="<?php the_permalink(); ?>" class="tours-item-link"></a>
					
					</article>
				
				 
				  
				<?php
			   
				 
			  }
			}
			
		  ?>
		  </div>
		  <?php  the_posts_pagination( array( 'mid_size' => 2 ) ); 
				wp_reset_postdata(); ?>
	</div>
</section>
<?php get_footer( 'shop' ); ?>
