<?php

class Database
{
  public static function connect(array $config)
  {
    
    try {
      return $pdo = new PDO(
        "{$config['dbtypeandserver']};dbname={$config['dbname']}",
        "{$config['username']}",
        "{$config['password']}"
      );
    } catch (PDOException $error) {
      echo $error->getMessage();
    }
  }
}