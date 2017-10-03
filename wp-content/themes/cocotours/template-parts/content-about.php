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
		<div class="about-container flex-container-sb">
            <div class="about-info">
                    <?php
                    the_content();

                    
                ?>
            </div>
            <div class="about-media">
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Felcocotours%2F&tabs&width=340&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=363306470411928" width="340" height="214" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
            </div>
        </div>
        
	</div><!-- .entry-content -->

	
</article><!-- #post-<?php the_ID(); ?> -->
