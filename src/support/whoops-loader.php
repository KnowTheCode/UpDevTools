<?php
/**
 * Load up Whoops
 *
 * @package     KnowTheCode\UpDevTools\Support
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://KnowTheCode.io
 * @license     GPL-2.0+
 */
namespace KnowTheCode\UpDevTools\Support;

use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

$whoops     = new Run();
$error_page = new PrettyPageHandler();
$error_page->setEditor( 'sublime' );
$whoops->pushHandler( $error_page );
$whoops->register();
