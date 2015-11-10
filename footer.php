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

			|

			</p>

	              <ul class="footerMenu flex">
	                  <?php wp_nav_menu( array( "theme_location" => "footer", "container" => '', 'items_wrap'=> '%3$s' ) ); ?>
	              </ul><!-- .menu -->

	</footer> <!-- END OF MAINFOOTER -->

	<?php wp_footer(); ?>
</body>
</html>
