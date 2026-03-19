<?php

require('functions.php');

$uri = str_replace(BASE_PATH, '', $_SERVER['REQUEST_URI']);

$routes = [
    '/laravel_course_path/basics'        => 'views/index.view.php',
    '/laravel_course_path/basics/about'   => 'views/about.view.php',
    '/laravel_course_path/basics/contact' => 'views/contact.view.php',
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
    exit;  // ✅ Ajoute exit() pour arrêter
} else {
    abort();
}

function abort($code = 404) {
    http_response_code($code);
    require "views/{$code}.php";
    die();
}