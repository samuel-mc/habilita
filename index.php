<?php

require 'flight/Flight.php';

# Debug errors
Flight::set('flight.log_errors', true);
# Root route
define('__ROOT__', "http://localhost/habilita");


Flight::route('/', function () {
    Flight::render('index.php', array('title' => 'Home'));
});

Flight::route('/about', function () {
    Flight::render('about.php', array('title' => 'About'));
});

Flight::route('/portafolio', function () {
    Flight::render('proyectos.php', array('title' => 'Proyectos'));
});

Flight::route('/registro', function () {
    Flight::render('registro.php', array('title' => 'Registro'));
});

Flight::route('/login', function () {
    Flight::render('login.php', array('title' => 'Login'));
});
#404
Flight::map('notFound', function () {
    // Display custom 404 page
    Flight::render('404.php');
});

Flight::start();
