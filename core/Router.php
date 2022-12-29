<?php

class Router
{
  protected $routes = [
    "GET" => [
      // 'about' => 'PagesController  @home';
    ],
    "POST" => [],
  ];
  public function register(array $routes)
  {
    $this->routes = $routes;
  }

  public static function load()
  {
    $router = new Router;
    require "routes.php";
    return $router;
  }

  public function get($uri, $controller)
  {
    $this->routes['GET'][$uri] = $controller;
    return $this;
  }

  public function post($uri, $controller)
  {
    $this->routes['POST'][$uri] = $controller;
    return $this;
  }

  public function data(Array $dataArr)
  {
    dd($dataArr);
    return $dataArr;
  }

  public function direct($uri, $method)
  {
    if (array_key_exists($uri, $this->routes[$method])) {
      $desire = explode("@", $this->routes[$method][$uri]);      
      // return $this->routes[$method][$uri]; // controllers/... is returned here.
      $this->goTo($desire[0], $desire[1]);
    }
    else
    {
      die("404 page");
    }
  }

  public function goTo($class, $method)
  {
    $class = new $class;
    return $class->$method();
  }
}