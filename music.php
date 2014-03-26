<?php
/*
Template Name: Music
*/
?>

<?php get_header(); ?>

<?php get_template_part( 'head_image' ); ?>
<?php get_template_part( 'nav' ); ?>
<?php get_template_part( 'breadcrumb' ); ?>

<div class="cat_loop_wrap">
	<ul class="cat_loop_list">
		  <?php
	 
		  // The Query
		  query_posts( array ( 'music' => 'music', 'posts_per_page' => -1 ) );
	 
		  // The Loop
		 while ( have_posts() ) : the_post(); ?>
		    <li>
		  		<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
		  		<?php echo get_the_post_thumbnail(); ?>
		  		<div class="cat_loop_text_box">
		  			<h2><?php echo get_post_meta($post->ID, 'Description', true) ?></h2>
		  		</a>
		 	</li>
	 
		  <?php endwhile;
	 
		  // Reset Query
		  wp_reset_query();
	 
		  ?>
	</ul>
</div>

<?php get_footer(); ?>