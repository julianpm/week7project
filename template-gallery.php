<?php

/*
	Template Name: Gallery
*/

get_header();  ?>

<div class="main">
  <div class="container">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<?php if ( get_field("first_artist_name") ) : ?>			    
			<h3 class="first_artist_name">
				<?php the_field("first_artist_name") ?> 
			</h3>
		<?php endif; ?>

		<section class="firstArtistPortfolio flex">
			
			<div class="firstArtistPic">			

				<?php 

					$image = get_field('first_artist_picture');

					if( !empty($image) ): ?>

						<img src="<?php echo $image['sizes']['standardPicture']; ?>" alt="<?php echo $image['alt']; ?>" />

				<?php endif; ?>

			</div> <!-- END OF FIRSTARTISTPIC -->

			<div class="firstArtistGallery flex">
				
				<?php 

				$images = get_field('first_artists_portfolio');

				if( $images ): ?>
				    <ul class="firstPortfolio flex">
				        <?php foreach( $images as $image ): ?>
				            <li>
				                <a href="<?php echo $image['url']; ?>" data-lightbox="portfolio">
				                     <img src="<?php echo $image['sizes']['galleryPicture']; ?>" alt="<?php echo $image['alt']; ?>" />
				                </a>
				                <p><?php echo $image['caption']; ?></p>
				            </li>
				        <?php endforeach; ?>
				    </ul> <!-- END OF FIRSTPORTFOLIO -->
				<?php endif; ?>

			</div> <!-- END OF FIRSTARTISTGALLERY -->

		</section> <!-- END OF FIRSTARTISTPORTFOLIO -->

		
		
		<div class="divider"></div>

		

		<?php if ( get_field("second_artist_name") ) : ?>			    
			<h3 class="second_artist_name">
				<?php the_field("second_artist_name") ?> 
			</h3>
		<?php endif; ?>

		<section class="secondArtistPortfolio flex">	
		
			<div class="secondArtistPic">

				<?php 

					$image = get_field('second_artist_picture');

					if( !empty($image) ): ?>

					<img src="<?php echo $image['sizes']['standardPicture']; ?>" alt="<?php echo $image['alt']; ?>" />

				<?php endif; ?>

			</div> <!-- END OF SECONDARTISTPIC -->

			<div class="secondArtistGallery flex">
				
				<?php 

				$images = get_field('second_artists_portfolio');

				if( $images ): ?>
				    <ul class="secondPortfolio flex">
				        <?php foreach( $images as $image ): ?>
				            <li>
				                <a href="<?php echo $image['url']; ?>" data-lightbox="portfolio">
				                     <img src="<?php echo $image['sizes']['galleryPicture']; ?>" alt="<?php echo $image['alt']; ?>" />
				                </a>
				                <p><?php echo $image['caption']; ?></p>
				            </li>
				        <?php endforeach; ?>
				    </ul> <!-- END OF SECONDPORTFOLIO -->
				<?php endif; ?>

			</div> <!-- END OF FIRSTARTISTGALLERY -->

		</section> <!-- END OF SECONDARTISTPORTFOLIO -->

		<?php the_content(); ?>
		

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>