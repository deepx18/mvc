<?php

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

echo 'URI: ' . str_replace('/mvc', '', $uri) . '<br>';
echo 'METHOD: ' . $method;
