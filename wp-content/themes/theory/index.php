<?php get_header(); ?>

	<div>

		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

			telo posta 

		<?php endwhile; else : ?>

			no posts
			
		<?php endif; ?>

	</div>

<?php
//get_sidebar();
get_footer();
