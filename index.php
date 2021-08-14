<?php

namespace Core;

error_reporting(E_ALL);
ini_set('display_errors', 'on');

// Connect to Main Model Class
require_once $_SERVER['DOCUMENT_ROOT']."/project/config/connection.php";

// Autoload
spl_autoload_register(function($class) {
    $separator = DIRECTORY_SEPARATOR;
    $filename = $_SERVER['DOCUMENT_ROOT'] . $separator . str_replace('\\', $separator, $class) . '.php';

    if(file_exists($filename)) {
        require($filename);
        
        if (class_exists($class, false)) {
            return true;
        } else {
            throw new \Exception("Класс <b>$class</b> не найден в файле <b>$filename</b><br>");
        }
    }
    else {
        throw new \Exception("Файл <b>$filename</b> не найден!!!");
    }
    
});

// Get list of routes
$routes = require $_SERVER['DOCUMENT_ROOT'] . '/project/config/routes.php';

// Get controller, action and array of params
$track = (new Router)->getTrack($routes, $_SERVER['REQUEST_URI']);

// Get layout, title, view and array of data 
$dispatcher = (new Dispatcher)->getPage($track);

// Send dispatcher object to View. It returns includes layout and view
echo (new View)->render($dispatcher);
