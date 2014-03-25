<?php
/*
Template Name: Featured Articles
*/
?>

<?php get_header(); ?>

<?php get_template_part( 'breadcrumb' ); ?>

<div class="main_wrapper">
	<div id="main_text_box" class="clearfix">
		<p class="main_plus"><i class="fa fa-plus"></i></p>
		<p class="main_text"><span class="main_bold">Erik Augustin Palm</span> is a <span class="main_bold">Swedish</span> freelance journalist and translator that writes mainly about pop culture and subculture, but also travel and social issues.  He is published in many of <span class="main_bold">Sweden’s</span> biggest magazines and daily newspapers and has interviewed numerous of the heaviest names in <span class="main_bold">American</span> music, film and television.</p>
		<p class="main_text_icons"><i class="fa fa-rss"></i><i class="fa fa-instagram"></i><i class="fa fa-linkedin-square"></i><i class="fa fa-facebook-square"></i></p>
	</div>
</div>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>