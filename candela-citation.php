<?php
/**
 * @wordpress-plugin
 * Plugin Name: Candela Citation
 * Description: Creative Commons Attributions for Candela/Pressbooks
 * Version: 1.0.0
 * Author: Lumen Learning
 * Author URI: https://lumenlearning.com
 * Text Domain: lumen
 * License: MIT
 * GitHub Plugin URI: https://github.com/lumenlearning/candela-citation
 */

use Candela\Citation;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// -----------------------------------------------------------------------------
// Setup
// -----------------------------------------------------------------------------

if ( ! defined( 'CANDELA_CITATION_PLUGIN_DIR' ) ) {
	define( 'CANDELA_ANALYTICS_PLUGIN_DIR', ( is_link( WP_PLUGIN_DIR . '/candela-citation' ) ? trailingslashit( WP_PLUGIN_DIR . '/candela-citation' ) : trailingslashit( __DIR__ ) ) );
}

if ( ! defined( 'CANDELA_CITATION_FIELD' ) ) {
	define( 'CANDELA_CITATION_FIELD', '_candela_citation' );
}

if( ! defined( 'CANDELA_CITATION_DB_VERSION') ) {
	define( 'CANDELA_CITATION_DB_VERSION', '1.0' );
}

if( ! defined( 'CANDELA_CITATION_SEPARATOR') ) {
	define( 'CANDELA_CITATION_SEPARATOR', '. ' );
}

if ( ! defined( 'CANDELA_CITATION_DB_OPTION')) {
	define( 'CANDELA_CITATION_DB_OPTION', 'candela_citation_db_version' );
}

// -----------------------------------------------------------------------------
// Autoloader
// -----------------------------------------------------------------------------

require CANDELA_CITATION_PLUGIN_DIR . 'autoloader.php';

// Do our necessary plugin setup and add_action routines.
Citation::init();
