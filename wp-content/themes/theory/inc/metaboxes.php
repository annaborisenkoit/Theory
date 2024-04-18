<?php
function theory_add_metabox(){

    add_meta_box('car_metabox', esc_html__('Cars Settings', 'theory'), 'theory_cars_metabox_html', 'car', 'normal', 'high');

}
add_action('add_meta_boxes', 'theory_add_metabox');

function theory_cars_metabox_html($post) {
    echo "Hello World";
}