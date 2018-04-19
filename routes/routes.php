<?php

$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $router){
    $router->addRoute('GET', '/', 'App\Controllers\IndexController@show');
    //add routes here
});

return $dispatcher;