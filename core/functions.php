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