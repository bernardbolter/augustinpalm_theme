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
					<a id="title_text" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					<p id="descript_text"><?php bloginfo( 'description' ); ?></p>
				</div> <!-- #text_title_wrap -->
			</div> <!-- #title_back -->
		</header> <!-- #head -->

	<section id="content" role="main">

		<nav id="navigation" role="navigation" class="clearfix">
			<div id="nav_left">
				<p id="erik_text">ERIK AUGUSTIN PALM</p>
				<ul>
					<li><a href="#" id="articles_nav">ARTICLES</a>
						<ul id="articles_drop">
							<li class="nav_music"><a href="<?php echo home_url( '/' ); ?>music"><i class="fa fa-plus awe_font"></i>MUSIC</a></li>
							<li class="nav_film"><a href="<?php echo home_url( '/' ); ?>film"><i class="fa fa-plus awe_font"></i>FILM</a></li>
							<li class="nav_tv"><a href="<?php echo home_url( '/' ); ?>television"><i class="fa fa-plus awe_font"></i>TELEVISION</a></li>
							<li class="nav_art"><a href="<?php echo home_url( '/' ); ?>art-fashion"><i class="fa fa-plus awe_font"></i>ART & FASHION</a></li>
							<li class="nav_society"><a href="<?php echo home_url( '/' ); ?>society-politics"><i class="fa fa-plus awe_font"></i>SOCIETY & POLITICS</a></li>
							<li class="nav_food"><a href="<?php echo home_url( '/' ); ?>food-travel"><i class="fa fa-plus awe_font"></i>FOOD & TRAVEL</a></li>
							<li class="nav_lit"><a href="<?php echo home_url( '/' ); ?>literature"><i class="fa fa-plus awe_font"></i>LITERATURE</a></li>
							<li class="nav_tech"><a href="<?php echo home_url( '/' ); ?>it-media-tech"><i class="fa fa-plus awe_font"></i>IT, MEDIA & TECH</a></li>
							<li class="nav_cover"><a href="<?php echo home_url( '/' ); ?>"><i class="fa fa-plus awe_font"></i>COVER STORIES</a></li>
						</ul> <!-- articles_drop -->
					</li>
				</ul>
			</div> <!-- #nav_right -->

			<div id="nav_right">
				<ul>
					<li><a href="#" id="info_nav">INFO</a>
						<ul id="info_drop">
							<li class="nav_about"><a href="<?php echo home_url( '/' ); ?>about">ABOUT<i class="fa fa-plus awe_font"></i></a></li>
							<li class="nav_photo"><a href="<?php echo home_url( '/' ); ?>photography">PHOTOGRAPHY<i class="fa fa-plus awe_font"></i></a></li>
							<li class="nav_other"><a href="<?php echo home_url( '/' ); ?>other-projects">OTHER PROJECTS<i class="fa fa-plus awe_font"></i></a></li>
							<li class="nav_contact"><a href="#contact">CONTACT<i class="fa fa-plus awe_font"></i></a></li>
						</ul> <!-- info_drop -->
					</li>
				</ul>
			</div> <!-- #nav_right -->

		</nav><!-- #navigation -->