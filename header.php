<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="no-js ie ie6 lte7 lte8 lte9" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7 ]><html class="no-js ie ie7 lte7 lte8 lte9" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8 lte8 lte9" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9 lte9" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="no-js" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>><!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title><?php
			/*
			 * Print the <title> tag based on what is being viewed.
			 * We filter the output of wp_title() a bit -- see
			 * boilerplate_filter_wp_title() in functions.php.
			 */
			wp_title( '|', true, 'right' );
		?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link href='http://fonts.googleapis.com/css?family=Buenard:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<script src="<?php bloginfo( 'template_url' ); ?>/js/html5shiv.js"></script>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
		/* We add some JavaScript to pages with the comment form
		 * to support sites with threaded comments (when in use).
		 */
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );

		/* Always have wp_head() just before the closing </head>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to add elements to <head> such
		 * as styles, scripts, and meta tags.
		 */
		wp_head();
?>
	</head>
	<body <?php body_class(); ?>>
		<header role="banner" id="head">
			<div id="head_back">
			</div>
			<div id="title_back">
				<div id="title_text_wrap">
					<a id="title_text" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?>.</a>
					<p id="descript_text"><?php bloginfo( 'description' ); ?></p>
				</div> <!-- #text_title_wrap -->
			</div> <!-- #title_back -->
		</header> <!-- #head -->

	<section id="content" role="main">

		<nav id="navigation" role="navigation" class="clearfix">
				
			<div id="nav_left">
				<p id="erik_text">ERIK AUGUSTIN PALM.</p>
				<ul>
					<li><a href="#" id="articles_nav">ARTICLES</a>
						<ul id="articles_drop">
							<li class="nav_music"><a href="#"><span id="plus_music"><i class="fa fa-plus awe_font"></i></span>MUSIC</a></li>
							<li class="nav_film"><a href="#"><i class="fa fa-plus awe_font"></i>FILM</a></li>
							<li class="nav_tv"><a href="#"><i class="fa fa-plus awe_font"></i>TELEVISION</a></li>
							<li class="nav_art"><a href="#"><i class="fa fa-plus awe_font"></i>ART & FASHION</a></li>
							<li class="nav_society"><a href="#"><i class="fa fa-plus awe_font"></i>SOCIETY & TRAVEL</a></li>
							<li class="nav_food"><a href="#"><i class="fa fa-plus awe_font"></i>FOOD & TRAVEL</a></li>
							<li class="nav_lit"><a href="#"><i class="fa fa-plus awe_font"></i>LITERATURE</a></li>
							<li class="nav_tech"><a href="#"><i class="fa fa-plus awe_font"></i>IT, MEDIA & TECH</a></li>
						</ul> <!-- articles_drop -->
					</li>
				</ul>
			</div> <!-- #nav_right -->

			<div id="nav_right">
				<ul>
					<li><a href="#" id="info_nav">INFO</a>
						<ul id="info_drop">
							<li><a href="#">ABOUT ME<i class="fa fa-plus awe_font"></i></a></li>
							<li><a href="#">PHOTOGRAPHY<i class="fa fa-plus awe_font"></i></a></li>
							<li><a href="#">OTHER PROJECTS<i class="fa fa-plus awe_font"></i></a></li>
							<li><a href="#">CONTACT<i class="fa fa-plus awe_font"></i></a></li>
						</ul> <!-- info_drop -->
					</li>
				</ul>
			</div> <!-- #nav_right -->

		</nav><!-- #navigation -->
		
		<div id="bread_wrap">
			<p class="dark_bread">FEATURED ARTICLES</p>
		</div>

			<div class="main_wrapper">
				<div id="main_text_box" class="clearfix">
					<p class="main_plus"><i class="fa fa-plus"></i></p>
					<p class="main_text"><span class="main_bold">Erik Augustin Palm</span> is a <span class="main_bold">Swedish</span> freelance journalist and translator that writes mainly about pop culture and subculture, but also travel and social issues.  He is published in many of <span class="main_bold">Sweden’s</span> biggest magazines and daily newspapers and has interviewed numerous of the heaviest names in <span class="main_bold">American</span> music, film and television.</p>
					<p class="main_text_icons"><i class="fa fa-rss"></i><i class="fa fa-instagram"></i><i class="fa fa-linkedin-square"></i><i class="fa fa-facebook-square"></i></p>
				</div>