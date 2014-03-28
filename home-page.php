<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<?php get_template_part( 'head_image' ); ?>
<?php get_template_part( 'nav' ); ?>

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
<div id="cat_loop_wrap">
	<div id="cat_loop_list">

		  <?php $the_query = new WP_Query( 'cat=3&posts_per_page=-1' ); ?>
	 
			<?php if ( $the_query->have_posts() ) : ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		    <div class="item">
		  		<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
		  		<?php echo get_the_post_thumbnail(); ?>
		  		<div class="cat_loop_text_box">
		  			<h2><?php echo get_post_meta($post->ID, 'Description', true) ?></h2>
		  			<p><?php the_time('F jS, Y') ?></p>
		  			<?php
		  				if ( in_category( '2' ) ) {
		  					echo "<h3 class=\"cover_music\">MUSIC</h3>";
		  				} 
		  				elseif ( in_category( '7') ){
		  					echo "<h3 class=\"cover_film\">FILM</h3>";
		  				}
		  				elseif ( in_category( '9') ){
		  					echo "<h3 class=\"cover_tv\">TELEVISION</h3>";
		  				}
		  				elseif ( in_category( '10') ){
		  					echo "<h3 class=\"cover_art\">ART & FASHION</h3>";
		  				}
		  				elseif ( in_category( '8') ){
		  					echo "<h3 class=\"cover_society\">SOCIETY & POLITICS</h3>";
		  				}
		  				elseif ( in_category( '4') ){
		  					echo "<h3 class=\"cover_food\">FOOD & TRAVEL</h3>";
		  				}
		  				elseif ( in_category( '6') ){
		  					echo "<h3 class=\"cover_lit\">LITERATURE</h3>";
		  				}
		  				elseif ( in_category( '12') ){
		  					echo "<h3 class=\"cover_tech\">IT, MEDIA & TECH</h3>";
		  				}
		  				else {

		  				}
		  			?>
		  		</a>
		 		</div>
		 	</div>
		 	<?php endwhile; ?>
		 	<?php endif; ?>
	 
	</div>
</div>

<?php get_footer(); ?>