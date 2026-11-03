<?php
require_once 'modules/Router.php';


use App\Modules\Router;

$route = str_replace('/mvc', '', $_SERVER['REQUEST_URI']);

Router::get('/users', function () {
    return '<h1>The /users route.</h1>';
});


Router::route($route);
