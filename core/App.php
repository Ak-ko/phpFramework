<?php
namespace core;
class App
{
  protected static $data=[
    // 'config' => 'data',
  ];

  public static function bind($key, $value)
  {
    static::$data[$key] = $value;
  }

  public static function get($key)
  {
    return self::$data[$key];
  }
}