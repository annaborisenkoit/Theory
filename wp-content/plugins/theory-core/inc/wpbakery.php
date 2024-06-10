<?php

class VcTheoryAbout {

    function __construct(){
        add_action('init', array($this, 'create_shortcode'), 1000);
        add_shortcode('theory_about_shortcode', array($this, 'render_shortcode'));
    }

    public function create_shortcode(){
        //:admin fields for WPBakery

        if (!defined('WPB_VC_VERSION')){
            return;
        }

        if (function_exists('vc_map')){
            vc_map(array(
                'name' => esc_html__("TH About"),
                'base' => 'theory_about_shortcode',
                'description' => '',
                'category' => 'Theory',
                'params' => array(
                    array(
                        'type' => 'textfield',
                        'heading' => esc_html__('Text'),
                        'param_name' => 'text',
                        'value' => '',
                        'description' => esc_html__('Insert Text'),
                    ),
                    array(
                        'type' => 'textarea_html',
                        'heading' => esc_html__('Description'),
                        'param_name' => 'content',
                        'value' => '',
                        'description' => esc_html__('Insert Description'),
                    ),
                )
            ));
        }
    }

    public function render_shortcode($atts, $content, $tag){
        // Вывод шорткода

        $atts = shortcode_atts(array(
            'text' => '',
        ), $atts);

        $title = esc_html__($atts['text']);
        
        // Проверка существования функции wpb_js_remove_wpautop
        if (function_exists('wpb_js_remove_wpautop')) {
            $content = wpb_js_remove_wpautop($content, true);
        } else {
            $content = wpautop($content); // Альтернатива wpautop, если wpb_js_remove_wpautop не существует
        }

        $result = '';
        $result .= '<h2>' . $title . '</h2>';
        $result .= '<div class="content_box">' . $content . '</div>';

        return $result;
    }
}

new VcTheoryAbout();
