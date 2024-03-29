<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Theory
 */

get_header();
?>

	
	<div>
    Template for Custom Post Type Car

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<?php get_template_part('partials/content'); ?> 

<?php endwhile; else : ?>

	<?php get_template_part('partials/content', 'none'); ?> 

<?php endif; ?>

	</div>

<?php
//get_sidebar();
get_footer();
