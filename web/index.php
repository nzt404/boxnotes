<?php
/**
 * Created by PhpStorm.
 * User: nzt404
 * Date: 13.10.18
 * Time: 0:55
 */

// Enable class autoloader
$loader = require dirname(__FILE__, 2) . '/vendor/autoload.php';

// Enable error message and Whoops
//ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

