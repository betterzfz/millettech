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
<script type="text/javascript">
    jQuery(document).ready(function(){
        //=================================== TABS ===================================//
        //jQuery tab
        jQuery(".tab-content").hide(); //Hide all content
        jQuery("ul.tabs li:first").addClass("active").show(); //Activate first tab
        jQuery(".tab-content:first").show(); //Show first tab content
        //On Click Event
        jQuery("ul.tabs li").click(function() {
            jQuery("ul.tabs li").removeClass("active"); //Remove any "active" class
            jQuery(this).addClass("active"); //Add "active" class to selected tab
            jQuery(".tab-content").hide(); //Hide all tab content
            var activeTab = jQuery(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
            jQuery(activeTab).fadeIn(200); //Fade in the active content
            return false;
        });
    });
</script>

    <!-- BEFORE CONTENT -->
    <div id="outerbeforecontent" class="inner">
        <div id="beforecontent">
            <section id="beforethecontent">
                <h1 class="pagetitle">Want to know More <span class="colortext">About Us?</span></h1>
                <div class="pagedesc">Fusce at sapien sit amet mauris auctor ultricies nec et dui. Donec fermentum viverra tincidunt. Sed ut posuere enim. Suspendisse lacus urna, ultrices quis dapibus adipiscing, mattis sed velit. Nunc volutpat dapibus eros at vulputate. Praesent eleifend tincidunt pellentesque.</div>
            </section>
        </div>
    </div>
    <!-- END BEFORE CONTENT -->

    <!-- MAIN CONTENT -->
    <div id="outermain">
        <section id="maincontent">
            <div class="two_third firstcols">
                <h2><?php the_title(); ?></h2>
                <?php echo $post->post_content; ?>
            </div>
            <div class="one_third lastcols"><br/><br/><br/><img src="<?php echo get_template_directory_uri(); ?>/images/content/pic1.jpg" alt="" /></div>
            
            
            <div class="separator line"><div></div></div>
            
            <div class="one_third firstcols">
                <h2>Our Services</h2>
                <p>Donec sit amet libero lorem, sed posuere mi. Nunc ut erat lobortis tortor accumsan ornare. Suspendisse a aliquet ligula. Nulla facilisi. Praesent id scelerisque arcu.</p>
                <ul class="checklist">
                    <li>Web Design</li>
                    <li>Programming</li>
                    <li>Social Marketing</li>
                    <li>SEO</li>
                    <li>Photoshop / Illustrator</li>
                </ul>
            </div>
            <div class="one_third">
                <h2>Meet Our Team</h2>
                <ul class="nolist">
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/content/people.jpg" alt="" class="imgborder alignleft" />
                        <span class="smalltitle colortext">John Doe</span>
                        <span>Praesent dignissim pellente lorem ipsum platea dictumst...</span>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/content/people.jpg" alt="" class="imgborder alignleft" />
                        <span class="smalltitle colortext">Marie Jasie</span>
                        <span>Praesent dignissim pellente lorem ipsum platea dictumst...</span>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/content/people.jpg" alt="" class="imgborder alignleft" />
                        <span class="smalltitle colortext">Jonny Deeps</span>
                        <span>Praesent dignissim pellente lorem ipsum platea dictumst...</span>
                    </li>
                </ul>
            </div>
            <div class="one_third lastcols">
                <h2>Contact Us</h2>
                Flamboyan streets no. 39<br/>
                Building A Suite #501 - Northren Daam<br/>
                Your City name, your country 1111<br/>
                
                <hr class="small"/>
                
                <div class="one_half firstcols">
                    <ul class="social">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/social/blogger-small.png" alt="" class="valignmiddle" /><a href="#">Blogger</a></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/social/dribble-small.png" alt="" class="valignmiddle" /><a href="#">Dribble</a></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/social/facebook-small.png" alt="" class="valignmiddle" /><a href="#">Facebook</a></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/social/flickr-small.png" alt="" class="valignmiddle" /><a href="#">Flickr</a></li>
                    </ul>
                </div>
                <div class="one_half lastcols">
                    <ul class="social">
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/social/google-small.png" alt="" class="valignmiddle" /><a href="#">Google</a></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/social/lastfm-small.png" alt="" class="valignmiddle" /><a href="#">Last.fm</a></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/social/twitter-small.png" alt="" class="valignmiddle" /><a href="#">Twitter</a></li>
                        <li><img src="<?php echo get_template_directory_uri(); ?>/images/social/yahoo-small.png" alt="" class="valignmiddle" /><a href="#">Yahoo</a></li>
                    </ul>
                </div>
                
            </div>
            
            
            <div class="clear"></div>
        </section>
    </div>
    <!-- END MAIN CONTENT -->
<?php get_footer(); ?>
