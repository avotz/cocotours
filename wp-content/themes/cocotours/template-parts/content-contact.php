<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cocotours
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title striped clipped" data-text="<?php the_title(); ?>"> <?php the_title(); ?> </h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="contact-container flex-container-sb">
            <div class="contact-info">
                    <?php
                    the_content();

                    
                ?>
            </div>
            <div class="contact-media">
           <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15689.946565482262!2d-85.6927745!3d10.5410397!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f9e2979038210ff%3A0xb32f30e5075a5c0b!2zMTDCsDMyJzMyLjIiTiA4NcKwNDEnMzAuNSJX!5e0!3m2!1sen!2scr!4v1509646156687" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        
	</div><!-- .entry-content -->

	
</article><!-- #post-<?php the_ID(); ?> -->
