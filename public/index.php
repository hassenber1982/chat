<?php

/**
 * Front controller
 *
 * PHP version 7.0
 */

/**
 * Composer
 */
spl_autoload_register(
    function ($class) {
        $load = dirname(__DIR__)  . "/" . str_replace('\\', '/', $class . '.php');
        require_once($load);
});

/**
 * Error and Exception handling
 */
error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');


/**
 * Routing
 */
$router = new Core\Router();

// Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('{controller}/{action}');
    
$router->dispatch($_SERVER['QUERY_STRING']);
