<?php
define('BASE_PATH', __DIR__);

// Autoload Composer dependencies
require_once __DIR__ . '/vendor/autoload.php';

// Load routes
$routes = require_once __DIR__ . '/routes/routes.php';

// Get the requested URI path (e.g., "/test/view")
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// Optional: Remove trailing slash (e.g., "/test/view/" => "/test/view")
$uri = rtrim($uri, '/') ?: '/';

// Debug URI
// var_dump($uri);

// Route matching checkis if $uri is in $routes
if (isset($routes[$uri])) {
    
    [$controller, $method] = $routes[$uri];
    if (class_exists($controller)){
        $controller = new $controller;

        echo $controller->$method;
    }else {
        http_response_code(500);
        echo "Method {$method} not found in {$controller}";
    }

    // Check if method exists and call it statically
    // if (method_exists($controller, $method)) {
    //     $controller::$method();
    // } 
} else {
    http_response_code(404);
    echo "Page not found.";
}
