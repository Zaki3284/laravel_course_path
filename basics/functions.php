<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

define('BASE_PATH', '/laravel_course_path/basics');

function baseUrl($path = '/')
{
    $basePath = rtrim(BASE_PATH, '/');

    if ($path === '/' || $path === '') {
        return "{$basePath}/";
    }

    return $basePath . '/' . ltrim($path, '/');
}

function urlIs($value) {
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri = str_replace(BASE_PATH, '', $uri);
    $uri = rtrim($uri, '/');
    if ($uri === '') {
        $uri = '/';
    }
    return $uri === $value;
}