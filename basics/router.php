<?php

require_once('functions.php');

// Normalize the URI by removing the base path and query string
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = str_replace(BASE_PATH, '', $uri);
$uri = rtrim($uri, '/');
if ($uri === '') {
    $uri = '/';
}

$routes = [
    '/'       => 'controllers/index.php',
    '/about'  => 'controllers/about.php',
    '/contact'=> 'controllers/contact.php',
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
    exit;
} else {
    abort();
}

function abort($code = 404) {
    http_response_code($code);
    require "views/{$code}.php";
    die();
}