<?php

/*
 * Plugin Name: WCTRN
 * Description: Example plugin - WordCamp Turin 2016
 * Author:      Dennis Ploetner
 * Author URI:  https://profiles.wordpress.org/realloc
 * Text Domain: wctrn
 */

/**
 * Load plugin textdomain on plugins_loaded
 */
add_action( 'plugins_loaded', function () {
	$path = plugin_basename( dirname( __FILE__ ) ) . '/languages';
	load_plugin_textdomain( 'wctrn', false, $path );
} );
