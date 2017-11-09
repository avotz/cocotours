<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cocotours
 */

?>

<footer class="footer">
<div class="footer-top">
	<div class="inner">
		 <div class="footer-top-container flex-container-sb">

			
			<div class="footer-email">
				
				<a href="tel:(506) 2670-1878"><i class="fa fa-phone"></i> Tel: (506) 2670-1878</a>
				<a href="tel:(506) 8719-4024"><i class="fa fa-phone"></i> Cel: (506) 8719-4024</a>
				<a href="mailto:info@elcocotours.com"><i class="fa fa-envelope"></i> info@elcocotours.com</a>
				
			</div>
			 <div class="footer-social flex-container-sb">
				<div><h3>Follow US</h3></div>
				<div class="footer-social-container">
					<a href="https://www.facebook.com/elcocotours/" class="header-social-link" target="_blank"><i class="fa fa-facebook"></i></a>
					<a href="https://www.tripadvisor.com/Attraction_Review-g309246-d12269739-Reviews-El_Coco_Tours-Playa_Hermosa_Province_of_Guanacaste.html" class="header-social-link" target="_blank"><i class="fa fa-tripadvisor"></i></a>
					<a href="https://www.instagram.com/elcocotours/" class="header-social-link" target="_blank"><i class="fa fa-instagram"></i></a>
				</div>
				
			</div>
			
			
		</div>
	
	</div>
	
</div>
<div class="footer-bottom">
	<div class="inner">
	<div class="footer-bottom-container flex-container-sb">

			
			<div class="footer-info footer-bottom-item">
				<h5>Our Tours</h5>
			   <ul>
				   <li><a href="<?php echo esc_url( home_url( '/tour-category/land-tours/' ) ); ?>">Tour land</a></li>
					<li><a href="<?php echo esc_url( home_url( '/tour-category/water-tours/' ) ); ?>">Tour water</a></li>
					 <li><a href="<?php echo esc_url( home_url( '/tour-category/sport-fishing/' ) ); ?>">Sport Fishing</a></li>
			   </ul>
				
			</div>
			<div class="footer-blog footer-bottom-item">
			   <h5>News</h5>
			   
			   <ul>
			   	  <?php
                    $args = array(
                        'post_type' => 'post',
                        'order' => 'ASC',
                        //'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
                        'posts_per_page' => 3,
                        
                        
                        
                        );
                    

                    $items = new WP_Query( $args );
                    // Pagination fix
                    $temp_query = $wp_query;
                    $wp_query   = NULL;
                    $wp_query   = $items;
                   
                    if( $items->have_posts() ) {
                    while( $items->have_posts() ) {
                        $items->the_post();
                       
                        ?>
						 <li><em><?php echo get_the_date() ?></em><br>
							<div class="footer-blog-text"><?php the_excerpt(); ?></div>
							<p><a class="transition article-link icomoon" data-icon="j" aria-hidden="true" href="<?php the_permalink(); ?>">Read more</a></p>
						</li>
                           

                           
                        
                        <?php
                    
                        
                    }
                    }
                    
                ?>
				  

			   </ul>
			</div>
			<div class="footer-menu footer-bottom-item">
			   <h5>Menu</h5>
			   <?php wp_nav_menu( array(
				'theme_location' => 'footer',
				'menu_id' => 'footer-menu',
				'container'       => 'nav',
			   'container_class' => 'footer-menu',
			   'container_id'    => '',
			   'menu_class'      => 'footer-menu-ul',
				 ) 
			 ); 
			 ?>
			</div>
			<div class="footer-contact footer-bottom-item">
			   <h5>Contact</h5>
			   <ul>
				   <li> <a href="tel:(506) 2670-1878"><i class="fa fa-phone"></i> Tel: (506) 2670-1878</a>
				</li>
				<li> <a href="tel:(506) 8719-4024"><i class="fa fa-phone"></i> Cel: (506) 8719-4024</a>
				</li>
					<li><a href="mailto:info@avotz.com"><i class="fa fa-envelope"></i> info@cocotours.com</a></li>
					 
			   </ul>
			   <div class="segu">
			   
			   	<script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>
			   </div>
			</div>
			
			
		</div>
	</div>
	 
   
</div>
  <div class="footer-copyright">
				 <span class="copy">Copyright © 2017. All Rights Reserved.</span>   
				   
				 <span class="avotz"><a href="http://www.avotz.com" target="_blank"><i class="icon-avotz"></i></a></span>
				   
			 </div>


</footer>
<div id="tour-popup" class="request-popup white-popup mfp-hide mfp-with-anim">
		<?php echo do_shortcode('[contact-form-7 id="5" title="Contact form"]');
        ?>               
	    
	</div>
	
<?php wp_footer(); ?>
 
</body>
</html>
