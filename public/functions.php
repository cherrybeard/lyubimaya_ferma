<?php
	add_theme_support( 'post-thumbnails' );

	function wptuts_scripts_with_the_lot() {
    wp_register_script( 'main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'main' );
	}
	add_action( 'wp_enqueue_scripts', 'wptuts_scripts_with_the_lot' );
?>
