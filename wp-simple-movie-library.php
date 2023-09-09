<?php
/**
 * Plugin Name: WP Simple Movie Library
 * Description: A movie library
 * Version: 1.0
 * Author: Jethro Landa
 * Author URI: https://jethrolanda.com/
 * Text Domain: wp-simple-movie-library
 * Domain Path: /languages/
 * Requires at least: 5.8
 * Requires PHP: 7.2
 */

defined('ABSPATH') || exit;

if (!defined('WSML_PLUGIN_FILE')) {
    define('WSML_PLUGIN_FILE', __FILE__);
}

// Include the main Keyword Censor class.
if (!class_exists('WSML_Bootstrap', false)) {
    include_once dirname(WSML_PLUGIN_FILE) . '/includes/class-wsml-bootstrap.php';
}

function wp_simple_movie_library()
{
    return WSML_Bootstrap::instance();
}

// Global for backwards compatibility.
$GLOBALS['wp_simple_movie_library'] = wp_simple_movie_library();
