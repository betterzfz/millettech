<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package panoramic
 */

get_header(); ?>
        
        <!-- BEFORE CONTENT -->
        <div id="outerbeforecontent" class="inner">
        	<div id="beforecontent">
            	<section id="beforethecontent">
                	<h1 class="pagetitle">The Lastest <span class="colortext">Project</span> We’ve Done.</h1>
                    <div class="pagedesc">Fusce at sapien sit amet mauris auctor ultricies nec et dui. Donec fermentum viverra tincidunt. Sed ut posuere enim. Suspendisse lacus urna, ultrices quis dapibus adipiscing, mattis sed velit. Nunc volutpat dapibus eros at vulputate. Praesent eleifend tincidunt pellentesque.</div>
                </section>
            </div>
        </div>
        <!-- END BEFORE CONTENT -->
        
        <!-- MAIN CONTENT -->
        <div id="outermain">
        	<section id="maincontent">
            
                <div id="ts-display-portfolio">
                <ul id="ts-display-pf-col-2">
                <?php
                // The Loop
                while ( have_posts() ) : the_post(); ?>
                    <li <?php if (1 == $wp_query->current_post % 2) echo 'class="nomargin"'; ?>>
                        <div class="ts-display-pf-img">
                            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                            <a class="image" width="218" height="174" href="<?php echo $image[0]; ?>" data-rel="prettyPhoto[mixed]" >
                            <span class="rollover"></span>
                            <img width="218" height="174" src="<?php echo $image[0]; ?>" alt="" /></a>
                        </div>
                        <div class="ts-display-pf-text">
                            <h2 class="posttitle"><?php the_title(); ?></h2>
                            <p><?php the_content(); ?></p>
                        </div>
                        <div class="ts-display-clear"></div>
                    </li>
                <?php endwhile; ?>
                </ul>
                <div class="clear"></div>
                </div><!-- end ts-display-portfolio -->
                
                <div class="wp-pagenavi">
                    <span class="pages">Page 1 of 2</span><span class="current">1</span><a href="#" class="page">2</a><a href="#" class="nextpostslink">»</a>
                </div>
                
                <div class="clear"></div>
            </section>
        </div>
        <!-- END MAIN CONTENT -->
        
        
        <!-- FOOTER SIDEBAR -->
        <div id="outerfootersidebar">
        	<div id="footersidebarcontainer">
            	<footer id="footersidebar">
                
            	<div id="footcol1" class="footcol">
				<ul>
					<li class="widget-container">
                        <h2 class="widget-title">Text Widget</h2>
                        <div class="textwidget">
                        	<p>Pellentesque ac quam mauris, ut imperdiet augue. Pellentesque viverra, lorem eget lacinia luctus.</p>
                            <span>Lacus magna malesuada dui, nec volutpat felis libero id ante. Fusce id suscipit arcu. </span>
                        </div>
                    </li>
                </ul>
                </div>
            	<div id="footcol2"  class="footcol">
                	<ul>
                    	<li class="widget-container">
                        	<h2 class="widget-title">Categories</h2>
                            <ul>
                                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                                <li><a href="#">Pellentesque tempus</a></li>
                                <li><a href="#">Cras nec lacus sit amet leo</a></li>
                                <li><a href="#">Donec facilisis lacinia pulvinar</a></li>
                                <li><a href="#">Lacus magna malesuada volutpat</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            	<div id="footcol3"  class="footcol">
                	<ul>
                    	<li class="widget-container">
                        	<h2 class="widget-title">Latest Post</h2>
                            <ul>
                                <li><a href="#">Aenean nonummy hendrerit</a></li>
                                <li><a href="#">Cum sociis natoque penatibus</a></li>
                                <li><a href="#">Magnis dis parturient montes</a></li>
                                <li><a href="#">Praesent vestibulum molestie</a></li>
                                <li><a href="#">Fusce id suscipit arcu imperdiet</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            	<div id="footcol4" class="footcol">
				<ul>
					<li class="widget-container">
                        <h2 class="widget-title">Get In Touch</h2>
                        <p>Calvarey 121 Street # 45<br/>
                        Telp: +800 123 456<br/>
                        <a href="http://www.cssmoban.com/" class="colortext">www.cssmoban.com</a><br/>
                        </p>
                        <div id="sn">
                        	<ul>
                         		<li><a><span class="icon-img" style="background:url(images/social/facebook.png)"></span></a></li>
                                <li><a><span class="icon-img" style="background:url(images/social/twitter.png)"></span></a></li>
                                <li><a><span class="icon-img" style="background:url(images/social/linkedin.png)"></span></a></li>
                                <li><a><span class="icon-img" style="background:url(images/social/youtube.png)"></span></a></li>
                                <li><a><span class="icon-img" style="background:url(images/social/flickr.png)"></span></a></li>
                            </ul>
                        </div> 
                    </li>
                </ul>
                </div>
                <div class="clear"></div>
                
                </footer>
            </div>
        </div>
        <!-- END FOOTER SIDEBAR -->
        
        <!-- FOOTER -->
        <div id="outerfooter">
        	<div id="footercontainer">
            	<footer id="footer">Copyright &copy; 2013. All Rights Reserved . More Templates <a href="http://www.cssmoban.com/">模板之家</a></footer>
            </div>
        </div>
        <!-- END FOOTER -->
        
        
    </div>
</div>


</body>
</html>
