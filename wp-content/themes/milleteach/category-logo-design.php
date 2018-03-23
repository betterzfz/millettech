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

<style type="text/css">
    #ts-display-pf-col-2 .ts-display-pf-img a .rollover {
        width: 333px;
        height: 134px;
    }

    #ts-display-pf-col-2 li {
        border: 0;
    }
    #ts-display-pf-col-2 li::before {
        border: 0;
    }
</style>

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
            <?php 
            // Check if there are any posts to display
            if ( have_posts() ) : ?>
                <div id="ts-display-portfolio">
                <ul id="ts-display-pf-col-2">
                <?php
                // The Loop
                while ( have_posts() ) : the_post(); ?>
                    <li <?php if (1 == $wp_query->current_post % 2) echo 'class="nomargin"'; ?>>
                        <div class="ts-display-pf-img">
                            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                            <a class="image" width="333" height="134" href="<?php echo $image[0]; ?>" data-rel="prettyPhoto[mixed]" >
                            <span class="rollover"></span>
                            <img width="333" height="134" src="<?php echo $image[0]; ?>" alt="" /></a>
                        </div>
                        <div class="ts-display-clear"></div>
                    </li>
                <?php endwhile; ?>
                </ul>
                <div class="clear"></div>
                </div><!-- end ts-display-portfolio -->
                
                <div class="wp-pagenavi">
                    <?php
                        the_posts_pagination( array(
                            'mid_size'  => 2,
                            'prev_text' => __( 'Back', 'textdomain' ),
                            'next_text' => __( 'Onward', 'textdomain' ),
                        ) );
                    ?>
                </div>
                
                <div class="clear"></div>

            <?php else: ?>
                <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
            </section>
        </div>
        <!-- END MAIN CONTENT -->
<?php get_footer(); ?>     