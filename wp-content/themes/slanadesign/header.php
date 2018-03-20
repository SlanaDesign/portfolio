<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SlanaDesign
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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"></a>

	<header id="masthead" class="grid-container">
		<div class="grid-x">
		<div class="site-branding cell large-2">
		<div class="logo"><img src="<?php echo get_template_directory_uri();?>/images/slanadesign.png" alt="<?php bloginfo('name');?>"></div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="cell large-10 text-right">

			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
			</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
