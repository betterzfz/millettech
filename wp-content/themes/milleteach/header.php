<!DOCTYPE html>
<html lang="en">

<head>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" />
<meta charset="utf-8" />
<title>milleteach</title>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/inner.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/prettyPhoto.css" type="text/css" media="screen" />
<!--[if IE]> <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<![endif]-->
<!-- ////////////////////////////////// -->
<!-- //      Javascript Files        // -->
<!-- ////////////////////////////////// -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/hoverIntent.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/superfish.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/supersubs.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.cycle.all.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/fade.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){
	//=================================== MAIN MENU ===================================//
	jQuery("ul.sf-menu").supersubs({ 
	minWidth		: 12,		// requires em unit.
	maxWidth		: 14,		// requires em unit.
	extraWidth		: 3	// extra width can ensure lines don't sometimes turn over due to slight browser differences in how they round-off values
						   // due to slight rounding differences and font-family 
	}).superfish();  // call supersubs first, then superfish, so that subs are 
					 // not display:none when measuring. Call before initialising 
					 // containing tabs for same reason.
	
	//=================================== SLIDESHOW ===================================//
	jQuery('#slideshow').cycle({
		timeout: 5000,  // milliseconds between slide transitions (0 to disable auto advance)
		fx:      'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...     
		pager:   '#slidernav',  // selector for element to use as pager container
		pause:   0,	  // true to enable "pause on hover"
		cleartype:     !$.support.opacity,  // true if clearType corrections should be applied (for IE)
		cleartypeNoBg: true, // set to true to disable extra cleartype fixing (leave false to force background color setting on slides)  
		pauseOnPagerHover: 0 // true to pause when hovering over pager link
	});

					 
	//=================================== PRETTYPHOTO ===================================//
	jQuery('a[data-rel]').each(function() {jQuery(this).attr('rel', jQuery(this).data('rel'));});
	jQuery("a[rel^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',theme:'facebook',slideshow:2000});
					 
});
</script>
</head>

<body>
<div id="bodychild">
	<div id="outercontainer">
    	
        <!-- HEADER -->
        <div id="outerheader">
            <header id="top">
            	<div id="logo"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a></div>
                <section id="navigation">
                    <nav>
                        <?php
                            wp_nav_menu([
                                'container' => '',
                                'menu_class' => 'sf-menu',
                                'menu_id' => 'topnav',
                            ]);
                        ?>
                    </nav><!-- nav -->	
                    <div class="clear"></div>
                </section>
                <div class="clear"></div>
            </header>
        </div>
        <!-- END HEADER -->
        
        <!-- AFTER HEADER -->
        <div id="outerafterheader">
            <div id="afterheader">
            	<section id="aftertheheader">
                	“This can be your tagline or something you want..."?
            	</section>
            </div>
        </div>
        <!-- END AFTER HEADER -->