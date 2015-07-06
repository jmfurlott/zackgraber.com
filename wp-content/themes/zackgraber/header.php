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

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
       m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
     })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64023411-1', 'auto');
  ga('send', 'pageview');
</script>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'zackgraber' ); ?></a>
  <div class="container">
    <span class="logo">
      <a href="/">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg">
      </a>
    </span>
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
