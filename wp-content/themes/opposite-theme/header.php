<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package opposite
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
	


	<?php wp_head(); ?>
</head>

<body >

<div id="page" class="site">
	<section class="content">
		<header id="masthead" class="site-header">
			<div class="container">
				<div class="header-top">
					<div class="site-branding">
						<?php
						the_custom_logo();
						?>
					</div><!-- .site-branding -->

					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><div class="burger"></div></button>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
						<div class="mobile-search">
							<?php get_search_form(); ?>
						</div>
					</nav><!-- #site-navigation -->
					<div class="desk-search">
						<?php get_search_form(); ?>
					</div>
					
				</div>	
			</div>	
			
			
			
		</header><!-- #masthead -->
