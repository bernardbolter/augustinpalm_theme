<?php
/**
 * augustinpalm_theme template for displaying Single-Posts
 *
 * @package WordPress
 * @subpackage augustinpalm_theme
 * @since augustinpalm_theme 1.0
 */

get_header(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>