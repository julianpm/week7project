<footer class="mainFooter">

	<p>&copy 
		<?php echo date ('Y'); ?> <?php echo bloginfo('name'); ?>

		| 

		<span class="socialIcons">	

			<?php if ( get_field('social_media_facebook', 'options') ) : ?>
				<a href="<?php the_field('social_media_facebook', 'options'); ?>">
					<i class="fa fa-facebook-official"></i>
				</a>
			<?php endif; ?>

			<?php if ( get_field('social_media_instagram', 'options') ) : ?>
				<a href="<?php the_field('social_media_instagram', 'options'); ?>">
					<i class="fa fa-instagram"></i>
				</a>
			<?php endif; ?>

			<?php if ( get_field('social_media_twitter', 'options') ) : ?>
				<a href="<?php the_field('social_media_twitter', 'options'); ?>">
					<i class="fa fa-twitter"></i>
				</a>
			<?php endif; ?>

		</span>
	</p>

</footer> <!-- END OF MAINFOOTER -->

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>
