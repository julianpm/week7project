<?php

/*
	Template Name: About
*/

get_header();  ?>

<div class="main">
  <div class="container">

	    
	<section class="aboutInfo flex">

	    <?php // Start the loop ?>
	    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

			<div class="content aboutPagePic">    
		    	<?php the_content(); ?>
		    </div>

			<div class="shopStuff">
			
				<?php if ( get_field("description") ) : ?>			    
				    <div class="description">
				    	<?php the_field("description") ?> 
				    </div>
				<?php endif; ?>

				<?php if ( get_field("shopRules") ) : ?>			    
				    <div class="shopRules">
				    	<?php the_field("shopRules") ?> 
				    </div>
				<?php endif; ?>

			</div> <!-- END OF SHOPSTUFF -->

	</section> <!-- END OF ABOUTINFO -->

    <?php endwhile; // end the loop?>
  
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>