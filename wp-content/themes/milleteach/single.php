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
                	<h1 class="pagetitle">This is Our <span class="colortext">Hot News.</span> Enjoy It!</h1>
                    <div class="pagedesc">Fusce at sapien sit amet mauris auctor ultricies nec et dui. Donec fermentum viverra tincidunt. Sed ut posuere enim. Suspendisse lacus urna, ultrices quis dapibus adipiscing, mattis sed velit. Nunc volutpat dapibus eros at vulputate. Praesent eleifend tincidunt pellentesque.</div>
                </section>
            </div>
        </div>
        <!-- END BEFORE CONTENT -->
        
        <!-- MAIN CONTENT -->
        <div id="outermain">
        	<section id="maincontent">
               	<section id="content" class="positionleft">
                    <section id="singlepost">
                        <article class="post">
                                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                    <h2 class="posttitle"><?php the_title(); ?></h2>
                                    <div class="entry-content">
                                        <?php the_content(); ?>
                                    </div>
                                    <div class="entry-utility">
                                        <span class="postauthor"><?php the_author(); ?></span>
                                        <span class="posttime"><?php echo get_the_date(); ?></span>
                                    </div>
                                <?php endwhile; ?>
                                <?php endif; ?>
                        </article>
                    </section>

				</section>
                <aside id="sidebar" class="positionright">
                <ul>
                    <li id="widget-search" class="widget-container">
                        <form action="#" method="post" id="searchform">
                        	<div><input type="text" id="s" value="Type search and hit enter..." onFocus="if (this.value == 'Type search and hit enter...')this.value = '';" onBlur="if (this.value == '')this.value = 'Type search and hit enter...';" /></div>
                        </form>
                    </li>
                    <li class="widget-container">
                        <h2 class="widget-title">Text Widget</h2>
                        <div class="textwidget">
                            Aenean sollicitudin ullamcorper tincidunt. Pellentesque ac quam mauris, ut imperdiet augue. Pellentesque viverra.
                        </div>
                    </li>
                    <li class="widget-container">
                        <h2 class="widget-title">Blog Categories</h2>
                        <ul>
                        	<li><a href="#">Photograhy Design</a></li>
                            <li><a href="#">Wordpress Templates</a></li>
                            <li><a href="#">Great Support</a></li>
                        </ul>
                    </li>
                    <li class="widget-container">
                        <h2 class="widget-title">Latest News</h2>
                        <ul class="latestpost">
                        	<li>
                            	<img src="images/content/thumb1.jpg" alt="" class="alignleft" />
                                <span class="lptitle"><a href="#">Sample News 1</a></span>
                                <span>Praesent dignissim pellente lorem ipsum platea dictumst...</span>
                            </li>
                        	<li>
                            	<img src="images/content/thumb2.jpg" alt="" class="alignleft" />
                                <span class="lptitle"><a href="#">Sample News 2</a></span>
                                <span>Praesent dignissim pellente lorem ipsum platea dictumst...</span>
                            </li>
                        </ul>
                    </li>
                    <li id="widget-ads" class="widget-container">
                       <div class="ads">
                       	<a href="#"><img src="images/content/ads1.jpg" alt="" /></a>
                        <a href="#"><img src="images/content/ads2.jpg" alt="" class="nomargin" /></a>
                        <a href="#"><img src="images/content/ads3.jpg" alt="" /></a>
                        <a href="#"><img src="images/content/ads4.jpg" alt="" class="nomargin" /></a>
                       </div>
                    </li>
                </ul>
				</aside>
                <div class="clear"></div>
            </section>
        </div>
        <!-- END MAIN CONTENT -->
<?php get_footer(); ?>