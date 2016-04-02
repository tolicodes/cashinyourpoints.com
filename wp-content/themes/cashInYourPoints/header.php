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
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
      <!-- Bootstrap core CSS -->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.css" rel="stylesheet">
 

    <!-- Custom styles for this template -->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/layout.css" rel="stylesheet">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/responsive.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,700,600,500,300' rel='stylesheet' type='text/css'>
      
    
</head>

<body  >
    <div class="mobile-nav-btn">
  <button class="offcanvas__trigger--open btn" data-offcanvas-open="my-navigation"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/open.png" width="35" height="35"></button>
  
  </div>
  	<section id="my-navigation" class="offcanvas" >
      <div class="box-con">
            	<div class="icon-con"><a href="#fromID"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-nor-1.png" width="88" height="88" class="nor"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-hov-1.png" width="88" height="88" class="hov"></a></div>
                <h2><a href="#fromID">Sell Points</a></h2>
          </div>
      <div class="box-con">
            	<div class="icon-con"><a href="#fromID"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-nor-2.png" width="88" height="88" class="nor"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-hov-2.png" width="88" height="88" class="hov"></a></div>
                <h2><a href="#fromID">Buy Points </a></h2>
          </div>
      <div class="box-con">
            	<div class="icon-con"><a href="#WithPoints"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-nor-3.png" width="88" height="88" class="nor"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-hov-3.png" width="88" height="88" class="hov"></a></div>
                <h2><a href="#WithPoints">The Deal With Points</a></h2>
          </div>
      <div class="box-con">
            	<div class="icon-con"><a href="#WhyUs"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-nor-4.png" width="88" height="88" class="nor"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-hov-4.png" width="88" height="88" class="hov"></a></div>
                <h2><a href="#WhyUs">Why Us?</a></h2>
          </div>
      <div class="box-con">
            	<div class="icon-con"><a href="<?php echo get_option_tree( 'blog' ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-nor-5.png" width="88" height="88" class="nor"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-hov-5.png" width="88" height="88" class="hov"></a></div>
                <h2><a href="<?php echo get_option_tree( 'blog' ); ?>">  Blog</a></h2>
          </div>
          
      </ul>
      
      <button class="offcanvas__trigger--close btn" data-offcanvas-close="my-navigation"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/off.png" width="35" height="35"></button>
      </section>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4 col-md-4 logo">
                    <a href="<?php bloginfo( 'url' ); ?>"><img src="<?php echo get_option_tree( 'logo' ); ?>" alt="Logo"></a>
                </div>
                <div class="col-lg-8 col-sm-8 col-md-8 rightSide">
                  <h2><span>Call or Text Us:</span> <?php echo get_option_tree( 'call_or_text_us' ); ?></h2>
                    <h2><span>Shoot Us An Email:</span>  <?php echo get_option_tree( 'shoot_us_an_email' ); ?></h2>
                </div>
            </div>
       </div>
    </header>