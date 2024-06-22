<?php
function thab_register_blocks(){
    if(!function_exists('register_block_type')){
        return;
    }

    wp_register_script(
        'th-about',
        plugins_url('/blocks/js/th-about.js', __FILE__),
        ['wp-blocks', 'wp-element', 'wp-block-editor'],
        '1.0',
        true // Указываем, что скрипт должен загружаться в футере
    );

    wp_register_style(
        'th-about',
        plugins_url('/blocks/css/th-about.css', __FILE__),
        [],
        '1.0'
    );

    register_block_type('thab/th-about', [
        'editor_script' => 'th-about',
        'style' => 'th-about'
    ]);
}
add_action('init', 'thab_register_blocks');
