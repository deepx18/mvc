<?php

namespace App\Modules;

function display_array(array $array) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

class Router {

    public static $routes = [];

    static function get(string $uri, $action) {
        self::$routes[$uri] = ['GET', $action];
    }

    static function route(string $route) {
        self::$routes['/'] = ['GET', static function () { return 'The / route.<br>'; }];
        echo self::$routes[$route][1]();

        // $uris = explode('/', $route);
        // switch (count($uris)) {
        //     case 1: {

        //     } break;
        // }
    }
}
