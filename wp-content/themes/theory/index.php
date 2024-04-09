<?php get_header(); ?>

	<div>

		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

			<?php get_template_part('partials/content'); ?> 

		<?php endwhile; 
		
		posts_nav_link();
		
		else : ?>

			<?php get_template_part('partials/content', 'none'); ?> 

		<?php endif; ?>

	</div>

<?php
//get_sidebar();
get_footer();
