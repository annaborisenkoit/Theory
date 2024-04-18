<?php
function theory_add_metabox(){

    add_meta_box('car_metabox', esc_html__('Cars Settings', 'theory'), 'theory_cars_metabox_html', 'car', 'normal', 'high');

}
add_action('add_meta_boxes', 'theory_add_metabox');

function theory_cars_metabox_html($post) {

    $car_price = get_post_meta($post->ID, 'car_price', true);
    $car_engine = get_post_meta($post->ID, 'car_engine', true);

    ?>
        <p>
            <label for="car_price"><?php esc_html_e('Car Price', 'theory');  ?></label>
            <input type="text" id="car_price" name="car_price" value="<?php echo esc_attr($car_price); ?>" >
        </p>
        <p>
            <label for="car_engine"><?php esc_html_e('Car Engine', 'theory');  ?></label>
            <select name="car_engine" id="car_engine">
                <option value="">Select Engine</option>
                <option value="manual" <?php if($car_engine == 'manual'){ echo 'selected'; }?>>Manual</option>
                <option value="automatic" <?php if($car_engine == 'automatic'){ echo 'selected'; }?>>Automatic</option>
            </select>
        </p>
    <?php
}