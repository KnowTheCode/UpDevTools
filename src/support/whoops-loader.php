<?php
/**
 * Load up Whoops
 *
 * @package     UpTechLabs\UpDevTools\Support
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://uptechlabs.io
 * @license     GPL-2.0+
 */
namespace UpTechLabs\UpDevTools\Support;

use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

$whoops     = new Run();
$error_page = new PrettyPageHandler();
$error_page->setEditor( 'sublime' );
$whoops->pushHandler( $error_page );
$whoops->register();
