<?php

/**
 * Description of what this module (or file) is doing.
 * php version 8.3.2
 *
 * @category Oi
 * @package  Teste
 * @author   Alan Lemos <amdlemos@protonmail.com>
 * @license  http://asdf.com MIT
 * @file
 * @link     http://localhost.com
 */

/**
 * Implements hook_help().
 */
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    // require $maintenance;
    include $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
(require_once __DIR__.'/../bootstrap/app.php')
    ->handleRequest(Request::capture());
