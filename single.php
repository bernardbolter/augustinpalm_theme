<?php get_header(); ?>
<?php get_template_part( 'nav' ); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div class="embed-box">
<?php the_content(); ?>
<style>
.issuuembed span {display:none !important;}
</style>
</div>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>