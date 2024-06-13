<?php get_header(); ?>

<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
		<?php
		while ( have_posts() ) :
			the_post();

			?><h1 class="display-4 text-uppercase text-center mb-5"><?php the_title();?></h1><?

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
	</div>
</div>

<?php
//get_sidebar();
get_footer();
