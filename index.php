<?php
require_once 'modules/Router.php';

$route = str_replace('/mvc', '', $_SERVER['REQUEST_URI']);

require_once 'routes/config.php';

use App\Modules\Router;

Router::init();
Router::route($route);
