<article <?php post_class('custom_car_class'); ?> id="<?php the_ID(); ?>" data-post-id="<?php the_ID(); ?>">
<?php 

//has_post_thumbnail()
//the_post_thumbnail()
//get_post_thumbnail_id()
//get_the_post_thumbnail()
//set_post_thumbnail_size()

if(has_post_thumbnail(get_the_ID())) {
    the_post_thumbnail('car-cover');
    echo get_the_post_thumbnail(get_the_ID(), array(100,100));
}

?>    
<h1><?php the_title(); ?></h1>
    <div><?php the_content(); ?></div>
    <div>       
        <?php 
        
        echo get_post_meta(get_the_ID(), 'custom_engine_type', true)
        
        ?>

    </div>
    <a href="<?php the_permalink(); ?>">Read More</a>
</article>