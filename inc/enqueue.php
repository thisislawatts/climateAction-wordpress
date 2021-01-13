<?php
/**
 * Functions for loading in stylesheets and scripts.
 *
 * @package CAT
 */

add_action( 'wp_enqueue_scripts', 'neve_load_scripts', 20 );


if ( ! function_exists( 'neve_load_scripts' ) ) :
	/**
	 * Load CSS file.
	 */
	function neve_load_scripts() {

		$css_version = filemtime( get_stylesheet_directory() . '/style.css' );
		wp_enqueue_style( 'neve-child-style', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'neve-style' ), $css_version );

		// Only enqueue this JS if there is an FAQ block present on the page.
		if ( has_block( 'yoast/faq-block' ) ) {
			wp_enqueue_script(
				'faqs-js',
				get_stylesheet_directory_uri() . '/assets/js/faqs.js',
				array( 'jquery' ),
				true,
				true
			);

			wp_enqueue_style( 'dashicons' );
		}
	}
endif;
