<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

define('BASE_PATH', '/laravel_course_path/basics');

function urlIs($value) {
    $uri = str_replace(BASE_PATH, '', $_SERVER['REQUEST_URI']);
    return $uri === $value;
}