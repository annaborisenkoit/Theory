<?php
function thab_register_blocks(){

    if(!function_exists('register_block_type')){
        return;
    }

    wp_register_script('th-about', plugin_url('/blocks/js/th-about.js', __FILE__), ['wp_blocks','wp_element', 'wp_editor'],'1.0');
    wp_register_style('th-about', plugin_url('/blocks/css/th-about.css', __FILE__),[],'1.0');

    register_block_type('thab/th-about', ['stylr' => 'th-about', 'editor_script' => 'th-about']);
}
add_action('init', 'thab_register_blocks');