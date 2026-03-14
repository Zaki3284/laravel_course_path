<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    'laravel_course_path/basics/' => 'controllers/index.php',
    'laravel_course_path/basics/about' => 'controllers/about.php',
    'laravel_course_path/basics/contact' => 'controllers/contact.php',
];

function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404) {
    http_response_code($code);

    require "views/{$code}.php";

    die();
}

routeToController($uri, $routes);