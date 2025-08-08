<?php

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

// Parse the URI path and normalize
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$route = rtrim($uri, '/');
$route = $route === '' ? '/' : $route;

// Redirect '/' to '/Home'
if ($route === '/') {
    header("Location: /Home", true, 301); // Use 301 for permanent redirect
    exit();
}

// Route to appropriate controller
if (array_key_exists($route, $routes)) {
    require $routes[$route];
} else {
    abort(); // Your existing abort function handles 404
}
