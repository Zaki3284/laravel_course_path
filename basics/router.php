<?php

require('functions.php');

$uri = str_replace(BASE_PATH, '', $_SERVER['REQUEST_URI']);

$routes = [
    '/'        => 'views/index.view.php',
    '/about'   => 'views/about.view.php',
    '/contact' => 'views/contact.view.php',
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
        abort();
    }


function abort($code = 404) {
    http_response_code($code);

    require "views/{$code}.php";

    die();
}

routeToController($uri, $routes);