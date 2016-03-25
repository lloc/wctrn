<?php

/**
 * Load theme textdomain on after_theme_setup
 */
add_action( 'after_setup_theme', function () {
	load_theme_textdomain( 'wctrn', get_template_directory() . '/languages' );
} );

/**
 * Proper way to enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'wctrn-style', get_stylesheet_uri() );
	wp_enqueue_script( 'wctrn-script', get_template_directory_uri() . '/js/script.js' );

	/**
	 * Let's make wctrn-script translatable
	 *
	 * Example:
	 * <script type="text/javascript">console.log( wctrn.my_string );</script>
	 */
	if ( ! is_admin( ) ) {
		$translations = [
			'ajax_url'  => admin_url( 'admin-ajax.php' ),
			'my_string' => __( 'This is your string', 'wctrn' ),
		];

		wp_localize_script( 'wctrn-script', 'wctrn', $translations );
	}
} );
