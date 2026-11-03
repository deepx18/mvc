<?php

class Router {

    public static $routes = [];

    static function get(string $uri, Closure $action) {
        array_push(self::$routes, [$uri, 'GET', $action]);
    }

    static function route(string $route) {

    }
}
