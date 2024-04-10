<?php get_header(); ?>

	<div>

		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

			<?php get_template_part('partials/content'); ?> 

		<?php endwhile; 
		
		?>
			<div class="pagination">
				<div class="prev">
					<?php previous_posts_link('Prev'); ?>
				</>
				<!-- HTML Code -->

				<div class="next">
				<?php next_posts_link('Next'); ?>
				</div>
			</div>
		<?php
		
		else : ?>

			<?php get_template_part('partials/content', 'none'); ?> 

		<?php endif; ?>

	</div>

<?php
//get_sidebar();
get_footer();
