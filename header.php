<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" href="./favicon.ico">
	<link rel="manifest" href="/manifest.json">
	<meta name="theme-color" content="#e50000">
	<link rel="icon" sizes="192x192" href="/img/touch/homescreen192.png">
	<link rel="apple-touch-icon" href="/img/touch/homescreen192.png">
	<meta name="msapplication-square310x310logo" content="/img/touch/homescreen192.png">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
$svg_sprite = file_get_contents( get_template_directory() . '/_dist/sprite/sprite.svg' );
if ( file_exists( $svg_sprite ) ) {
	echo $svg_sprite;
} ?>

<header class="header">
	<section class="row no-margin">
		<div id="logo" class="" itemscope itemtype="http://schema.org/Organization">
			<a href="<?php echo home_url(); ?>" rel="nofollow">
				<img src="" class="img-responsive" height="100" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>"/>
			</a>
		</div>
	    <!-- <h1 class="site-title">
	        <a href="<?php esc_attr( home_url( '/' ) ); ?>" rel="home">
	            <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
	        </a>
	    </h1>
	    <h2 class="site-description"><?php echo esc_html( get_bloginfo( 'description' ) ); ?></h2> -->
	</section>
	<nav>
	<?php
	  $args = [
	      'theme_location' => 'primary',
	      'container'      => '',
				'menu_class'		 => 'list-inline',
	  ];
	  wp_nav_menu( $args ); ?>
	</nav>
</header>
