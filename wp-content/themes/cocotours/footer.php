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
				   <li><a href="#">Tour land</a></li>
					<li><a href="#">Tour water</a></li>
					 <li><a href="#">Tour lorem</a></li>
			   </ul>
				
			</div>
			<div class="footer-blog footer-bottom-item">
			   <h5>News</h5>
			   <ul>
				   <li><em>14.07.2017</em><br>
					<div class="footer-blog-text">USA wollen mehr Daten von Reisenden - Deutschland ist von den Anforderungen aber offenbar kaum betroffen.</div>
					<p><a class="transition article-link icomoon" data-icon="j" aria-hidden="true" href="#">Link</a></p>
					</li>
					<li><em>14.07.2017</em><br>
					<div class="footer-blog-text">USA wollen mehr Daten von Reisenden - Deutschland ist von den Anforderungen aber offenbar kaum betroffen.</div>
					<p><a class="transition article-link icomoon" data-icon="j" aria-hidden="true" href="#">Link</a></p>
					</li>
					<li><em>14.07.2017</em><br>
					<div class="footer-blog-text">USA wollen mehr Daten von Reisenden - Deutschland ist von den Anforderungen aber offenbar kaum betroffen.</div>
					<p><a class="transition article-link icomoon" data-icon="j" aria-hidden="true" href="#">Link</a></p>
					</li>

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
				   <li> <a href="tel:(506) 222-222-22"><i class="fa fa-phone"></i> Tel: (506) 222-222-22</a>
				</li>
					<li><a href="mailto:info@avotz.com"><i class="fa fa-envelope"></i> info@cocotours.com</a></li>
					 <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					 tempor incididunt ut labore et dolore magna aliqua. </li>
			   </ul>
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
