<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(subpage); ?> 
 
  <section class="boxarea mainmenu">
    <div class="container">
		<div class="row">
          <div class="box-con">
                <h2 class="home "><a href="<?php bloginfo( 'url' ); ?>">HOME</a></h2>
          </div>
          <div class="box-con">
                    <div class="icon-con"><a href="<?php bloginfo( 'url' ); ?>#fromID"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-nor-1.png" width="88" height="88" class="nor"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-hov-1.png" width="88" height="88" class="hov"></a></div>
                    <h2 class="single-line"><a href="<?php bloginfo( 'url' ); ?>#fromID">Sell Points</a></h2>
              </div>
          <div class="box-con">
                    <div class="icon-con"><a href="<?php bloginfo( 'url' ); ?>#fromID"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-nor-2.png" width="88" height="88" class="nor"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-hov-2.png" width="88" height="88" class="hov"></a></div>
                    <h2 class="single-line"><a href="<?php bloginfo( 'url' ); ?>#fromID">Buy Points </a></h2>
              </div>
          <div class="box-con">
                    <div class="icon-con"><a href="<?php bloginfo( 'url' ); ?>#WithPoints"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-nor-3.png" width="88" height="88" class="nor"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-hov-3.png" width="88" height="88" class="hov"></a></div>
                    <h2><a href="<?php bloginfo( 'url' ); ?>#WithPoints">The Deal With Points</a></h2>
              </div>
          <div class="box-con">
                    <div class="icon-con"><a href="<?php bloginfo( 'url' ); ?>#WhyUs"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-nor-4.png" width="88" height="88" class="nor"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-hov-4.png" width="88" height="88" class="hov"></a></div>
                    <h2 class="single-line"><a href="<?php bloginfo( 'url' ); ?>#WhyUs">Why Us?</a></h2>
              </div>
          <div class="box-con">
                    <div class="icon-con"><a href="<?php echo get_option_tree( 'blog' ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-nor-5.png" width="88" height="88" class="nor"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-hov-5.png" width="88" height="88" class="hov"></a></div>
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
                 <?php if (have_posts()) : while (have_posts()) : the_post();?>
               	    <div class="cat-con">
                    	<div class="titlecon">
                        	<div class="date-con">
                           	  <h3><?php the_date("j F"); ?></h3> 
                                                            
                            </div>
                            <h1><a href="<?php the_permalink() ?>"> <?php the_title( ); ?></a></h1>
                            
                            <div class="morelink">
                            	<a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/map.png" width="30"><span>Travel</span></a>
                            </div>
                        </div>
                        <div class="post-text">
                        	 <?php the_post_thumbnail( );  ?>
                        	<?php the_excerpt(); ?>
                          <a href="<?php the_permalink() ?>" class="readmore">Read More</a>
                    </div>
                  </div>
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
     
  <?php get_footer(); ?>  