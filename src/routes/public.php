<?php
$router->addMatchTypes(['slug' => '[0-9a-z\-]++']);

// Users
$router->map('GET|POST', '/login', 'users/login', 'login');
$router->map('GET', '/logout', 'users/logout', 'logout');
$router->map('GET', '/', 'movies/index', 'home');
$router->map('GET', '/cat/[slug:slug]', 'movies/index', 'moviesCat');
