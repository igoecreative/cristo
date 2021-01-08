<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cristo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="tiny house building, tiny homes, little homes, small homes, custom built tiny homes">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<?php wp_head(); ?> 
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
 

	<header>
		<div class="nav-wrap">
			<img src="<?php echo site_url();?>/img/cristo_logo.png"/>
	 		<nav>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav>
		</div>
			<?php if( has_post_thumbnail() ) : ?>
			<?php  $featured_image = get_the_post_thumbnail(); ?>
				<div class="featured-img-wrap">
					<?php echo $featured_image;?>	
				</div>
			<?php endif; ?>
	</header> 
	<main>