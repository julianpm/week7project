<?php get_header(); ?>

<div class="main">
  <div class="container mainBlog flex">

    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
         

          <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2 class="entry-title indiv-entry-stuff"><?php the_title(); ?></h2>

          <?php the_post_thumbnail( 'blogPicture', array('class' => 'blogPostPic' ) ); ?>
    
          <div class="entry-meta indiv-entry-stuff postDate">
            <?php hackeryou_posted_on(); ?>
          </div><!-- .entry-meta -->
      

          <div class="entry-content indiv-entry-stuff">
            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->

          <div class="entry-utility indiv-entry-stuff editPost">
            <?php hackeryou_posted_in(); ?>
            <?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
          </div><!-- .entry-utility -->
        </div><!-- #post-## -->

        <div id="nav-below" class="navigation">
          <p class="nav-previous indiv-entry-stuff"><?php previous_post_link('%link', '&larr; %title'); ?></p>
          <p class="nav-next indiv-entry-stuff"><?php next_post_link('%link', '%title &rarr;'); ?></p>
        </div><!-- #nav-below -->


      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>