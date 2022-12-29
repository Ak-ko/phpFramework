<?php
require "core/functions.php";

// require "core/Router.php";
// require "core/Request.php";
// require "database/Database.php";
// require "database/QueryBuilder.php";

App::bind("config", require "config.php");
App::get('config');

App::bind('query', new QueryBuilder(
  Database::connect(
    App::get('config')['database']
    )
  )
);
