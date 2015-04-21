<?php

if ( ! isset( $content_width ) ) {
	$content_width = 852; /* pixels */
}

class Publish_PWD {
	function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_publish') );
	}

	/**
	 * Enqueues the parent theme's CSS.
	 */
	function enqueue_publish() {
		wp_enqueue_style( 'publish', get_template_directory_uri() . '/style.css' );
	}
}

new Publish_PWD();