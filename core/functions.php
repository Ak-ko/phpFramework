<?php

function dd($arr)
{
  echo "<pre>";
  return die(var_dump($arr));
}

function view($name, $data=[])
{
  extract($data); // gives the $user as a variable  
  return require "views/$name.view.php";
}

function redirect($uri)
{
  header("Location: $uri");
}

function request($data)
{
  if($_SERVER['REQUEST_METHOD'] === 'GET')
  {
    return $_GET[$data];
  }
  
  if($_SERVER['REQUEST_METHOD'] === 'POST')
  {
    return $_POST[$data];
  }
}