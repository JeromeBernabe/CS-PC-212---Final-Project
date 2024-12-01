<?php
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    
    $routes = [
        '/' => 'Controllers/home.php',
        '/login' => 'Controllers/login.php',
    ];

    if(array_key_exists($uri,$routes)){
        require $routes[$uri];
    }
?>