<?php
/**
 * Admin functions to change the look of the admin bar when this plugin
 * is activated, i.e. to differentiate that we are in development mode.
 *
 * @package     KnowTheCode\UpDevTools\Admin
 * @since       1.0.3
 * @author      hellofromTonya
 * @link        https://KnowTheCode.io
 * @license     GNU-2.0+
 */

namespace KnowTheCode\UpDevTools\Admin;

use function KnowTheCode\UpDevTools\_get_plugin_root_dir;

add_filter( 'get_user_option_admin_color', __NAMESPACE__ . '\set_local_development_admin_color_scheme', 5 );
/**
 * Force different admin color scheme when this plugin is active.
 *
 * @since 1.0.3
 *
 * @return string
 */
function set_local_development_admin_color_scheme() {
	return 'coffee';
}

add_action( 'admin_bar_menu', __NAMESPACE__ . '\add_admin_bar_notice', 9999 );
/**
 * Add an admin bar notice to alert user that they are in local development
 * and this plugin is activated.
 *
 * @since 1.0.3
 *
 * @return void
 */
function add_admin_bar_notice() {
	if ( ! is_admin_bar_showing() ) {
		return;
	}
	global $wp_admin_bar;

	$message = get_admin_bar_config( 'message' );

	$admin_notice = [
		'parent' => 'top-secondary',
		'id'     => 'environment-notice',
		'title'  => sprintf( '<span class="adminbar--environment-notice">%s</span>', $message ),
	];

	$wp_admin_bar->add_menu( $admin_notice );
}

add_action( 'admin_head', __NAMESPACE__ . '\render_admin_bar_css', 9999 );
add_action( 'wp_head', __NAMESPACE__ . '\render_admin_bar_css', 9999 );
/**
 * Render the admin bar CSS.
 *
 * @since 1.0.3
 *
 * @return void
 */
function render_admin_bar_css() {
	if ( ! is_admin_bar_showing() ) {
		return;
	}

	ob_start();

	include _get_plugin_root_dir() . '/assets/css/admin-bar.php';

	$css_pattern = ob_get_clean();

	vprintf( $css_pattern, get_admin_bar_config( 'colors' ) );
}

/**
 * Get the admin bar's runtime configuration parameter(s).
 *
 * @since 1.0.3
 *
 * @param string $parameter
 *
 * @return array|mixed
 */
function get_admin_bar_config( $parameter = '' ) {
	static $config = [];

	if ( ! $config ) {
		$config = include _get_plugin_root_dir() . '/config/admin-bar.php';
	}

	if ( $parameter && isset( $config[ $parameter ] ) ) {
		return $config[ $parameter ];
	}

	return $config;
}
