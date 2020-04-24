<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0"></script>

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<header class="site-header active-header" role="banner">
		<div class="container">
			<!-- <div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
				<div class="title-bar-left">
					<button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
					<span class="site-mobile-title title-bar-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>

					</span>
				</div>
			</div> -->

			<nav class="site-navigation top-bar" role="navigation" id="<?php foundationpress_mobile_menu_id(); ?>">
				<div class="top-bar-left">
					<div class="site-desktop-title top-bar-title d-inline-block">
						<?php the_custom_logo(); ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">					
							<h1 class="logo-heading" style="">
								<svg class="svg-logo" viewbox="0 0 600 80" xmlns="http://www.w3.org/2000/svg">
									<lineargradient id="Gradient1">
										<stop class="stop1" offset="0%"></stop> 
										<stop class="stop3" offset="100%"></stop> 
									</lineargradient> 
									<filter id="glow" x="-30%" y="-30%" width="160%" height="160%">
										<feGaussianBlur stdDeviation="10 10" result="glow"/>
										<feMerge>
											<feMergeNode in="glow"/>
											<feMergeNode in="glow"/>
											<feMergeNode in="glow"/>
										</feMerge>
									</filter>
									<text fill="url(#Gradient1)" style="filter: url(#glow);" x="20" y="70" class="logo-text"><?php bloginfo( 'name' ); ?></text>
									<text fill="url(#Gradient1)" x="20" y="70" class="logo-text"><?php bloginfo( 'name' ); ?></text>
								</svg>
							</h1>
						</a>
					</div>
				</div>
				<div class="top-bar-right">
					<nav class="navbar">
					<button class="navbar-toggler first-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
    aria-controls="navbarSupportedContent20" aria-expanded="false" aria-label="Toggle navigation">
    <div class="animated-icon1"><span></span><span></span><span></span></div>
  </button>
  <script>

  </script>
						<div class="collapse navbar" id="navbarSupportedContent1">
							<?php foundationpress_top_bar_r(); ?>
						</div>
					</nav>

					<!-- <?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
						<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
					<?php endif; ?> -->
				</div>
			</nav>
		</div>
	</header>
<div class="header-placeholder"></div>