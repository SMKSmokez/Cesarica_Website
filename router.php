<?php
// Start output buffering (optional but helps prevent premature output)
ob_start();

// Define available routes
$routes = [
    '/Home' => 'Controllers/index.php',
    '/Cuisine' => 'Controllers/food_showcase.php',
    '/Menu' => 'Controllers/menu.php',
    '/Wine' => 'Controllers/wine_list.php',
    '/Drinks' => 'Controllers/drink_list.php',
    '/Cigars' => 'Controllers/cigar_list.php',
    '/Events' => 'Controllers/events.php',
];

// Parse and normalize URI path
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$route = rtrim($uri, '/');
$route = $route === '' ? '/' : $route;

// Debug - remove after testing
// var_dump($route); exit();

if ($route === '/') {
    header("Location: /Home", true, 301);
    exit();
}

// Route to controller if exists
if (array_key_exists($route, $routes)) {
    require $routes[$route];
} else {
    abort(); // your 404 handler
}

// Flush output buffer if used
ob_end_flush();
