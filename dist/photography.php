<?php
/*
Template Name: Photo
*/
?>

<?php get_header(); ?>

<?php get_template_part( 'head_image' ); ?>
<?php get_template_part( 'nav' ); ?>
<?php get_template_part( 'breadcrumb' ); ?>

<div id="photo_bio_box" class="clearfix">
	<p class="photo_bio_plus"><i class="fa fa-plus"></i></p>
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<h1 class="photo_bio_text">
		<?php the_content(); ?>		
	</h1>
	<?php endwhile; ?>
	<?php endif; ?>
</div>

<div id="photo_loop_wrap">
	<div id="photo_loop_container">
	 	<div class="photo_box">
			<a rel="palm_gallery" href="<?php bloginfo( 'template_url' ); ?>/gfx/photography/01_photo_big.jpg" class="swipebox" title="Temporary senior living in Fukushima City, Japan, October 2012">
				<img src="<?php bloginfo( 'template_url' ); ?>/gfx/photography/01_photo_sm.jpg" alt="Temporary senior living in Fukushima City">
				<p>Temporary senior living in Fukushima City<span class="photo_date">Japan, October 2012</span></p>
			</a>
	 	</div>
	 	<div class="photo_box">
			<a rel="palm_gallery" href="<?php bloginfo( 'template_url' ); ?>/gfx/photography/02_photo_big.jpg" class="swipebox" title="Soma, Fukushima, Japan, October 2012">
				<img src="<?php bloginfo( 'template_url' ); ?>/gfx/photography/02_photo_sm.jpg" alt="Soma" >
				<p>Soma<span class="photo_date">Fukushima, Japan, October 2012</span></p>
			</a>
	 	</div>
	 	<div class="photo_box">
			<a rel="palm_gallery" href="<?php bloginfo( 'template_url' ); ?>/gfx/photography/03_photo_big.jpg" class="swipebox"  title="Trumpet icon Kermit Ruffins outside his speakeasy, New Orleans, May 2013">
				<img src="<?php bloginfo( 'template_url' ); ?>/gfx/photography/03_photo_sm.jpg" alt="Trumpet icon Kermit Ruffins outside his speakeasy">
				<p>Trumpet icon Kermit Ruffins outside his speakeasy<span class="photo_date">New Orleans, May 2013</span></p>
			</a>
	 	</div>
	 	<div class="photo_box">
			<a rel="palm_gallery" href="<?php bloginfo( 'template_url' ); ?>/gfx/photography/04_photo_big.jpg" class="swipebox"  title="Trombone star Glen David Andrews in his backyard, New Orleans, May 2013">
				<img src="<?php bloginfo( 'template_url' ); ?>/gfx/photography/04_photo_sm.jpg" alt="Trombone star Glen David Andrews in his backyard">
				<p>Trombone star Glen David Andrews in his backyard<span class="photo_date">New Orleans, May 2013</span></p>
			</a>
	 	</div>
	 	<div class="photo_box">
			<a rel="palm_gallery" href="<?php bloginfo( 'template_url' ); ?>/gfx/photography/05_photo_big.jpg" class="swipebox"  title="Indie-punk band Nude Boy, San Diego, California, April 2010">
				<img src="<?php bloginfo( 'template_url' ); ?>/gfx/photography/05_photo_sm.jpg" alt="Indie-punk band Nude Boy">
				<p>Indie-punk band Nude Boy<span class="photo_date">San Diego, California, April 2010</span></p>
			</a>
	 	</div>
	 	<div class="photo_box">
			<a rel="palm_gallery" href="<?php bloginfo( 'template_url' ); ?>/gfx/photography/06_photo_big.jpg" class="swipebox"  title="San Diego, California, April 2010">
				<img src="<?php bloginfo( 'template_url' ); ?>/gfx/photography/06_photo_sm.jpg" alt="San Diego, California, April 2010">
				<p>San Diego, California, April 2010<span class="photo_date">California, April 2010</span></p>
			</a>
	 	</div>
	 	<div class="photo_box">
			<a rel="palm_gallery" href="<?php bloginfo( 'template_url' ); ?>/gfx/photography/07_photo_big.jpg" class="swipebox"  title="Abandoned house, Detroit, February 2012">
				<img src="<?php bloginfo( 'template_url' ); ?>/gfx/photography/07_photo_sm.jpg" alt="Abandoned house">
				<p>Abandoned house<span class="photo_date">Detroit, February 2012</span></p>
			</a>
	 	</div>
	 	<div class="photo_box">
			<a rel="palm_gallery" href="<?php bloginfo( 'template_url' ); ?>/gfx/photography/08_photo_big.jpg" class="swipebox"  title="Albaicin, Granada, Spain, November 2009">
				<img src="<?php bloginfo( 'template_url' ); ?>/gfx/photography/08_photo_sm.jpg" alt="Albaicin">
				<p>Albaicin<span class="photo_date">Granada, Spain, November 2009</span></p>
			</a>
	 	</div>
	 	<div class="photo_box">
			<a rel="palm_gallery" href="<?php bloginfo( 'template_url' ); ?>/gfx/photography/09_photo_big.jpg" class="swipebox"  title="Googleplex, Mountain View, California, June 2013">
				<img src="<?php bloginfo( 'template_url' ); ?>/gfx/photography/09_photo_sm.jpg" alt="Googleplex">
				<p>Googleplex<span class="photo_date">Mountain View, California, June 2013</span></p>
			</a>
	 	</div>
	 	<div class="photo_box">
			<a rel="palm_gallery" href="<?php bloginfo( 'template_url' ); ?>/gfx/photography/10_photo_big.jpg" class="swipebox"  title="Singer-songwriter icon Linda Perhacs, Topanga Canyon, California, April 2013">
				<img src="<?php bloginfo( 'template_url' ); ?>/gfx/photography/10_photo_sm.jpg" alt="Singer-songwriter icon Linda Perhacs">
				<p>Singer-songwriter icon Linda Perhacs<span class="photo_date">Topanga Canyon, California, April 2013</span></p>
			</a>
	 	</div>
	 	<div class="photo_box">
			<a rel="palm_gallery" href="<?php bloginfo( 'template_url' ); ?>/gfx/photography/11_photo_big.jpg" class="swipebox"  title="Ngong Ping 360, Hong Kong, January 2009">
				<img src="<?php bloginfo( 'template_url' ); ?>/gfx/photography/11_photo_sm.jpg" alt="Ngong Ping 360">
				<p>Ngong Ping 360<span class="photo_date">Hong Kong, January 2009</span></p>
			</a>
	 	</div>
	 	<div class="photo_box">
			<a rel="palm_gallery" href="<?php bloginfo( 'template_url' ); ?>/gfx/photography/12_photo_big.jpg" class="swipebox"  title="Tropic Cinema, Key West, Florida, May 2013">
				<img src="<?php bloginfo( 'template_url' ); ?>/gfx/photography/12_photo_sm.jpg" alt="Tropic Cinema">
				<p>Tropic Cinema<span class="photo_date">Key West, Florida, May 2013</span></p>
			</a>
	 	</div>
	 	<div class="photo_box">
			<a rel="palm_gallery" href="<?php bloginfo( 'template_url' ); ?>/gfx/photography/13_photo_big.jpg" class="swipebox"  title="Caffe Trieste, North Beach, San Francisco, February 2012">
				<img src="<?php bloginfo( 'template_url' ); ?>/gfx/photography/13_photo_sm.jpg" alt="Caffe Trieste">
				<p>Caffe Trieste<span class="photo_date">North Beach, San Francisco, February 2012</span></p>
			</a>
	 	</div>
	 	<div class="photo_box">
			<a rel="palm_gallery" href="<?php bloginfo( 'template_url' ); ?>/gfx/photography/14_photo_big.jpg" class="swipebox"  title="Eureka Valley, San Francisco, February 2010">
				<img src="<?php bloginfo( 'template_url' ); ?>/gfx/photography/14_photo_sm.jpg" alt="Eureka Valley">
				<p>Eureka Valley<span class="photo_date">San Francisco, February 2010</span></p>
			</a>
	 	</div>
	 	<div class="photo_box">
			<a rel="palm_gallery" href="<?php bloginfo( 'template_url' ); ?>/gfx/photography/15_photo_big.jpg" class="swipebox"  title="Rainbows and Dragons Hike Inn, Big Sur, California, May 2013">
				<img src="<?php bloginfo( 'template_url' ); ?>/gfx/photography/15_photo_sm.jpg" alt="Rainbows and Dragons Hike Inn">
				<p>Rainbows and Dragons Hike Inn<span class="photo_date">Big Sur, California, May 2013</span></p>
			</a>
	 	</div>
	 	<div class="photo_box">
			<a rel="palm_gallery" href="<?php bloginfo( 'template_url' ); ?>/gfx/photography/16_photo_big.jpg" class="swipebox"  title="Fruitvale Station director Ryan Coogler, Downtown Oakland, California, October 2013">
				<img src="<?php bloginfo( 'template_url' ); ?>/gfx/photography/16_photo_sm.jpg" alt="Fruitvale Station director Ryan Coogler">
				<p>"Fruitvale Station" director Ryan Coogler<span class="photo_date">Downtown Oakland, California, October 2013</span></p>
			</a>
	 	</div>
	 	<div class="photo_box">
			<a rel="palm_gallery" href="<?php bloginfo( 'template_url' ); ?>/gfx/photography/17_photo_big.jpg" class="swipebox"  title="Metro station, Tokyo, Japan, January 2006">
				<img src="<?php bloginfo( 'template_url' ); ?>/gfx/photography/17_photo_sm.jpg" alt="Metro station">
				<p>Metro station<span class="photo_date">Tokyo, Japan, January 2006</span></p>
			</a>
	 	</div>
	 	<div class="photo_box">
			<a rel="palm_gallery" href="<?php bloginfo( 'template_url' ); ?>/gfx/photography/18_photo_big.jpg" class="swipebox"  title="Tsukiji Fish Market, Tokyo, Japan, January 2006">
				<img src="<?php bloginfo( 'template_url' ); ?>/gfx/photography/18_photo_sm.jpg" alt="Tsukiji Fish Market">
				<p>Tsukiji Fish Market<span class="photo_date">Tokyo, Japan, January 2006</span></p>
			</a>
	 	</div>
	 	<div class="photo_box">
			<a rel="palm_gallery" href="<?php bloginfo( 'template_url' ); ?>/gfx/photography/19_photo_big.jpg" class="swipebox"  title="Kyoto, Japan, December 2008">
				<img src="<?php bloginfo( 'template_url' ); ?>/gfx/photography/19_photo_sm.jpg" alt="Kyoto">
				<p>Kyoto<span class="photo_date">Japan, December 2008</span></p>
			</a>
	 	</div>
	 	<div class="photo_box">
			<a rel="palm_gallery" href="<?php bloginfo( 'template_url' ); ?>/gfx/photography/20_photo_big.jpg" class="swipebox"  title="Kyary Pamyu Pamyu live in Harajuku, Tokyo, Japan, October 2012">
				<img src="<?php bloginfo( 'template_url' ); ?>/gfx/photography/20_photo_sm.jpg" alt="Kyary Pamyu Pamyu live in Harajuku">
				<p>Kyary Pamyu Pamyu live in Harajuku<span class="photo_date">Tokyo, Japan, October 2012</span></p>
			</a>
	 	</div>
	</div>
</div>

<?php get_footer(); ?>