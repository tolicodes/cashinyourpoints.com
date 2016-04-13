<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header( subpage ); ?>

<section class="boxarea mainmenu">
  <div class="container">
	   <div class="row">
        <div class="box-con">
              <h2 class="home "><a href="<?php bloginfo( 'url' ); ?>">HOME</a></h2>
        </div>
        <div class="box-con">
                  <div class="icon-con"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-nor-1.png" width="88" height="88" class="nor"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-hov-1.png" width="88" height="88" class="hov"></div>
                  <h2 class="single-line"><a href="<?php bloginfo( 'url' ); ?>#fromID">Sell Points</a></h2>
            </div>
        <div class="box-con">
                  <div class="icon-con"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-nor-2.png" width="88" height="88" class="nor"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-hov-2.png" width="88" height="88" class="hov"></div>
                  <h2 class="single-line"><a href="<?php bloginfo( 'url' ); ?>#fromID">Buy Points </a></h2>
            </div>
        <div class="box-con">
                  <div class="icon-con"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-nor-3.png" width="88" height="88" class="nor"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-hov-3.png" width="88" height="88" class="hov"></div>
                  <h2><a href="<?php bloginfo( 'url' ); ?>#WithPoints">The Deal With Points</a></h2>
            </div>
        <div class="box-con">
                  <div class="icon-con"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-nor-4.png" width="88" height="88" class="nor"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-hov-4.png" width="88" height="88" class="hov"></div>
                  <h2 class="single-line"><a href="<?php bloginfo( 'url' ); ?>#WhyUs">Why Us?</a></h2>
            </div>
        <div class="box-con">
                  <div class="icon-con"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-nor-5.png" width="88" height="88" class="nor"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-hov-5.png" width="88" height="88" class="hov"></div>
                  <h2 class="single-line"><a href="<?php echo get_option_tree( 'blog' ); ?>">  Blog</a></h2>
            </div>
      </div>
   </div>
</section>
<section class="banner-area">
  <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/blog-bg.png" width="100%">
</section>


<section class="blog-content-area">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-9 col-sm-9 col-md-9 leftSide">
             <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
              <h2> <?php the_title(); ?></h2>
                <?php the_content(); ?>
             <?php endwhile; endif; ?>
            </div>

            <div class="col-lg-3 col-sm-3 col-md-3 rightSide">
            	<div class="rightside">
                	<ul>
                    	<li><a href="<?php echo get_option_tree( 'personal_finance' ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/fight-icon-1.png" width="40"> Personal Finance</a></li>
                    	<li><a href="<?php echo get_option_tree( 'travel' ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/fight-icon-2.png" width="40"> Travel</a></li>
                    	<li><a href="<?php echo get_option_tree( 'credit_cards' ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/fight-icon-3.png" width="40"> Credit Cards</a></li>
                    	<li><a href="<?php echo get_option_tree( 'banks' ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/fight-icon-4.png" width="40"> Banks</a></li>
                    	<li><a href="<?php echo get_option_tree( 'financial_news' ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/fight-icon-5.png" width="40"> Financial News</a></li>
                    </ul>
                </div>

                <div class="right-side-add">
                	<a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/right-banner.png" width="200"></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="comments container">
  <?php echo do_shortcode( '[fbcomments width="100%"]' ); ?>
</section>

<?php get_footer(); ?>
