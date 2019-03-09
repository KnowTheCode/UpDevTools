<?php
/**
 * UpDevTools WordPress Plugin
 *
 * @package     KnowTheCode\UpDevTools
 * @author      hellofromTonya
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: UpDevTools WordPress Plugin
 * Plugin URI:  https://github.com/KnowTheCode/UpDevTools
 * Description: An integrated suite of development tools for your WordPress development environment, all wrapped up in one handy dandy plugin. You get Kint, Whoops, Mockery, PHPUnit, Carbon, and Monolog.  Want more? Come contribute.
 * Version:     1.2.0
 * Author:      hellofromTonya
 * Author URI:  https://KnowTheCode.io
 * Text Domain: updevtools
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

namespace KnowTheCode\UpDevTools;

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Cheatin&#8217; uh?' );
}

/**
 * Gets the plugin's root directory.
 *
 * @since 1.2.0
 *
 * @return string
 */
function _get_plugin_root_dir() {
	return __DIR__;
}

require_once __DIR__ . '/vendor/autoload.php';
