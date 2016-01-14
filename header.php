<?php
/**
 * The header template
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Starter_Theme
 */
?>
 
<!DOCTYPE html>
 
<!--[if lt IE 9]>
<html id="ie" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
 
<head>
    <meta charset="<?php bloginfo( "charset" ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo( "pingback_url" ); ?>" />
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css">
    <link href='https://fonts.googleapis.com/css?family=Yantramanav' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Pontano+Sans' rel='stylesheet' type='text/css'>
    <link href="<?php bloginfo('template_url') ?>/lightbox.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <?php // Lets other plugins and files tie into our theme's <head>:
    wp_head(); ?>
</head>
 
<body <?php body_class(); ?>>
<div id="page">

        <?php if ( is_front_page() ) : ?>
          <header id="top" role="banner" class="site-header homeContainer flex">
        <!-- <a href="#main" class="visuallyhidden focusable" id="skiptomain"></a> -->
        
          <nav class="siteNavigation--Main mainMenu flex" role="navigation">
              <!-- <ul class="mainMenu flex"> -->
                  <?php wp_nav_menu( array( "theme_location" => "primary", "container" => '', 'items_wrap'=> '%3$s' ) ); ?>
              <!-- </ul>.menu -->
          </nav><!-- siteNavigation -->  
          
          </header> <!-- END OF CONTAINER -->
  
  
        <?php else : ?>
      <header id="top" role="banner" class="site-header">
        <!-- <a href="#main" class="visuallyhidden focusable" id="skiptomain"></a> -->
        
          <nav class="siteNavigation--Main" role="navigation">
              <ul class="siteMenu flex">
                  <?php wp_nav_menu( array( "theme_location" => "primary", "container" => '', 'items_wrap'=> '%3$s' ) ); ?>
              </ul><!-- .menu -->
          </nav><!-- siteNavigation -->  

        <?php endif; ?>

        
      </header><!--  .container -->

    <!-- <main id="main"> -->





<!-- JS BY LIGHTBOX -->
<!-- MAP BY GOOGLE MAPS API -->



