<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<section class="container mainBlog flex">
	
	<div class="allBlogPosts">
		<?php get_template_part('loop'); ?>
	</div> <!-- END OF MAINBLOG -->

		<?php get_sidebar(); ?>
</section> <!-- END OF CONTAINER -->

<?php get_footer(); ?>