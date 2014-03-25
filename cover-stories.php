<?php
/*
Template Name: Cover Stories
*/
?>

<?php get_header(); ?>

<?php get_template_part( 'breadcrumb' ); ?>

<div id="short_bio_box" class="clearfix">
	<p class="short_bio_plus"><i class="fa fa-plus"></i></p>
	<p class="short_bio_text"><span class="short_bio_bold">Erik Augustin Palm</span> is a <span class="short_bio_bold">Swedish</span> freelance journalist and translator that writes mainly about pop culture and subculture, but also travel and social issues.  He is published in many of <span class="short_bio_bold">Sweden’s</span> biggest magazines and daily newspapers and has interviewed numerous of the heaviest names in <span class="short_bio_bold">American</span> music, film and television.</p>
	<ul class="short_bio_text_icons">
		<li><a href="http://www.facebook.com/augustinpalm"><i class="fa fa-facebook-square"></i></a></li>
		<li><a href="http://instagram.com/augustinpalm"><i class="fa fa-instagram"></i></a></li>
		<li><a href="http://twitter.com/augustinpalm"><i class="fa fa-twitter-square"></i></a></li>
		<li><a href="http://www.linkedin.com/pub/erik-augustin-palm/8/644/a09/"><i class="fa fa-linkedin-square"></i></a></li>
	</ul>
</div>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>