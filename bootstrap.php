<?php

use Illuminate\Container\Container;
use Legato\Framework\Request;
use Legato\Framework\Routing\Route;
use Legato\Framework\Routing\RouteDispatcher;
use Symfony\Component\HttpFoundation\Response;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

define('BASE_PATH', realpath(__DIR__.'/').DIRECTORY_SEPARATOR);

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/routes/routes.php';

$dot_env = new Dotenv\Dotenv(BASE_PATH);
$dot_env->load();

$whoops = new Run();
$container = Container::getInstance();
$request = Request::createFromGlobals();

/*
 * Initialize database connection
 */
new \Legato\Framework\Connection();

if (getenv('APP_ENV') !== 'production') {
    $whoops->pushHandler(
        new PrettyPageHandler()
    );
} else {
    $whoops->pushHandler(
        function () {
            (new Response())->setContent('An internal server error has occurred.')
                ->setStatusCode(Response::HTTP_INTERNAL_SERVER_ERROR)->send();
        }
    );
}
$whoops->register();

$route = Route::all();
new RouteDispatcher($request, $container, $route);
