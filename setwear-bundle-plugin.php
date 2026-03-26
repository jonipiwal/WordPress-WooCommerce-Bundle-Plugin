<?php
/**
 * Plugin Name:  WooCommerce Bundle
 * Plugin URI:   https://softbourne.com
 * Description:  Bundle Product functionality for WooCommerce — professional repeater builder in admin, frontend display via [wc_bundle] shortcode, order tracking with size/color selections.
 * Version:      3.6.0
 * Author:       Softbourne Technologies
 * Author URI:   https://softbourne.com
 * License:      GPL-2.0+
 * Text Domain:  wc-bundle
 * Requires at least: 5.8
 * Requires PHP: 7.4
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

define( 'SBP_VERSION', '3.6.0' );
define( 'SBP_PATH',    plugin_dir_path( __FILE__ ) );
define( 'SBP_URL',     plugin_dir_url( __FILE__ ) );

require_once SBP_PATH . 'includes/class-sbp-admin.php';
require_once SBP_PATH . 'includes/class-sbp-frontend.php';
require_once SBP_PATH . 'includes/class-sbp-post-type.php';

function sbp_init() {
	new SBP_Admin();
	new SBP_Frontend();
	new SBP_Post_Type();
}
add_action( 'plugins_loaded', 'sbp_init' );
