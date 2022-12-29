<?php

class PagesController
{
  public function home()
  {
    $users = App::get('query')->selectAll("users");

    view("index", [
      "users" => $users,
    ]);
  }

  public function about()
  {

    $students = App::get("query")->selectAll('persons');

    view("about", [
      "students"=>$students,
    ]);
  }

  public function contact()
  {    
    view("contact");
  }

  public function addUser()
  {
    App::get('query')->insert([
      "name" => $_POST['name'],
    ], "users");

    header("Location: /");
  }

  public function deleteUser()
  {
    $id = $_GET['id'];
    App::get('query')->delete('users', $id);

    header("Location: /");
  }

  // for post
  public function updateUser()
  {
    $id = $_GET['id'];
    $name = $_POST['updateUserName'];    
    App::get('query')->update('users', [
      "id" => $id,
      "name" => $name,
    ]);

    header('Location: /');
  }

  // for get
  public function update()
  {  
    $id = $_GET['id'];
    $user = App::get('query')->find('users', $id);
    view('update', [
      "user" => $user,
    ]);
  }
}