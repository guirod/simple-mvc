<?php

use Guirod\SimpleMvc\Router;
use Guirod\SimpleMvc\Controllers\UserController;

const ROUTE_PREFIX = '/github_pocs/simple-mvc';

$router = new Router();

$router->addRoute(ROUTE_PREFIX . '/', UserController::class, 'index');
$router->addRoute(ROUTE_PREFIX . '/user', UserController::class, 'view');
