<?php

namespace App\Modules;

use Closure;

function display_array(array $array) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

class Router {

    public static $routes = [];

    static function init() {
        self::$routes['/'] = ['GET', static function () { return 'The / route.<br>'; }];
    }

    static function get(string $uri, Closure $action) {
        self::$routes[$uri] = ['GET', $action];
    }

    static function post(string $_uri, Closure $_action)    {}
    static function put(string $_uri, Closure $_action)     {}
    static function delete(string $_uri, Closure $_action)  {}
    static function patch(string $_uri, Closure $_action)   {}
    static function head(string $_uri, Closure $_action)    {}
    static function options(string $_uri, Closure $_action) {}


    static function route(string $route) {
        echo self::$routes[$route][1]();

        // $uris = explode('/', $route);
        // switch (count($uris)) {
        //     case 1: {

        //     } break;
        // }
    }
}
