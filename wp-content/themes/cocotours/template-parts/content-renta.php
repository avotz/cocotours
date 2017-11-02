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
		<div class="rent-container flex-container-sb">
            <div class="rent-info">
                    <?php
                    the_content();

                    
                ?>
            </div>
            <div class="rent-media">
            
                <iframe id='FrameCliente' frameborder='no' scrolling='no' runat='server'

src='http://www.adobecar.cr/MiniFrame.aspx?id=ALCRR&lang=ENG&BackColor=FFFFFF'></iframe>
            </div>
        </div>
        
	</div><!-- .entry-content -->

	
</article><!-- #post-<?php the_ID(); ?> -->
