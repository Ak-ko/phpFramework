<?php

class QueryBuilder
{
  protected $db;
  public function __construct($db)
  {
    $this->db = $db;
  }

  public function selectAll(string $table)
  {
    $statement = $this->db->prepare("SELECT * FROM $table");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_OBJ);
  }

  public function find($table, $id)
  {
    $statement = $this->db->prepare("SELECT * FROM $table WHERE id = $id");
    $statement->execute();    

    return $statement->fetch(PDO::FETCH_OBJ);
  }

  public function insert($dataArr, $table)
  {
    // INSERT INTO table (col) VALUES (?);
    $getArrKeys = array_keys($dataArr);
    $cols = implode(",", $getArrKeys);
    $questionMarks = "";

    foreach ($getArrKeys as $key) 
    {
      $questionMarks .= "?,";  
    }

    $questionMarks = rtrim($questionMarks, ",");
    $statement = $this->db->prepare("INSERT INTO $table ($cols) VALUES ($questionMarks)");

    $getArrValues = array_values($dataArr);
    $statement->execute($getArrValues);

    return $statement;
  }

  public function update($table, $data)
  {

    // UPDATE table SET col = value WHERE condition;
    $name = $data['name'];
    $id = (int) $data['id'];    
    $statement = $this->db->prepare("UPDATE $table SET name = '$name' WHERE id = $id");    
    $statement->execute();    

    return $statement;
  }

  public function delete($table, $id)
  {
    // DELETE FROM table_name WHERE condition;
    $statement = $this->db->prepare("DELETE FROM $table WHERE id = $id");
    $statement->execute();
    
    return $statement;
  }

  
}