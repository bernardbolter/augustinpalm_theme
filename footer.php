</div>

<div id="bottom_nav">
	<ul>
		<li class="bot_music"><a href="<?php echo home_url( '/' ); ?>music">MUSIC <i class="fa fa-plus awe_font"></i></a></li>
		<li class="bot_film"><a href="<?php echo home_url( '/' ); ?>film">FILM <i class="fa fa-plus awe_font"></i></a></li>
		<li class="bot_tv"><a href="<?php echo home_url( '/' ); ?>television">TELEVISION <i class="fa fa-plus awe_font"></i></a></li>
		<li class="bot_art"><a href="<?php echo home_url( '/' ); ?>art-fashion">ART & FASHION <i class="fa fa-plus awe_font"></i></a></li>
		<li class="bot_society"><a href="<?php echo home_url( '/' ); ?>society-politics">SOCIETY & POLITICS <i class="fa fa-plus awe_font"></i></a></li>
		<li class="bot_food"><a href="<?php echo home_url( '/' ); ?>food-travel">FOOD & TRAVEL <i class="fa fa-plus awe_font"></i></a></li>
		<li class="bot_lit"><a href="<?php echo home_url( '/' ); ?>literature">LITERATURE <i class="fa fa-plus awe_font"></i></a></li>
		<li class="bot_tech"><a href="<?php echo home_url( '/' ); ?>it-media-tech">IT, MEDIA & TECH <i class="fa fa-plus awe_font"></i></a></li>
		<li class="bot_cover"><a href="<?php echo home_url( '/' ); ?>cover-stories">COVER STORIES <i class="fa fa-plus awe_font"></i></a></li>
		<li class="bot_about"><a href="<?php echo home_url( '/' ); ?>about">ABOUT <i class="fa fa-plus awe_font"></i></a></li>
		<li class="bot_photo"><a href="<?php echo home_url( '/' ); ?>photography">PHOTOGRAPHY <i class="fa fa-plus awe_font"></i></a></li>
		<li class="bot_other"><a href="#">OTHER PROJECTS <i class="fa fa-plus awe_font"></i></a></li>
	</ul>
</div>

</section><!-- #main -->


<footer role="contentinfo" id="footer">
	<div id="contact_wrap" class="clearfix">
		<div id="contact_box">
			<div class="contact_name_box clearfix">
				<p class="contact_name">ERIK AUGUSTIN PALM</p>
				<p class="contact_things">erik@augustinpalm.se</p>
					<ul class="contact_icons">
					<li><a href="http://www.facebook.com/augustinpalm"><i class="fa fa-facebook-square"></i></a></li>
					<li><a href="http://instagram.com/augustinpalm"><i class="fa fa-instagram"></i></a></li>
					<li><a href="http://twitter.com/augustinpalm"><i class="fa fa-twitter-square"></i></a></li>
					<li><a href="http://www.linkedin.com/pub/erik-augustin-palm/8/644/a09/"><i class="fa fa-linkedin-square"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="contact_form" id="contact">
			<?php echo do_shortcode( '[contact-form-7 id="10" title="Contact form 1"]' ); ?>
		</div>
	</div>
	<div class="footfoot"><p>ERIK AUGUSTIN PALM | all rights reserved 2014</p></div>
</footer><!-- footer -->

<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/scripts.min.js"></script>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */
	wp_footer();
?>
	</body>
</html>