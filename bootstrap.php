<?php
/**
 * UpDevTools WordPress Plugin
 *
 * @package     UpTechLabs\UpDevTools
 * @author      hellofromTonya
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: UpDevTools WordPress Plugin
 * Plugin URI:  https://gitlab.com/uptechlabs/updevtools
 * Description: An integrated suite of development tools for your WordPress development environment, all wrapped up in one handy dandy plugin. You get Kint, Whoops, Mockery, PHPUnit, Carbon, and Monolog.  Want more? Come contribute.
 * Version:     1.0.0
 * Author:      hellofromTonya
 * Author URI:  https://UpTechLabs.io
 * Text Domain: updevtools
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

namespace UpTechLabs\UpDevTools;

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Cheatin&#8217; uh?' );
}

/**
 * Setup the plugin's constants.
 *
 * @since 1.0.0
 *
 * @return void
 */
function init_constants() {
	$plugin_url = plugin_dir_url( __FILE__ );
	if ( is_ssl() ) {
		$plugin_url = str_replace( 'http://', 'https://', $plugin_url );
	}

	define( 'UPDEVTOOLS_URL', $plugin_url );
	define( 'UPDEVTOOLS_DIR', plugin_dir_path( __DIR__ ) );
}

/**
 * Launch the plugin
 *
 * @since 1.0.0
 *
 * @return void
 */
function launch() {
	init_constants();

	require_once( __DIR__ . '/assets/vendor/autoload.php' );
}

launch();
