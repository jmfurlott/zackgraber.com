<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package zackgraber
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'zackgraber' ); ?></a>
  <div class="container">
	<header id="masthead" class="site-header" role="banner">
        <a href="#" class="hamburger">Menu</a>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
  </div>
	<div id="content" class="site-content">

    <script type="text/javascript">
      $(function() { 
        $(".hamburger").click(function(e) { 
          e.preventDefault();
          $(this).toggleClass("open");
          $("#site-navigation").toggleClass("open");    
        });        
      });
    </script>
