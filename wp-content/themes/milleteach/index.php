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

<style type="text/css">
    #main{ height:600px; background:url(<?php echo get_template_directory_uri(); ?>/images/millettech230_03.gif) repeat-x;}
    #big{ width:1080px; height:475px; margin:0 auto; }
    #left{ width:670px; height:275px; margin-left:30px; margin-top:20px; border:1px solid #CCCCCC; float:left; display:inline;}
    #right{ width:329px; height:275px; margin-left:20px; margin-top:20px; border:1px solid #CCCCCC; float:left; display:inline; font-family:"Calibri"; font-size:12px; line-height:18px;}
    #ptop ul{ list-style-type:none;margin: 0;}
    #ptop{ height:31px; border-bottom:1px solid #CCCCCC;}
    #ptop ul li{ display:block; width:166px; border-right:1px solid #CCCCCC; height:31px; float:left; background:url(<?php echo get_template_directory_uri(); ?>/images/millettech29_05.gif) repeat-x;}
    #ptop #pt1{ display:block; width:166px; height:31px; float:left; background:url(<?php echo get_template_directory_uri(); ?>/images/millettech29_03.gif) repeat-x;}
    #ptop #pt2{ display:block; width:166px; height:31px; float:left; background:url(<?php echo get_template_directory_uri(); ?>/images/millettech29_03.gif) repeat-x;}
    #ptop #pt3{ display:block; width:166px; height:31px; float:left; background:url(<?php echo get_template_directory_uri(); ?>/images/millettech29_03.gif) repeat-x;}
    #ptop #pt4{ display:block; width:166px; height:31px; float:left; background:url(<?php echo get_template_directory_uri(); ?>/images/millettech29_03.gif) repeat-x;}
    #ptop #pt1 a{ color:#FFF;}
    #ptop #pt2 a{ color:#FFF;}
    #ptop #pt3 a{ color:#FFF;}
    #ptop #pt4 a{ color:#FFF;}
    #ptop ul li a{ display:block; width:166px; height:31px; text-align:center; line-height:31px; font-weight:bold; color:#000;}
    #ft{ width:670px; height:7px;}
    #ft #ft1,#ft2,#ft3,#ft4{ float:left;}
    #ft #ft1{ position:relative; left:80px; top:0px;}
    #ft #ft2{ position:relative; left:249px; top:0px;}
    #ft #ft3{ position:relative; left:412px; top:0px;}
    #ft #ft4{ position:relative; left:580px; top:0px;}
    #pp{ width:625px; height:200px; margin-left:20px; margin-top:10px;}
    .text{line-height:20px; font-size:11px; font-family:Tahoma, Geneva, sans-serif; color:#010f70; margin-top:6px;}
    .cl1{ color:#0000ff; font-size:11px; font-family:Tahoma; }
    .cl1:hover{ text-decoration:underline; color:red;}
    #bottom{ width:625px; border-top:1px solid #CCCCCC; margin-top:10px;}
    .c2{ color:#000; font-size:14px; font-family:Tahoma;}
    .c3{ color:#6b6b6b; font-size:14px; font-family:Tahoma;}
    #news{ width:329px; height:30px;}
    #news ul{ list-style-type:none;margin: 0;}
    #news{ height:30px; border-bottom:1px solid #CCCCCC;}
    #news ul li{ display:block; width:108px; border-right:1px solid #CCCCCC; height:30px; float:left; background:url(<?php echo get_template_directory_uri(); ?>/images/jianbian.gif) repeat-x;}
    #news ul li a{ display:block; width:108px; height:30px; text-align:center; line-height:30px; font-weight:bold; color:#000;}
    #news .n1{ display:block; width:108px; height:30px; float:left; background:url(<?php echo get_template_directory_uri(); ?>/images/millettech29_09.gif) repeat-x;}
    #news .n2{ display:block; width:108px; height:30px; float:left; background:url(<?php echo get_template_directory_uri(); ?>/images/millettech29_09.gif) repeat-x;}
    #news .n3{ display:block;  height:30px; float:left; background:url(<?php echo get_template_directory_uri(); ?>/images/millettech29_09.gif) repeat-x;}
    #pwen{ margin-top:15px; margin-left:10px;}
    .pwen-b{ margin-top:15px; margin-left:10px; display:none;}
    .pwen-c{ margin-top:15px; margin-left:10px; display:none;}
    #pwen h4 a{ color: #ff0000;}
    #pwen p.bold{ font-weight: bold; line-height: 25px;}
    #pwen .icon{ display: inline-block; background: #eee; padding: 0 5px; margin-right: 3px;  color: #ff0000;}
    .mm{ text-decoration:underline; color:#000;}
    .mm:hover{ text-decoration:underline; color:#F00;}
    #ptt{ width:1023px; height:178px; margin-left:30px;}
    #yi{ width:1023px; margin-top:10px;}
    .sp1{ color:#1C4156; font-size:24px;display: block; padding-bottom: 2px;font-family:'094-cai978094-cai978' ;}
    .rt{ color:#1C4156; font-size:11px; line-height:18px; margin-top: 15px; width: 315px; text-align: justify}
    .setimg {
        width: 151px;
        height: 84px;
        background: #fff;
        overflow: hidden;
    }
    .setimg a img {
        margin: 0 auto;
        max-width: 151px;
        display: block;
    }
    a img {
        border: none;
    }
    a {
        color: #1C4156;
        text-decoration: none;
    }
    a:hover {
        color: red;
        text-decoration: underline;
    }
    p, ul, ol, blockquote {
        margin-bottom: 20px;
    }
    a, a:visited, .colortext {
        text-decoration: none;
        font-weight: normal;
        color: #c93232;
    }
    a, a:visited, .colortext {
        text-decoration: none;
        font-weight: normal;
        color: #c93232;
    }
    .cl1 {
        color: #0000ff;
        font-size: 11px;
        font-family: Tahoma;
    }
    #pwen table, td, th {
        text-align: left;
    }
    #pwen p, ul, ol, blockquote {
        margin-bottom: 0;
    }
    a {
        color: #1C4156;
        text-decoration: none;
    }
    .softtext .text a {
        line-height: 19px;
        font-size: 11px;
        font-family: Tahoma, Geneva, sans-serif;
        color: #555555;
    }
    .it-sol-c {
        width: 625px;
        height: 200px;
        margin-left: 20px;
        margin-top: 10px;
        display: none;
    }
    .it-sol-b {
        width: 625px;
        height: 200px;
        margin-left: 20px;
        margin-top: 10px;
        display: none;
    }
    .it-sol {
        width: 625px;
        height: 200px;
        margin-left: 20px;
        margin-top: 10px;
        display: none;
    }
    .softtext {
        color: red;
        float: left;
        margin-left: 20px;
        width: 450px;
        padding-bottom: 5px;
        /* width: 518px; */
    }
    hr {
        color: #eee;
    }
    .softtext h4 {
        font-size: 10px;
        margin-bottom: 0;
    }
    #pwen h4 {
        font-size: 10px;
        margin-bottom: 0;
    }
    #pwen table {
        margin: 0;
    }
    .softtext p {
        margin-bottom: 0;
        margin-top: 0;
    }
</style>
        <!-- SLIDER -->
        <div id="outerslider" style="width: 1080px; margin: 0 auto;">
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
        
        <!-- MAIN CONTENT -->
        <div id="main">
            <div id="big"> <br style="line-height:0;">
                <!--#left-->
                <div id="left">
                <div id="ptop">
                    <ul>
                    <li class="pt1" style="display: none;"><a href="javascript:">NEWS</a></li>
                    <li id="pt1" style="display: block;"><a href="/english/news/Website-News.htm" id="pt1_a">NEWS</a></li>
                    <li class="pt2" style="display: block;"><a href="javascript:">BLOGS</a></li>
                    <li id="pt2" style="display: none;"><a href="http://blog.millettech.com/?p=1218" id="pt2_a">BLOGS</a></li>
                    <li class="pt3" style="display: block;"><a href="javascript:">OUTSOURCING</a></li>
                    <li id="pt3" style="display: none;"><a href="/english/Others/Offshore-Software-Development-Outsourcing.htm">OUTSOURCING</a></li>
                    <li style="border: 0px; width: 166px; display: block;" class="pt4"><a href="javascript:">PROCESS</a></li>
                    <li style="border: 0px; width: 166px; display: none;" id="pt4"><a href="/english/Others/Millettech-Web-Design-and-Development-Process.htm">PROCESS</a></li>
                    </ul>
                </div>
                <!--#ptop-->
                <div id="ft">
                    <div id="ft1" style="display: block;"><img src="<?php echo get_template_directory_uri(); ?>/images/millettech29_14.gif"></div>
                    <div id="ft2" style="display: none;"><img src="<?php echo get_template_directory_uri(); ?>/images/millettech29_14.gif"></div>
                    <div id="ft3" style="display: none;"><img src="<?php echo get_template_directory_uri(); ?>/images/millettech29_14.gif"></div>
                    <div id="ft4" style="display: none;"><img src="<?php echo get_template_directory_uri(); ?>/images/millettech29_14.gif"></div>
                </div>
                <style>
                a:hover{
                    color:red;text-decoration:underline;
                }
                </style>
                <!--#NEWS开始-->
                <div id="pp" style="display: block;"> 
                            <div style="float:left; display:inline;" class="setimg"><a title="Millettech has conducted a revision of the whole website and reintegrated its products" href="/english/news/165.htm"><img src="<?php echo get_template_directory_uri(); ?>/images/uuuuuu(1).jpg"></a></div>
                    <div class="softtext" style="margin-left: 10px; width:460px;">
                    <p><span><strong><a title="Millettech has conducted a revision of the whole website and reintegrated its products" href="/?page_id=359">Millettech has conducted a revision of the whole website and reintegrated its products</a></strong></span><br>
                    </p><p class="text" style="position:relative;"><a title="Millettech has conducted a revision of the whole website and reintegrated its products" href="/english/news/165.htm">
                    Recently, Millettech has conducted a revision of the whole website and reintegrated its products. Millettech has devoted a lot to redesigning the web to keep pace with the modern trend and show the new image of enterprise transformation in the new era.</a> 
                    <a href="/?page_id=359" class="cl1" style="position:absolute; right:0; bottom:-15px;">Read More&gt;&gt;</a></p>
                    
                    </div>
                    <div style="clear:both"></div>
                    <script>
                        document.getElementById('pt1_a').href = "/english/news/Website-News.htm";
                    </script>
                            <hr style="margin:10px 0; margin:2px 0\9;">
                    
                            <div style="float:left; display:inline;" class="setimg"><a title="A successful case of an Car washing business service website" href="/english/news/164.htm"><img src="<?php echo get_template_directory_uri(); ?>/images/che.png"></a></div>
                    <div class="softtext">
                    <p><span><strong><a title="A successful case of an Car washing business service website" href="/?page_id=353">A successful case of an Car washing business service website</a></strong></span><br>
                    </p><p class="text" style="position:relative;"><a title="A successful case of an Car washing business service website" href="/english/news/164.htm">
                    Recently, Millettech has helped a Taiwan company to develop an Car washing business service website and planned a complete set of integrated solutions.Milletech’s elaborate design and professional attitude have win favorable comments from the Taiwan company.
            </a> 
                    <a href="/?page_id=353" class="cl1" style="position:absolute; right:0; bottom:0;">Read More&gt;&gt;</a></p>
                    
                    </div>
                    <div style="clear:both"></div>
                    <script>
                        document.getElementById('pt1_a').href = "/english/news/Website-News.htm";
                    </script>
                    
                    
                </div>
                <!--#NEWS结束-->
                <div class="it-sol" style="display: none;"> 
                <!--#BLOGS开始-->
                            <div style="float:left; display:inline;" class="setimg">
                    <a title="" href="http://blog.millettech.com/?p=1222">
                    <img src="http://blog.millettech.com/wp-content/uploads/2017/08/136293857_14950697053761n-150x150.jpg"></a></div>
                    <div class="softtext">
                    <h4><a title="" href="http://blog.millettech.com/?p=1222">
                    Shanghai Science and Technology Festival becomes annual event</a></h4>
                    <p class="text" style="position:relative;"><a title="" href="http://blog.millettech.com/?p=1222">
                    Starting this year, the Shanghai Science and Technology Festival will be held annually instead of once every two years.

            Founded in 1991 by the Shanghai Municipal People's Government, the event this year will take place from May 20 to ...</a> 
                
                    <a href="http://blog.millettech.com/?p=1222" class="cl1" style="position:absolute; right:0; bottom:-15px;">Read More&gt;&gt;</a></p>
                    
                    </div>
                    <div style="clear:both"></div>
                    <script>
                        document.getElementById('pt2_a').href = "http://blog.millettech.com/?p=1222";
                    </script>
                            <hr style="margin:10px 0; margin:2px 0\9;">
                    
                            <div style="float:left; display:inline;" class="setimg">
                    <a title="" href="http://blog.millettech.com/?p=1218">
                    <img src="http://blog.millettech.com/wp-content/uploads/2017/08/timg1-150x150.jpg"></a></div>
                    <div class="softtext">
                    <h4><a title="" href="http://blog.millettech.com/?p=1218">
                    Shanghai High Tech Expo August 25th opening, the audience to experience the cabin to simulate C919 made large aircraft</a></h4>
                    <p class="text" style="position:relative;"><a title="" href="http://blog.millettech.com/?p=1218">
                    Shanghai Beijing, August 25 Xinhua (reporter Zheng Yingying) 2017 (fourth) Shanghai International Science Fair (referred to as "Shanghai High Tech Expo") opened in Shanghai on 25 May, China made large aircraft C919 simulation cabin debut...</a> 
                
                    <a href="http://blog.millettech.com/?p=1218" class="cl1" style="position:absolute; right:0; bottom:0;">Read More&gt;&gt;</a></p>
                    
                    </div>
                    <div style="clear:both"></div>
                    <script>
                        document.getElementById('pt2_a').href = "http://blog.millettech.com/?p=1218";
                    </script>
                    
                    
                <!--#BLOGS结束-->
                </div>
                <div class="it-sol-b" style="display: none;"> 
                    <!--#OUTSOURCING开始-->
                    <div style="float:left; display:inline;  width:150px">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ITSOLUTION.gif" width="100"></div>
                    <div class="softtext">
                    <h4><a href=" /english/Others/Offshore-Software-Development-Outsourcing.htm">SOFTWARE OFFSHORE OUTSOURCING</a></h4>
                    <p class="text"><a href=" /english/Others/Offshore-Software-Development-Outsourcing.htm"> Offshore Software Development Outsourcing 
            Millettech firmly believes in “client Comfort ability” and offers warm and professional services to our clients from its offshore development centre. Moreover, projects are carried out based on clients’ preferences, requirements and comfortability. 
            Our management team comprises of multi-lingual, experienced professionals with extensive experience in web-related areas and IT outsourcing. 
            Millettech differentiates itself from other similar organizations on the basis of its philosophy on client comfortability, quality of deliverables, flexible business approach, proven methodologies and processes,we focus on cutting edge tools and technologies, and low-cost development. </a>
                <a href=" /english/Others/Offshore-Software-Development-Outsourcing.htm" class="cl1" title="More" style="position:absolute; right:0; bottom:0;">Read More&gt;&gt;</a></p>
                    
                    </div>
                    <!--#OUTSOURCING结束--> 
                </div>
                <div class="it-sol-c" style="display: none;"> 
                    <!--#PROCESS开始-->
                    <div style="float:left; display:inline;  width:150px">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/234379001199010374.gif" width="100"></div>
                    <div class="softtext">
                    <h4><a href=" /english/Others/Offshore-Software-Development-Outsourcing.htm">WEB DESIGN AND DEVELOPMENT PROCESS</a></h4>
                    <p class="text" style=" position:relative;"><a href=" /english/Others/Offshore-Software-Development-Outsourcing.htm"> Millettech Web Design and Development Process 
            Our web design process is simple, while our development service quality is very sophisticated and satisfactory to customers. You may simply drop your emails to   services@Millettech.com   to tell us your web design requirements. Then we will tell you what we need to do together to deliver the project with best quality. Main steps of the service are as follows: 
            Contacting us   
            Firstly, please send e-mails to us: 
            1.Services:   services@Millettech.com    
            2, For general information:   info@Millettech.com    
            3. Sales and Marketing:   sales@Millettech.com   Email is the best way at this stage since we can read your requirement carefully. </a>
                    <a href=" /english/Others/Millettech-Web-Design-and-Development-Process.htm" class="cl1" title="More" style="position:absolute; right:0; bottom:0;">Read More&gt;&gt;</a></p>
                    
                    </div>
                    <!--#PROCESS结束--> 
                </div>
                </div>
                <!--#left-->
                <div id="right">
                <div id="news">
                    <ul>
                    <li id="n1" style="display: block;"><a href="javascript:">IT SOLUTION</a></li>
                    <li class="n1" style="display: none;"><a href="javascript:">IT SOLUTION</a></li>
                    <li id="n2" style="display: none;"><a href="javascript:">STRENGTH</a></li>
                    <li class="n2" style="display: block;"><a href="javascript:">STRENGTH</a></li>
                    <li style="border: 0px; display: none;" id="n3"><a href="javascript:">FAQs</a></li>
                    <li style="border: 0px; display: block;" class="n3"><a href="javascript:">FAQs</a></li>
                    </ul>
                </div>
                <!--#news-->
                <div style="clear:both"></div>
                <div id="pwen" style="display: block;"> 
                    <!--#IT SOLUTION开始-->
                    <h4><a href="/english/Services/IT-Solution.htm">IT SOLUTION</a></h4>
                    <table width="100%" cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr>
                        <td class="font_blue">
                        <p class="bold">1. Portals and EAI</p>
                        
                        <p><span class="icon">+</span> Overview</p>
                        <p><span class="icon">+</span> Enterprise Information Portal (EIP)</p>
                        <p><span class="icon">+</span> Enterprise Application Integration (EAI)</p>
                        <p><span class="icon">+</span> ECM (Enterprise Content Management)</p>
                        
                        <p class="bold">2. OA Management<strong> </strong></p>
                        <p class="bold">3. Customer Relationship Management</p>
                        <p class="bold">4. Content Management System</p>
                        </td>
                    </tr>
                </tbody>
            </table> 
                    <p style="text-align:right;margin-right:10px;"><a href="/english/Services/IT-Solution.htm" title="More">Read More&gt;&gt;</a> </p>
                    <!--#IT SOLUTION结束--> 
                </div>
                <!--#pwen-->
                <div class="pwen-b" style="display: none;"> 
                    <!--#STRENGTH开始-->
                    <h4><a href="/english/About-us/Technology-Strength.htm">TECHNOLOGY STRENGTH</a></h4>
                    
            <div><font color="#111111">As a leading and professional website specializing in website service, we have powerful technologies as a strength, such as professional technicians on .NET, ASP, PHP, XML, DHTML, JAVA, J2EE, PERL, C/C++, and VB.</font></div>
            <div><font color="#111111">Millettech is equipped with Flash, 3DMAX, Photoshop, GIFAnimator, CorelDRAW, Fireworks, Dreamweaver, Chinese painting, Oil painting and carving. 
            </font></div>
             
                    <p style="text-align:right;margin-right:10px;"><a href="/english/About-us/Technology-Strength.htm" title="More">Read More&gt;&gt;</a> 
                    <!--#STRENGTH结束--> 
                </p></div>
                <div class="pwen-c" style="display: none;">1. which services do you offer?<br>2. What would you need for us to start a web design project? <br>3. I want to have a flash website. What shall I do? <br>4. I have a custom software development project. What shall I do and whom shall I contact? <br>5. How will I monitor my project once I decide to go ahead with Millettech? <br>6. How do you work with overseas clients?<br>7. I have some Windows and some Linux servers. Can you supp...
                    <p style="text-align:right;margin-right:10px;"><a href="/english/Others/FAQ.htm" title="More">Read More&gt;&gt;</a> 
                </p></div>
                <div style="clear:both"></div>
                </div>
                <!--#right-->
                <div style="clear:both"></div>
                <div id="ptt">
                <div id="yi">
                    <div style="float:left; width:315px;">
                    <div style="float:left"><img src="<?php echo get_template_directory_uri(); ?>/images/cms_website.jpg"></div>
                    <div style="float:left; margin-left:25px; margin-top:15px;">
                    <span class="sp1"><a href="/english/Services/Mobile-Application.htm">APP Development</a></span>
                        <span style="color:#1C4156; font-size:11px; font-family:Arial">Mobile web design and App Development</span></div>
                
                    <div style="clear:both"></div>
                    <p class="rt">
                    We can translate your product idea into mobile applications accessible to 
                    iPhone or Android phone users around the globe. Mobile apps provide a marketing 
                    channel for millions of viewers around the world, and can also help you put most of 
                    your business functionality into hand held devices.
                        
                        
                        </p>
                    </div>
                    <div style="float:left; margin-left:40px; width:315px;">
                    <div style="float:left"><img src="<?php echo get_template_directory_uri(); ?>/images/e_commerce.jpg"></div>
                    <div style="float:left; margin-left:25px; margin-top:15px;">
                    <span class="sp1"><a href="/english/Solutions/index.htm">e COMMERCE</a></span>
                        <span style="color:#1C4156; font-size:11px; font-family:Arial">Online Store Development</span></div>
                    <div style="clear:both"></div>
                    <p class="rt">Our passion is to build successful E-Commerce
                        businesses. Whether it is a personal website or a business site
                        we work closely with you to understand your retail strategy
                        and target market that will increase more sales of products and
                        services through your website.</p>
                    </div>
                    <div style="float:left; margin-left:38px; width:315px;">
                    <div style="float:left"><img src="<?php echo get_template_directory_uri(); ?>/images/e_marketing.jpg"></div>
                    <div style="float:left; margin-left:25px; margin-top:15px;"><span class="sp1"><a href="/english/Solutions/Online-Marketing.htm">e MARKETING</a></span>
                        <span style="color:#1C4156; font-size:11px; font-family:Arial">SEO &amp; SEM Service</span></div>
                    <div style="clear:both"></div>
                    <p class="rt">Millettech's aim is to promote your website through the use of ethical E-Marketing services including SEO &amp; SMO. Our highly skilled and trained professional’s use highly advanced techniques to bring your website in the top of the search result which will increase your online presence through proven online marketing strategies.
            </p>
                    </div>
                </div>
                </div>
            </div>
            <!--#big-->
            <div style="clear:both"></div>
        </div>
        <!-- END MAIN CONTENT -->
        
<script type="text/javascript">
	$(function(){

			$(".pt1,#pt2,#pt3,#pt4").hide();
			$("#ft2,#ft3,#ft4").hide();
			$(".pt1").click(function(){
				$("#ft2,#ft3,#ft4,.pt1,#pt2,#pt3,#pt4,.it-sol,.it-sol-b,.it-sol-c").hide();
				$("#ft1,#pt1,.pt2,.pt3,.pt4,#pp").show();
				})
			$(".pt2").click(function(){
				$("#ft1,#ft3,#ft4,#pt1,.pt2,#pt3,#pt4,#pp,.it-sol-b,.it-sol-c").hide();
				$("#ft2,.pt1,#pt2,.pt3,.pt4,.it-sol").show();
				})
			$(".pt3").click(function(){
				$("#ft1,#ft2,#ft4,#pt1,#pt2,.pt3,#pt4,.it-sol,#pp,.it-sol-c").hide();
				$("#ft3,.pt1,.pt2,#pt3,.pt4,.it-sol-b").show();
				})
			$(".pt4").click(function(){
				$("#ft1,#ft2,#ft3,#pt1,#pt2,#pt3,.pt4,.it-sol,#pp,.it-sol-b").hide();
				$("#ft4,.pt1,.pt2,.pt3,#pt4,.it-sol-c").show();
				})
		});
	$(function(){
			$(".n1,#n2,#n3").hide();
			$("#n1,.n2,.n3").show();
			$("#n1,.n1").click(function(){
				$("#n1,.n2,.n3,#pwen").show();
				$(".n1,#n2,#n3,.pwen-b,.pwen-c").hide();
				})
			$("#n2,.n2").click(function(){
				$("#n1,.n2,#n3,.pwen-c,#pwen").hide();
				$(".n1,#n2,.n3,.pwen-b").show();
				})
			$("#n3,.n3").click(function(){
				$("#n1,#n2,.n3,.pwen-b,#pwen").hide();
				$(".n1,.n2,#n3,.pwen-c").show();
				})
		
		})
</script>

        <?php get_footer();