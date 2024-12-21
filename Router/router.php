<?php
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    
    $routes = [
        '/' => 'Controllers/home.php',
        '/login' => 'Controllers/login.php',
        '/contact' => 'Controllers/contact.php',
        '/shop' => 'Controllers/shop.php',
        '/cart' => 'Controllers/cart.php',
        '/signup' => 'Controllers/signup.php',
        '/authadditem' => 'Controllers/authadditem.php',
        '/authlist' => 'Controllers/authlist.php',
        '/addquantity' => 'Controllers/addquantity.php'
    ];

    if(array_key_exists($uri,$routes)){
        require $routes[$uri];
    }

?>