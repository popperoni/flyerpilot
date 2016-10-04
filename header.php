<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<!--[if lt IE 10]>
<html id="id_html" class="no-js custom noie56789" lang="de">
<![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?> class="no-js custom">
<!--<![endif]-->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	
	<?php wp_head(); ?>

	<!--[if lt IE 10]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/noie56789.css" rel="stylesheet" type="text/css" media="all" />	
	<![endif]-->
</head>

<body <?php body_class(); ?>>
	
	<!--[if lt IE 10]>
		<div class="noie56789">
			Sorry, but you are using an old version of Internet Explorer. Please use a newer Version.<br>
			Verzeihung, Sie benutzen eine alte Version des Internet Explorers. Bitte benutzen Sie ein aktuellere Version.
		</div>
	<![endif]-->
	
	<div class="container">
		<header id="masthead" class="site-header" role="banner">
			
			<nav id="topNav" class=""></nav>

				<div class="site-branding">
					
					<a href="https://www.flyerpilot.de" class="logo">
						<img src="<?php echo get_template_directory_uri(); ?>/images/flyerpilot-logo.svg" alt="<?php echo bloginfo('name'); ?> - <?php echo bloginfo( 'description'); ?>" title="<?php echo bloginfo('name'); ?> - <?php echo bloginfo( 'description'); ?>" />
					</a>


					<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->

				<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
					<button id="menu-toggle" class="menu-toggle"><?php _e( 'Menu', 'twentysixteen' ); ?></button>

					<div id="site-header-menu" class="site-header-menu">
						<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<nav id="primaryNav" class="flyout flyout-liste" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'mainNav',
										'items_wrap' => my_nav_wrap()
									 ) );
								?>
							</nav><!-- .main-navigation -->
						<?php endif; ?>

						<?php if ( has_nav_menu( 'social' ) ) : ?>
							<nav id="social-navigation" class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'social',
										'menu_class'     => 'social-links-menu',
										'depth'          => 1,
									) );
								?>
							</nav><!-- .social-navigation -->
						<?php endif; ?>
					</div><!-- .site-header-menu -->
				<?php endif; ?>

					
		</header><!-- .site-header -->		
	</div>

	<div class="container">
		<div id="content" class="site-content">