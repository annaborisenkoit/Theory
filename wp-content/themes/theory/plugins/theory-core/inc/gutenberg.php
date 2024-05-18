<?php
function thab_register_blocks(){

    if(!function_exists('register_block_type')){
        return;
    }

    wp_register_script('th-about', plugin_dir_path( __FILE__ ). '/blocks/js/th-about.js', ['wp_blocks','wp_element', 'wp_editor'],'1.0');
    wp_register_style('th-about', plugin_dir_path( __FILE__ ). '/blocks/css/th-about.css', ['wp_blocks','wp_element', 'wp_editor'],'1.0');

    register_block_type('thab/th-about', ['stylr' => 'th-about', 'editor_script' => 'th-about']);
}
add_action('init', 'thab_register_blocks');