<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
 <footer>
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
    </footer>
<a href="#" class="scrollup" style="display: none;">Scroll</a>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
   <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/iptools-jquery-offcanvas.css" rel="stylesheet" type="text/css">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/iptools-jquery-offcanvas.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/vendor/jquery.min.js"><\/script>')</script>
 
 		 
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/iptools-jquery-offcanvas.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/custom.js"></script>
        <script>
        $(document).ready(function() {
            $('#my-navigation').iptOffCanvas({
              baseClass: 'offcanvas',
              type: 'left' // top, right, bottom, left.
            });
          });
		  
		  
         </script>
         
         <script type="text/javascript">
			$(document).ready(function(){ 
			
			$(window).scroll(function(){
				if ($(this).scrollTop() > 100) {
					$('.scrollup').fadeIn();
				} else {
					$('.scrollup').fadeOut();
				}
			}); 
			
			$('.scrollup').click(function(){
				$("html, body").animate({ scrollTop: 0 }, 600);
				return false;
			});
 
		});
		
		
		$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
		</script>
  

<?php wp_footer(); ?>
</body>
</html>
