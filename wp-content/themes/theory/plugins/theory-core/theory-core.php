<?php

/*
Plugin Name: Theory Core
Plugin URI: https://github.com/annaborisenkoit
Description: A plugit that impliments Theory Functionality;
Version: 1.0
Requires at least: 5.8
Requires PHP: 5.6.20
Author: annaborisenkoit
Author URI: https://github.com/annaborisenkoit
License: GPLv2 or later
Text Domain: theory-core
*/

if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

require plugin_dir_path( __FILE__ ) . '/inc/widget-about.php';
require plugin_dir_path( __FILE__ ) . '/inc/metaboxes.php';
require plugin_dir_path( __FILE__ ) . '/inc/acf.php';
require plugin_dir_path( __FILE__ ) . '/inc/custom_post_type.php';

