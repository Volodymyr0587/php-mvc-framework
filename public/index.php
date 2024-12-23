<?php

use Volodymyr\MvcFramework\Http\Kernel;
use Volodymyr\MvcFramework\Http\Request;
use Volodymyr\MvcFramework\Http\Response;

define('BASE_PATH', dirname(__DIR__));

require_once BASE_PATH . '/vendor/autoload.php';

$request = Request::create();

$kernel = new Kernel();

$response = $kernel->handle($request);

$response->send();