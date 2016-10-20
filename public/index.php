<?php

date_default_timezone_set('UTC');

require __DIR__ . '/../bootstrap/start.php';

use Whoops\Run;
use App\System\Config\Config;
use Whoops\Handler\PrettyPageHandler;
use Symfony\Component\HttpFoundation\Request;

$config = new Config();
// Using whoops for error handling
if($config->settings->debug == true) {
    $whoops = new Run;
    // Pretty page is better
    $whoops->pushHandler(new PrettyPageHandler);
    $whoops->register();
}

// Get access to global stuff
$request = Request::createFromGlobals();

// Get the routes file
require __DIR__ . '/../app/routes.php';
