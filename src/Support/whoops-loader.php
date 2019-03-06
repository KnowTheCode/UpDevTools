<?php
/**
 * Load up Whoops.
 *
 * @package     KnowTheCode\UpDevTools\Support
 * @since       1.2.0
 * @author      hellofromTonya
 * @link        https://KnowTheCode.io
 * @license     GPL-2.0+
 */

namespace KnowTheCode\UpDevTools\Support;

use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

/**
 * Setup the Whoops container.
 *
 * @since 1.1.0
 */
function setup_whoops() {
	$whoops = new Run();
	$whoops->pushHandler( new PrettyPageHandler );
	$whoops->register();
}

setup_whoops();
