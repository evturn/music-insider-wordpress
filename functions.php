<?php

function wpmi_theme_styles() {

	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css');

}
add_action('wp_enqueue_scripts', 'wpmi_theme_styles');

function wpmi_theme_js() {

	
	wp_enqueue_script('app_js', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), '', true);
	
}
add_action('wp_enqueue_scripts', 'wpmi_theme_js');

?>