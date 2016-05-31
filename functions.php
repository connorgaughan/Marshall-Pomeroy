<?php

class Makespace {

	function __construct(){
		add_action( 'wp_enqueue_scripts', array( $this, 'wp_enqueue_scripts' ) );
	}

	function wp_enqueue_scripts(){
		wp_enqueue_script( 'theme', get_stylesheet_directory_uri() . '/js/theme.js' );
		wp_localize_script( 'theme', 'MSWObject', array(
			'ajax_url' => admin_url( 'admin-ajax.php' ),
			'site_url' => site_url(),
			'stylesheet_directory' => get_stylesheet_directory_uri()
		) );

		wp_enqueue_style( 'theme', get_stylesheet_uri() );
	}

}

$Makespace = new Makespace();