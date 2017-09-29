<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cocotours
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header">
	<div class="header-top">
		<div class="inner">
			<div class="header-contact-info">
				<a href="tel:(506) 222-222-22"><i class="fa fa-phone"></i> Tel: (506) 222-222-22</a>
				<a href="mailto:info@cocotours.com"><i class="fa fa-envelope"></i> info@cocotours.com</a>
			</div>
		</div>
	</div>
	<div class="header-bottom">
		<div class="inner">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-logo"><img src="<?php echo get_template_directory_uri();  ?>/img/logo.png" alt="Coco Tours" /></a>
			<?php wp_nav_menu( array(
				'theme_location' => 'header',
				'menu_id' => 'header-menu',
				'container'       => 'nav',
			   'container_class' => 'header-menu',
			   'container_id'    => '',
			   'menu_class'      => 'header-menu-ul',
				 ) 
			 ); 
			 ?>
			<div class="header-social">
				<a href="#" class="header-social-link"><i class="fa fa-facebook"></i></a>
					<a href="#" class="header-social-link"><i class="fa fa-twitter"></i></a>
					<a href="#" class="header-social-link"><i class="fa fa-youtube"></i></a>
			</div>

			
			<button id="btn-menu" class="header-btn-menu"><i class="fa fa-bars"></i></button>
		</div>

	</div>
	
	
	

</header>
