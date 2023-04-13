<?php global $redux_demo; ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Chartered Instittute of Information and Strategy Management - (CIISM)</title>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="CIISM is an institute that upholds the value of integrity, professionalism, best practice, objectivity, accountability, discipline, leadership, transparency, competency, selflessness as we equipping our members with the highest international standards, knowledge, and capacity building that enhance them to gain competitive advantage in information and strategic management.">
    <meta name="author" content="CIISM">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="CIISM" /> <!-- website name -->
    <meta property="og:site" content="https://www.ciism.com/" /> <!-- website link -->
    <meta property="og:title" content="Chartered Instittute of Information and Strategy Management - (CIISM)"/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="CIISM is an institute that upholds the value of integrity, professionalism, best practice, objectivity, accountability, discipline, leadership, transparency, competency, selflessness as we equipping our members with the highest international standards, knowledge, and capacity building that enhance them to gain competitive advantage in information and strategic management." /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />


    <!-- Site Icons -->
    <!-- [Favicon] -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon"  href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.ico" type="image/x-icon">

    <!-- [Touch Icons] -->
    <!-- For iPad3 with retina display: -->
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.ico" sizes="368x305">
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.ico" sizes="368x305">
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.ico" sizes="368x305">
    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.ico" sizes="368x305">
    <!-- End Site Icons -->


    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">


    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">


    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/81a91b0075.js" crossorigin="anonymous"></script>
    <!-- End Font Awesome -->

<?php wp_head(); ?>

</head>

<body>

 	<!-- PRE LOADER -->
    <section class="preloader">
        <div class="spinner">
            <span class="spinner-rotate"></span>
        </div>
    </section> 


    <!-- MENU -->
    <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button> 
                
                <br>
                <br>

                <!-- lOGO TEXT HERE -->
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" href="index.php" class="navbar-brand" style="width: 50%;height: auto;margin-left: -50px;margin-top: -17px;" alt="logo">
            </div>

            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-nav-first" style="margin-left: 14em">
                    <li><a href="<?php echo get_template_directory_uri(); ?>/index.html" class="smoothScroll">Home</a></li>
                    <li>
                    	<a href="<?php echo get_template_directory_uri(); ?>/about.html" class="smoothScroll">About
                    	</a> 
                    </li>
                    <li>
                    	<a href="#" data-toggle="modal" data-target="#site-on-mentainance" class="smoothScroll">Blog
                    	</a> 
                    </li>
                    <li>
                    	<a href="#member" class="smoothScroll nav-link dropdown-toggle arrow" data-toggle="dropdown">Memberships <i class="fa fa-angle-down"></i> 
                    	</a>

                    	<ul class="dropdown-menu">
							<li>
								<a href="distinguished-fellow.html" style="color: #000;font-size:14px;font-weight:normal">
								Distinguished Fellows
								</a> 
							</li>
							<li>
								<a href="fellow.html" style="color: #000;font-size:14px;font-weight:normal">
								Fellows
								</a> 
							</li>
                            <li>
                            	<a href="senior-member.html" style="color: #000;font-size:14px;font-weight:normal">
                            	Senior Members
                            	</a> 
                            </li>
                            <li>
                            	<a href="full-member.html" style="color: #000;font-size:14px;font-weight:normal">
                            	Full Members
                            	</a> 
                            </li>
                            <li>
                            	<a href="associate-member.html" style="color: #000;font-size:14px;font-weight:normal">
                            	Associate Members
                            	</a> 
                            </li>
                            <li>
                            	<a href="graduate-member.html" style="color: #000;font-size:14px;font-weight:normal">
                            	Graduate Members
                            	</a> 
                            </li>
                        </ul>
                    </li>
                    <li>
                    	<a href="<?php echo get_template_directory_uri(); ?>/gallery.html" class="smoothScroll">Gallery
                    	</a> 
                    </li>
                    <li>
                    	<a href="<?php echo get_template_directory_uri(); ?>/publications.html" class="smoothScroll">Publications
                    	</a> 
                    </li>
                    <li>
                    	<a href="<?php echo get_template_directory_uri(); ?>/contact.html" class="smoothScroll">Contact
                    	</a> 
                    </li>
                </ul>
            </div>

            <!--<?php 

			//	$defaults = array(
				       // 'menu'                 => '',
				       // 'container'            => 'div',
				       // 'container_class'      => 'collapse navbar-collapse',
				       // 'container_id'         => '',
				       // 'container_aria_label' => '',
				      //  'menu_class'           => 'menu',
				        //'menu_id'              => '',
				       // 'echo'                 => true,
				        //'fallback_cb'          => 'wp_page_menu',
				       // 'before'               => '',
				       // 'after'                => '',
				       // 'link_before'          => '',
				       // 'link_after'           => '',
				        //'items_wrap'           => '<ul class="nav navbar-nav navbar-nav-first" style="margin-left: 14em">%3$s</ul>',
				       // 'item_spacing'         => 'preserve',
				       // 'depth'                => 0,
				       // 'walker'               => '',
				      //  'theme_location'       => 'header-top-menu',
				   // );
				 
				//$menu = wp_nav_menu( $defaults );

            ?>-->

        </div>
     </section>


    <!-- HOME -->
    <section id="home" data-stellar-background-ratio="0.5">
    	<div class="slider" id="slider">
	        <div>
	            <img src="<?php echo get_template_directory_uri(); ?>/img/bg_1.jpg" alt="">
	        </div>
	        <div>
	            <img src="<?php echo get_template_directory_uri(); ?>/img/bg_2.jpg" alt="">
	        </div>
	        <div>
	            <img src="<?php echo get_template_directory_uri(); ?>/img/bg_3.jpg" alt="">
	        </div>
	        <div>
	            <img src="<?php echo get_template_directory_uri(); ?>/img/bg_4.jpg" alt="">
	        </div>
	    </div>

        <div class="container" style="margin-top:230px;margin-bottom:10px !important">
            <div class="row">
                <div class="col-md-6 col-sm-12 my">
                	<span class="line-bar" style="font-size:90px;color:#fff;">....</span>

                    <div class="home-info">
                    	<h2 class="jo6" style="color:#fff; font-size: 20px;text-transform: uppercase;margin-bottom: -30px;">
                    		We Uphold the Value of Integrity
                    	</h2>

                        <h1 class="to">Professionalism</h1>

                        <h2 class="to1" style="margin-top: -40px;color: #fff;text-transform: uppercase;font-weight: 600;margin-bottom: 100px;">
                        	Leadership, Competency...
                    	</h2>

                        <a href="<?php echo get_template_directory_uri(); ?>/membership-form.html" class="btn section-btn smoothScroll">Register Today With CIISM!</a><br><br>

                        <span>
                            CALL US (+234) 808-002-9271
                            <small>For Further Enquiries</small>
                        </span><br>

                        <span class="line-bar" style="font-size:90px;color:#fff;margin-left:359px;margin-top:-30px">
                        	....
                    	</span>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12" style="margin-top:100px">
                    <div class="home-video">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="min" src="https://www.youtube.com/embed/DgRS7quFpOM" width="560" height="315" frameborder="0" allowfullscreen="allowfullscreen" style="border: 6px solid;color: #021B79;border-right-color: #61ED00;border-left-color: #021B79;border-bottom-color: #61ED00;border-radius: 5px;"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


  	<!-- ABOUT -->
    <section id="about" data-stellar-background-ratio="0.5">
        <div class="container" style="margin-top:-100px">
               <div class="row mit me111">
                    <div class="col-md-5 col-sm-6">
                        <div class="about-info">
                            <div class="section-title">
                            	<img class="top" src='<?php echo get_template_directory_uri(); ?>/img/piggy-bank.png' width=50>

                                <h2 style="font-weight:600;color:#fff">View Our Courses</h2>

                                <span class="line-bar">...</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 col-sm-6">
                        <div class="about-info">
                            <div class="section-title">
                            	<img class="top" src='<?php echo get_template_directory_uri(); ?>/img/handshake.png' width=50>

                                <h2 style="font-weight:600;color:#fff">Become A Member</h2>

                                <span class="line-bar">...</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 col-sm-6">
                        <div class="about-info">
                            <div class="section-title">
                            	<img class="top" src='<?php echo get_template_directory_uri(); ?>/img/ecology.png' width=50>

                                <h2 style="font-weight:600;color:#fff">Get Involved</h2>

                                <span class="line-bar">...</span>
                            </div>
                        </div>

                        <br>
                    </div>
               </div>
          </div>
    </section>