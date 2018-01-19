<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
        
        <!-- SLIDER -->
        <div id="outerslider">
        	<div id="slidercontainer">
            	<div id="bgslider"></div>
            	<section id="slider">
                    <ul id="slideshow">
                    	<li>
                        	<div class="slide-img"><img src="<?php echo get_template_directory_uri(); ?>/images/content/slide1.jpg" alt=""></div>
                            <div class="slide-text">
                            	<hgroup>
                                    <h1>Welcome to <span class="colortext">Artefak</span> Theme!</h1>
                                    <h4>Pellentesque at mauris fringilla nunc sollicitudin vehicula. </h4>
                                </hgroup>
                                <p>Fusce at sapien sit amet mauris auctor ultricies nec et dui. Donecviverra et tincidunt. Sed ut posuere enim. Suspendisse lacus.</p>
                                <a href="#" class="buttoncolor"><span class="buttontext">Read More</span><span class="buttonsep"></span></a>
                            </div>
                        </li>
                    	<li>
                        	<div class="slide-img"><img src="<?php echo get_template_directory_uri(); ?>/images/content/slide2.jpg" alt=""></div>
                            <div class="slide-text">
                            	<hgroup>
                                    <h1>We will Prove Our <span class="colortext">Efficiency.</span></h1>
                                    <h4>Morbi bibendum ullamcorper velit nec auctor. </h4>
                                </hgroup>
                                <p>Morbi hendrerit porttitor augue, in iaculis nunc vulputate sed. Donec egestas porttitor dolor, sit amet .</p>
                                <a href="#" class="buttoncolor"><span class="buttontext">Read More</span><span class="buttonsep"></span></a>
                            </div>
                        </li>
                    	<li>
                        	<div class="slide-img"><img src="<?php echo get_template_directory_uri(); ?>/images/content/slide3.jpg" alt=""></div>
                            <div class="slide-text">
                                <h1>The World can be Yours <br/>with <span class="colortext">Artefak!</span></h1>
                                <p>Morbi hendrerit porttitor augue, in iaculis nunc vulputate sed. Donec egestas porttitor dolor, sit amet .</p>
                                <a href="#" class="buttoncolor"><span class="buttontext">Read More</span><span class="buttonsep"></span></a>
                            </div>
                        </li>
                    </ul>
                   <div id="slidernav"></div>
                </section>
            </div>
        </div>
        <!-- END SLIDER -->
        <div class="copyrights">Collect from <a href="" >Website Template</a></div>
        <!-- BEFORE CONTENT -->
        <div id="outerbeforecontent">
        	<div id="beforecontent">
            	<section id="beforethecontent">
                	<article id="beforethecontent-colleft">
                    	<h2>About us</h2>
                        <p>Morbi bibendum ullamcorper velit nec auctor. <span class="colortext">Pellentesque ullamcorper</span> odio vel nunc tincidunt ac posuere sem tempor. Ut lacinia turpis at urna malesuada in dignissim metus venenatis.</p>
                        <p><span class="colortext">Morbi hendrerit porttitor augue</span>, in iaculis nunc vulputate sed. Donec egestas porttitor dolor, sit amet luctus diam molestie et. </p>
                    </article>
                	<article id="beforethecontent-colright">
                    	<div class="quote">
                        <p>magination is the beginning of creation. You imagine what you desire, you will what you imagine and at last you create what you will.</p>
                        <span class="qname colortext">~ George Bernard Shaw</span>
                        </div>
                    </article>
                    <div class="clear"></div>
                </section>
            </div>
        </div>
        <!-- END BEFORE CONTENT -->
        
        <!-- MAIN CONTENT -->
        <div id="outermain">
        	<section id="maincontent">
                <h2>Recent Works</h2>
                <div id="ts-display-portfolio" class="shortcode">
                    <ul id="ts-display-pf-col-4">
                        <li>
                            <div class="ts-display-pf-img">
                                <a class="image" href="<?php echo get_template_directory_uri(); ?>/images/content/pf/pf4_1.jpg" data-rel="prettyPhoto[mixed]" >
                                <span class="rollover"></span>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/content/pf/pf4_1.jpg" alt="" /></a>
                            </div>
                            <div class="ts-display-pf-text">
                                <h2 class="posttitle"><a href="#">Web Interface.</a></h2>
                                <p>Nam volutpat mauris ac posuere elementum et pretium.</p>
                            </div>
                            <div class="ts-display-clear"></div>
                        </li>
                        <li>
                            <div class="ts-display-pf-img">
                                <a class="image" href="<?php echo get_template_directory_uri(); ?>/images/content/pf/pf4_2.jpg" data-rel="prettyPhoto[mixed]" >
                                <span class="rollover"></span>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/content/pf/pf4_2.jpg" alt="" /></a>
                            </div>
                            <div class="ts-display-pf-text">
                                <h2 class="posttitle"><a href="#">Digital Printing.</a></h2>
                                <p>Nam volutpat mauris ac posuere elementum et pretium.</p>	
                            </div>
                            <div class="ts-display-clear"></div>
                        </li>
                        <li>
                            <div class="ts-display-pf-img">
                                <a class="image" href="<?php echo get_template_directory_uri(); ?>/images/content/pf/pf4_3.jpg" data-rel="prettyPhoto[mixed]" >
                                <span class="rollover"></span>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/content/pf/pf4_3.jpg" alt="" /></a>
                            </div>
                            <div class="ts-display-pf-text">
                                <h2 class="posttitle"><a href="#">Web Design.</a></h2>
                                <p>Nam volutpat mauris ac posuere elementum et pretium.</p>	
                            </div>
                            <div class="ts-display-clear"></div>
                        </li>
                        <li class="nomargin">
                            <div class="ts-display-pf-img">
                                <a class="image" href="<?php echo get_template_directory_uri(); ?>/images/content/pf/pf4_4.jpg" data-rel="prettyPhoto[mixed]" >
                                <span class="rollover"></span>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/content/pf/pf4_4.jpg" alt="" /></a>
                            </div>
                            <div class="ts-display-pf-text">
                                <h2 class="posttitle"><a href="#">Photography.</a></h2>
                                <p>Nam volutpat mauris ac posuere elementum et pretium.</p>
                            </div>
                            <div class="ts-display-clear"></div>
                        </li>
                    </ul>
                </div><!-- end ts-display-portfolio -->
                
                <div class="separator line"><div></div></div>
                
                <article id="welcome">
                    <h1>We’re <span class="colortext">Artefak</span> and we make a great wordpress theme</h1>
                    <p>Fusce at sapien sit amet mauris auctor ultricies nec et dui. Donec fermentum viverra tincidunt. Sed ut posuere enim. Suspendisse lacus urna, ultrices quis dapibus adipiscing, mattis sed velit. Nunc volutpat dapibus eros at vulputate. Praesent eleifend tincidunt pellentesque.</p>
                    <a href="#" class="buttoncolor"><span class="buttontext">Subscribe !</span><span class="buttonsep"></span></a> <span class="largetext middletext">Join Our Newsletter</span>
				</article>
                <div class="clear"></div>
            </section>
        </div>
        <!-- END MAIN CONTENT -->
        
        
        <?php get_footer();