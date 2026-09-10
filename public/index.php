<?php

define('BASE_URL' , '/teachline/public');
$router = require_once __DIR__ . '/../bootstrap.php';
$path = parse_url($_SERVER['REQUEST_URI'] , PHP_URL_PATH);
$basePath = '/teachline/public';
if (str_starts_with($path , $basePath)) {
    $path = substr($path , strlen($basePath));
}
$path = $path ?: '/';
$router->dispatch($_SERVER['REQUEST_METHOD'] , $path);