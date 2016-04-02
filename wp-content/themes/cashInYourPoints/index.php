<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
    <section class="infographics-con">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 info-lt">
                  <div class="infolt-l">
                        <div class="amexPoints">
                            <h4>80,000</h4>
                            <span>Amex Points</span>
                        </div>
                        <p>Bob is a very busy businessman. He racked up 80,000 Amex Points in a month.<br>
                        His company pays for business travel and he isn’t planning to take a personal vacation any time soon (because he is so busy).</p>
                    </div>
                  <div class="infort-r">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/info-2.png" width="239" height="194"> 
                        <p>Mary is taking a personal trip next<br>week to Hong Kong. She has 2 options:</p>
                        
                        <ul>
                            <li>
                                <h4>$1,900</h4>
                                <span>Pay Full Price</span>
                            </li>
                            
                            <li>
                                <h4>80,000 <span class="smiall-text">miles</span></h4>
                                <span>Pay With Points</span>
                            </li>
                        </ul>
                    </div>
              </div>
              
              <div class="col-lg-6 col-sm-6 col-md-6 info-rt">
                    <h3 class="title-without">Without <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo-1.png" width="176" height="35"></h3>
                   <div class="withoutcon">
                        <div class="withoutlt">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/without-lt.png" width="66" height="67">
                          <p>Bob cashes in his <br>points with Amex for</p>
                            <span>$800</span>
                        </div>
                        
                        <div class="withoutrt">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/without-rt.png" width="66" height="67">
                            <p>Mary buys her flight for</p>
                            <span>$1,900</span>
                        </div>
                    </div>
                    
                    <h3 class="title-right">With <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo-1.png" width="176" height="35"></h3>
                    
                    <div class="withcon">
                        <div class="withlt">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/with-lt.png" width="66" height="67">
                          <p>Bob gets paid </p>
                          <span>$1,200</span>
                            <p>for selling his points <br>(makes <span class="colorgreen">$400</span> more)</p>
                             
                        </div>
                        
                        <div class="withrt">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/with-rt.png" width="66" height="67">
                            <p>Mary pays</p>
                            <span>$1,500</span>
                            <p>(saving <span class="colorgreen">$400</span>)</p>
                        </div>
                    </div>
                    
                    <h5> CIYP takes $300 for brokering the deal and doing our research to get Mary the best flight.</h5>
              </div>
            </div>
        </div>
    </section>
     <section class="boxarea mainmenu home-nav">
    <div class="container">
		<div class="row">
         
          <div class="box-con">
                    <div class="icon-con"><a href="#fromID"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-nor-1.png" width="88" height="88" class="nor"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-hov-1.png" width="88" height="88" class="hov"></a></div>
                    <h2 class="single-line"><a href="#fromID">Sell Points</a></h2>
              </div>
          <div class="box-con">
                    <div class="icon-con"><a href="#fromID"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-nor-2.png" width="88" height="88" class="nor"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-hov-2.png" width="88" height="88" class="hov"></a></div>
                    <h2 class="single-line"><a href="#fromID">Buy Points </a></h2>
              </div>
          <div class="box-con">
                    <div class="icon-con"><a href="#WithPoints"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-nor-3.png" width="88" height="88" class="nor"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-hov-3.png" width="88" height="88" class="hov"></a></div>
                    <h2><a href="#WithPoints">The Deal With Points</a></h2>
              </div>
          <div class="box-con">
                    <div class="icon-con"><a href="#WhyUs"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-nor-4.png" width="88" height="88" class="nor"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-hov-4.png" width="88" height="88" class="hov"></a></div>
                    <h2 class="single-line"><a href="#WhyUs">Why Us?</a></h2>
              </div>
          <div class="box-con">
                    <div class="icon-con"><a href="<?php echo get_option_tree( 'blog' ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-nor-5.png" width="88" height="88" class="nor"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/box-hov-5.png" width="88" height="88" class="hov"></a></div>
                    <h2 class="single-line"><a href="<?php echo get_option_tree( 'blog' ); ?>">  Blog</a></h2>
              </div>
        </div>
     </div>
    </section>
    <section class="from-area" id="fromID">
        <div class="container">
            <div class="row">
            	<div class="col-lg-6 col-sm-6 col-md-6">
                	<div class="formcon">
                    	<h3>Cash In Your Points</h3>
                        
                        <div class="content-con" id="content_container">

                        <form id="cashinform" name="cashinform" action="save_cash_form_to_mailchimp.php" method="post" onsubmit="return validateForm()" >
                        	<input required="required" name="first_name" type="text" placeholder="First Name">
                        	<input required="required" name="last_name" type="text" placeholder="Last Name">
                        	<input required="required" name="email" type="email" placeholder="Email">
                        	<input required="required" name="phone" type="text" placeholder="Phone">
                        	 <div class="points-con">
                             	<label>How Many Points Are You Selling?</label><input name="how_many_point_selling" required="required" type="text" >
                             </div>
                             <div class="checkboxarea">
                             	<span>Which Credit Card Program :</span>
                                
                                <div class="check-area">
                                	<label> <input  name="which_program" type="radio" value="American Express"> American Express</label>
                                    <label><input name="which_program" type="radio" value="Chase">  Chase</label>
                                    <label><input name="which_program" type="radio" value="Hilton Honors">  Hilton Honors</label>
                                    <label><input name="which_program" type="radio" value="United Airlines"> United Airlines</label>
                                    <label><input name="which_program" type="radio" value="Delta Airlines">  Delta Airlines</label>
                                    <div class="othercon">
                                    <label><input name="which_program" type="radio" value="Other"> </label><input name="other_which_program" id="other_which_program" type="text" placeholder="Other" class="other" >
                                    </div>
                                </div>
                                
                                
                               
                             </div>
                             <div id="hidden_loading" class="message_loading" style="display:none;">Saving...</div>
                             <div id="submit_container"><input name="Submit" type="submit" value="Submit" class="submit"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-md-6">
                	<div class="formcon buyPoints">
                    	<h3>Buy Points / Flights</h3>
                        
                         <div class="content-con" id="content_container2">

                        <form id="flightform" name="flightform" action="save_flight_form_to_mailchimp.php" method="post" onsubmit="return validateFormFlight()" >
                      
                          <input required="required" name="first_name" type="text" placeholder="First Name">
                          <input required="required" name="last_name" type="text" placeholder="Last Name">
                          <input required="required" name="email" type="email" placeholder="Email">
                          <input required="required" name="phone" type="text" placeholder="Phone">
                      
                          	 <div class="points-con">
                             	<label>What's Your Favorite Airline:</label>
                                <select name="favorite_airline">
                                	<option value="United Airlines">United Airlines</option>
                                    <option value="USA">USA</option>
                                    <option value="Delta Airlines">Delta Airlines</option>
                                    <option value="American Airlines">American Airlines</option>
                                    <option value="Air Canada">Air Canada</option>
                                    <option value="Emirates">Emirates</option>
                                    <option value="US Air">US Air</option>
                                    <option value="Other">Other</option>
                                </select>
                             </div>
                             <div class="checkboxarea">
                             	<span>How Often Do You Fly?</span>
                                
                                <div class="check-area">
                                	<label> <input checked="checked" name="how_often_fly" type="radio" value="Weekly"> Weekly</label>
                                    <label><input name="how_often_fly" type="radio" value="Monthly">  Monthly</label>
                                    <label><input name="how_often_fly" type="radio" value="Every 3-4 months">  Every 3-4 months</label>
                                    <label><input name="how_often_fly" type="radio" value="On Holidays"> On Holidays</label>
                                    <label><input name="how_often_fly" type="radio" value="Once in a while">  Once in a while</label>
                                     
                                </div>
                                
                                
                              
                             </div>
                             <div id="hidden_loading_2"  class="message_loading"   style="display:none;">Saving...</div>
                             <div id="submit_container_2"><input name="Submit" type="submit" value="Submit" class="submit"></div>
                             </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="newsletterArea">
    	<div class="container">
        	<div class="row">
            	<div class="col-lg-12">
           	    	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Newsletter-big.png" class="alignleft" width="300">
                    
                    <div class="newsletterAreaLt">
                    <h2>Our Weekly Educational Newsletter</h2> 
                    <p>Interested in learning more? Not ready to cash in your points just yet? You can join our educational newsletter!</p>
                    <p>Every week we write a new article that explains more about how to use your points wisely (and other cool financial tips).</p>
                    <div class="newslettercon">
                      <form id="newsletterform" name="newsletterform" action="save_newsletter_mailchimp.php" method="post" onsubmit="return validateNewsletter()" >
                      	<input id="newsletter_email" required="required" name="email" type="email" placeholder="your e-mail here ">
                        <span id="submit_container_3"><input name="submit" type="submit" value="Subscribe" id="newsletter_subscribe" class="subscribe"></span>
                        <span id="hidden_loading_3" class="message_loading"   style="display:none;">Saving...</span> 
                      </form>
                    </div>
                    </div>
                </div>
          </div>
        </div>
    </section>
    
    <section class="orangearea " id="WithPoints">
    	<div class="container">
        	<div class="row">
            	<div class="col-lg-12 dealWithPoints">
                <h3>So What's the Deal With Points?</h3>
                </div>
             </div>
          </div>
       </section>
       
    <section class="dealWithPointsArea">
    	<div class="container">
        	<div class="row">
            	<div class="col-lg-12">
           	    	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/DealWithPoints1.png" width="500"  class="alignleft maigin-img"> 
                    
                    <p>Every year, 655 billion miles and points are earned by business travelers. But more than 75% of the points are never redeemed. It s a hassle to use miles, and too many sites explain how to get the most out of your points. Even worse, the people who accumulate points generally arent the ones using the points.</p>
                    <p>Our goal is to make it easy. We want everyone to make the most use out of their points.</p>
                    <p>Since points programs fluatuate so frequently, we do that hard work of keeping on top of deals & best programs to use. We da all the research and comparisons and customize deals for the best possible  prices for both our Sellers of Points and buyers of Flights.</p>
                    
                    <p>Traditionally redeeming your points with Cgase/Amex for cash will give you 1 cent for 1 points. So 80,000 points = $800. Of course, your points are worth a lot more than that.</p>
                    <p>To find out more about how you can earn money for your miles or points, please fill out the form and one of our mileage experts will contact you.</p>
                </div>
             </div>
          </div>
       </section>
       
    <section class="orangearea" id="WhyUs">
    	<div class="container">
        	<div class="row">
            	<div class="col-lg-12 whyUs">
                <h3>Why Us?</h3>
                </div>
             </div>
          </div>
       </section>
       
    <section class="whyUsArea">
    	<div class="container">
        	<div class="row">
            	<div class="col-lg-12">
           	    	 
                    
                    <p>We have a lot of competitors. You can Google "sell my points" and find them fairly easily. So we'll just save you the search,
and list some of the big ones here:</p>
					<ul>
                    	<li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/FlyerMiles.png">
                        <a href="http://flyer-miles.com/">Flyer-Miles.com</a></li>
                        <li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/flipmy.png">
                        	<a href="http://flipmymiles.com/">FlipMyMiles.com</a>
                        </li>
                        <li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Themileageclub.png">
                        	<a href="https://www.themileageclub.com/">TheMileageClub.com</a>
                        </li>
                    </ul>

					<p>We're not going to tell you that we're better than them. In fact we used a few ourselves, and they're pretty great. But, we encourage you do your own research. Call each one and ask the rates. Come back with their rates. If it makes business sense for us to match/beat, we will. If not we will strive to do better.</p>

                </div>
             </div>
          </div>
       </section>
       
    <section class="bluearea">
    	<div class="container">
        	<div class="row">
            	<div class="col-lg-12 ourcompany">
                <h3>Our company is built on 3 values</h3>
                </div>
             </div>
          </div>
       </section>
       
    <section class="ourcompanyarea">
    	<div class="container">
        	<div class="row">
            	<div class="col-lg-12 ourcompanycontetn">
                	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Education.png"   class="alignleft">
                	<h2><a href="#">Education:</a></h2>
                    <p>We believe on educated customer is the best customer. We take the time to personally explain to each customer get the most out of your hard earned points.</p>
              </div>
                <div class="col-lg-12 ourcompanycontetn">
                	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/P.C.png" class="alignleft">
                	<h2><a href="#">Transparency:</a></h2>
                    <p>We don't believe in "industry secrets". What we do is basically the same as every other miles program out there. We find sellers. We transfer points to airline programs. We compare the flight.</p>
              </div>
                <div class="col-lg-12 ourcompanycontetn">
                	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Reseach.png"  class="alignleft">
                	<h2><a href="#">Research:</a></h2>
                    <p>The only real advantage a business can have in this market is doing more/better research and being extremely organized. Point values fluctuate across programs on a daily basis. There are dozens of programs. We keep on top of each one.</p>
              </div>
             </div>
          </div>
       </section>

<?php get_footer(); ?>

 