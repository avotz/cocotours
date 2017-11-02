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
 *
 * @package cocotours
 */

get_header(); ?>

<section class="banner">
              <div class="banner-logo">
                  <img src="<?php echo get_template_directory_uri();  ?>/img/logo.png" class="animated bounceInDown">
                  <h3 class="animated bounceIn">El Coco Tours</h3>
                  <p class="animated bounceInUp">Experience Paradise</p>
              </div> 
                <div class="home-video">

                    <div class="home-video-content">
                        
                        <video preload="" autobuffer="" loop="loop" autoplay="autoplay">
                            <source src="<?php echo get_template_directory_uri();  ?>/img/intro.mp4" type="video/mp4">
                            <source src="<?php echo get_template_directory_uri();  ?>/img/intro.webm" type="video/webm">
                            <source src="<?php echo get_template_directory_uri();  ?>/img/intro.ogv" type="video/ogg">
                        </video>
                        
                    </div>
                </div>
           <!-- <div id="intro-scroll" class="animated fadeInUp">
                <div id="intro-scroll-arrows"></div>
            </div> -->
           
        </section>

        <section class="featured">
        <div class="border-intro-bottom"></div>
        <div class="inner">
            <h2 class="striped clipped" data-text="Tour Categories">Tour Categories</h2>

            <div class="featured-container flex-container-sb">
                <div class="featured-item">
                    <img src="<?php echo get_template_directory_uri();  ?>/img/tour-lorem.jpg">
                    <span class="featured-item-title">Land Tours</span>
                    <a href="<?php echo esc_url( home_url( '/tour-category/land-tours/' ) ); ?>" class="featured-item-link"></a>
                </div>
                 <div class="featured-item">
                    <img src="<?php echo get_template_directory_uri();  ?>/img/tour-water.jpg">
                    <span class="featured-item-title">Water Tours</span>
                    <a href="<?php echo esc_url( home_url( '/tour-category/water-tours/' ) ); ?>" class="featured-item-link"></a>
                </div>
                 <div class="featured-item">
                    <img src="<?php echo get_template_directory_uri();  ?>/img/tour-sport-fishing.jpg">
                    <span class="featured-item-title">Sport Fishing</span>
                    <a href="<?php echo esc_url( home_url( '/tour-category/sport-fishing/' ) ); ?>" class="featured-item-link"></a>
                </div>
            </div>
        </div>
    </section>
    <section class="tours">
        <div class="border-intro-bottom"></div>
        <div class="inner">
            <h2 class="striped clipped" data-text="Featured Tours">Featured Tours</h2>

            <div class="tours-container flex-container-sb">
                <?php
                    $args = array(
                        'post_type' => 'product',
                        //'order' => 'ASC',
                        'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
                        'posts_per_page' => 5,
                        
                        
                        
                        );
                    

                    $items = new WP_Query( $args );
                    // Pagination fix
                    $temp_query = $wp_query;
                    $wp_query   = NULL;
                    $wp_query   = $items;
                    $index = 0;
                    if( $items->have_posts() ) {
                    while( $items->have_posts() ) {
                        $items->the_post();
                       
                        ?>
                           

                            <div class="tours-item <?php echo ( $index == 0 ) ? 'size-2' :'' ?>" >
                                    <?php if ( has_post_thumbnail() ) :

                                            $id = get_post_thumbnail_id($post->ID);
                                            $thumb_url = wp_get_attachment_image_src($id,'tour-item', true);
                                            $large_url = wp_get_attachment_image_src($id,'large', true);
                                            ?>
                                        
                                        <?php if( $index == 0 && !wp_is_mobile() ) : ?>
                                                <img src="<?php echo $large_url[0] ?>"  alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                                        <?php else :  ?>
                                            <img src="<?php echo $thumb_url[0] ?>"  alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                                        <?php endif;  ?>
                                        
                                            
                                        <?php endif; ?>
                                        
                                <span class="tours-item-title"><?php the_title(); ?></span>
                                <span class="tours-item-button">view more</span>
                                <a href="<?php the_permalink(); ?>" class="tours-item-link"></a>
                            
                            </div>
                        
                        
                        
                        <?php
                    
                        $index++;
                    }
                    }
                    
                ?>
                <!-- <div class="tours-item size-2">
                    <img src="<?php echo get_template_directory_uri();  ?>/img/tour-1.jpg">
                    <span class="tours-item-title">Lorem ipsum dolor sit amet</span>
                    <span class="tours-item-button">view more</span>
                    <a href="#" class="tours-item-link"></a>
                </div>
                 <div class="tours-item">
                    <img src="<?php echo get_template_directory_uri();  ?>/img/tour-2.jpg">
                    <span class="tours-item-title">Lorem ipsum </span>
                    <span class="tours-item-button">view more</span>
                    <a href="#" class="tours-item-link"></a>
                </div>
                 <div class="tours-item">
                    <img src="<?php echo get_template_directory_uri();  ?>/img/tour-3.jpg">
                    <span class="tours-item-title">Lorem ipsum dolor sit amet</span>
                    <span class="tours-item-button">view more</span>
                    <a href="#" class="tours-item-link"></a>
                </div>
                <div class="tours-item">
                    <img src="<?php echo get_template_directory_uri();  ?>/img/tour-4.jpg">
                    <span class="tours-item-title">Lorem ipsum dolor sit amet</span>
                    <span class="tours-item-button">view more</span>
                    <a href="#" class="tours-item-link"></a>
                </div>
                <div class="tours-item">
                    <img src="<?php echo get_template_directory_uri();  ?>/img/tour-5.jpg">
                    <span class="tours-item-title">Lorem ipsum dolor sit amet</span>
                    <span class="tours-item-button">view more</span>
                    <a href="#" class="tours-item-link"></a>
                </div> -->
            </div>
        </div>
    </section>

<?php

get_footer();
