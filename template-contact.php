<?php

/*
	Template Name: Contact
*/

get_header();  ?>

<div class="main">
  <div class="container">
	
	
  	<section class="contactInfo flex">

	    
	  <?php // Start the loop ?>
	    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			
			<div class="contactStuff flex">

				<?php if ( get_field('address') ) : ?>
					<div class="address">
				    	<?php the_field('address'); ?>
					</div>
				<?php endif; ?>

				<?php if ( get_field('shopHours') ) : ?>
					<div class="shopHours">
				    	<?php the_field('shopHours'); ?>
					</div>
				<?php endif; ?>

			</div> <!-- END OF CONTACTSTUFF -->


			<?php $location = get_field('map');
				if( !empty($location) ) : ?>

				<div class="shopMap">
					<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
				</div>

			<?php endif; ?>	


	</section> <!-- END OF CONTACTINFO -->
		
			
		
		<div class="disclaimer">
			<?php the_content(); ?>
		</div>

	<?php endwhile; // end the loop?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(''); ?>