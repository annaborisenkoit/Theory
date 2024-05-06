<?php

function theory_register_post_type(){

$args = array(
    'hierarchical' => false,
    'labels' => array(
        'name'              => esc_html_x( 'Brands', 'taxonomy general name', 'theory' ),
        'singular_name'     => esc_html_x( 'Brand', 'taxonomy singular name', 'theory' ),
        'search_items'      => esc_html__( 'Search Brands', 'theory' ),
        'all_items'         => esc_html__( 'All Brands', 'theory' ),
        'parent_item'       => esc_html__( 'Parent Brand', 'theory' ),
        'parent_item_colon' => esc_html__( 'Parent Brand:', 'theory' ),
        'edit_item'         => esc_html__( 'Edit Brand', 'theory' ),
        'update_item'       => esc_html__( 'Update Brand', 'theory' ),
        'add_new_item'      => esc_html__( 'Add New Brand', 'theory' ),
        'new_item_name'     => esc_html__( 'New Brand Name', 'theory' ),
        'menu_name'         => esc_html__( 'Brand', 'theory' ),
    ),
    'show_ui' => true,
    'rewrite' => array('slug' => 'brands'),
    'query_var' => true,
    'show_admin_column' => true,
    'show_in_rest' => true
);
if(!taxonomy_exists('brand')){
    register_taxonomy('brand', array('car'), $args);
}
    
unset($args);


$args = array(
    'hierarchical' => true,
    'labels' => array(
        'name'              => esc_html_x( 'Manufactures', 'taxonomy general name', 'theory' ),
        'singular_name'     => esc_html_x( 'Manufacture', 'taxonomy singular name', 'theory' ),
        'search_items'      => esc_html__( 'Search Manufactures', 'theory' ),
        'all_items'         => esc_html__( 'All Manufactures', 'theory' ),
        'parent_item'       => esc_html__( 'Parent Manufacture', 'theory' ),
        'parent_item_colon' => esc_html__( 'Parent Manufacture:', 'theory' ),
        'edit_item'         => esc_html__( 'Edit Manufacture', 'theory' ),
        'update_item'       => esc_html__( 'Update Manufacture', 'theory' ),
        'add_new_item'      => esc_html__( 'Add New Manufacture', 'theory' ),
        'new_item_name'     => esc_html__( 'New Manufacture Name', 'theory' ),
        'menu_name'         => esc_html__( 'Manufacture', 'theory' ),
    ),
    'show_ui' => true,
    'has_archive' => true,
    'rewrite' => array('slug' => 'manufactures'),
    'query_var' => true,
    'show_admin_column' => true,
    'show_in_rest' => true
);

register_taxonomy('manufacture', array('car'), $args);

unset($args);


$args = array(
    'label' => esc_html__('Cars', 'theory'),
    'labels' => array(
        'name'                  =>esc_html_x( 'Cars', 'Post type general name', 'theory' ),
        'singular_name'         =>esc_html_x( 'Car', 'Post type singular name', 'theory' ),
        'menu_name'             =>esc_html_x( 'Cars', 'Admin Menu text', 'theory' ),
        'name_admin_bar'        =>esc_html_x( 'Car', 'Add New on Toolbar', 'theory' ),
        'add_new'               =>esc_html__( 'Add New', 'theory' ),
        'add_new_item'          =>esc_html__( 'Add New Car', 'theory' ),
        'new_item'              =>esc_html__( 'New Car', 'theory' ),
        'edit_item'             =>esc_html__( 'Edit Car', 'theory' ),
        'view_item'             =>esc_html__( 'View Car', 'theory' ),
        'all_items'             =>esc_html__( 'All Cars', 'theory' ),
        'search_items'          =>esc_html__( 'Search Cars', 'theory' ),
        'parent_item_colon'     =>esc_html__( 'Parent Cars:', 'theory' ),
        'not_found'             =>esc_html__( 'No Cars found.', 'theory' ),
        'not_found_in_trash'    =>esc_html__( 'No Cars found in Trash.', 'theory' ),
        'featured_image'        =>esc_html_x( 'Car Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'theory' ),
        'set_featured_image'    =>esc_html_x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'theory' ),
        'remove_featured_image' =>esc_html_x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'theory' ),
        'use_featured_image'    =>esc_html_x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'theory' ),
        'archives'              =>esc_html_x( 'Car archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'theory' ),
        'insert_into_item'      =>esc_html_x( 'Insert into Car', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'theory' ),
        'uploaded_to_this_item' =>esc_html_x( 'Uploaded to this Car', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'theory' ),
        'filter_items_list'     =>esc_html_x( 'Filter Cars list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'theory' ),
        'items_list_navigation' =>esc_html_x( 'Cars list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'theory' ),
        'items_list'            =>esc_html_x( 'Cars list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'theory' ),
    ),
    'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes', 'post-formats'),
    'public' => true, 
    'publicly_queryable' => true, 
    'show_ui' => true,
    'show_in_menu' => true,
    'has_archive' => true,
    'menu_icon' => 'dashicons-dashboard',
    'rewrite' => array('slug' => 'cars'),	
    'show_in_rest' => true

);
register_post_type('car', $args);

}
add_action('init', 'theory_register_post_type');