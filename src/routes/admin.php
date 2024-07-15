<?php
// Home
$router->map('GET', '/admin', 'pages/admin_index', 'homeAdmin');

// Movies
//$router->map('GET|POST', '/admin/movies/add', 'movies/admin_add', 'addMovie');
$router->map('GET', '/admin/movies', 'movies/admin_index', 'indexMovie');
$router->map('GET', '/admin/movies/delete/[i:id]', 'movies/admin_delete', 'deleteMovie');
$router->map('GET|POST', '/admin/movies/edit/[i:id]', 'movies/admin_edit', 'updateMovie');
$router->map('GET|POST', '/admin/movies/edit', 'movies/admin_edit', 'addMovie');
