<?php
/**
 * Template name: Homepage Template
 */
get_header();
?>

    <div class="cars">

        <?php
        $args = array(            
            'post_type' => 'car',
            'tax_query' => array(
                'relation' => 'OR',
                array(
                    'taxonomy' => 'brand',
                    'field' => 'slug',
                    'terms' => array('mersedes'),
                ),
                array(
                    'taxonomy' => 'manufacture',
                    'field' => 'slug',
                    'terms' => array( '2019' ),
                ),
            ),            
            'posts_per_page' => -1
        );
        $cars = new WP_Query($args); ?>

        <?php if($cars->have_posts()) : while($cars->have_posts()) : $cars->the_post(); ?>

            <?php get_template_part('partials/content'); ?> 

        <?php endwhile; else : ?>

            <?php get_template_part('partials/content', 'none'); ?> 

        <?php endif; 
        
        wp_reset_postdata();
        ?>

        <hr>

        <?php
        unset($args);
        $args = array(
            
            'post_type' => 'post',            
            'posts_per_page' => -1
        );
        $blogpost = new WP_Query($args); ?>

        <?php if($blogpost->have_posts()) : while($blogpost->have_posts()) : $blogpost->the_post(); ?>

            <?php get_template_part('partials/content'); ?> 

        <?php endwhile; else : ?>

            <?php get_template_part('partials/content', 'none'); ?> 

        <?php endif; 
        
        wp_reset_postdata();
        ?>

    </div>

<?php
//get_sidebar();
get_footer();