<?php
require "vendor/autoload.php";
require "core/bootup.php";

Router::load()
  ->direct(Request::uri(), $_SERVER["REQUEST_METHOD"]);