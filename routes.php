<?php


// $router->register([
//   "" => "controllers/IndexController.php",
//   "about" => "controllers/AboutController.php",
//   "contact" => "controllers/ContactController.php",
//   "names"=> "controllers/add-name.controller.php",
// ]);


// $router->get("", "controllers/IndexController.php");
// $router->get("about", "controllers/AboutController.php");
// $router->get("contact", "controllers/ContactController.php");

// $router->post("names", "controllers/add-name.controller.php");




// laravel 7

// $router->get("", "PagesController@home");
// $router->get("about", "PagesController@about");
// $router->get("contact", "PagesController@contact");

// $router->get("update", "PagesController@update");


// $router->get("menu", "MenuController@showMenu");

// $router->post('update', 'PagesController@updateUser');
// $router->post("names", "PagesController@addUser");
// $router->get("delete", "PagesController@deleteUser");




// laravel 8
use controllers\PagesController;

$router->get('', [PagesController::class, "home"]);
$router->get('about', [PagesController::class, "about"]);
$router->get('contact', [PagesController::class, "contact"]);

$router->get('update', [PagesController::class, "update"]);

$router->get('menu', [PagesController::class, "menu"]);

$router->post('update', [PagesController::class, "updateUser"]);
$router->post('names', [PagesController::class, "addUser"]);
$router->get('delete', [PagesController::class, "deleteUser"]);


