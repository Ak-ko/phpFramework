<?php
namespace controllers;

use core\App;

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

  // for get
  public function update()
  {  
    $id = request('id');
    $user = App::get('query')->find('users', $id);
    view('update', [
      "user" => $user,
    ]);
  }

  public function addUser()
  {
    App::get('query')->insert([
      "name" => request('name'),
    ], "users");

    redirect("/");
  }

  public function deleteUser()
  {
    $id = request('id');
    App::get('query')->delete('users', $id);

    redirect("/");
  }

  // for post
  public function updateUser()
  {
    $id = request('id');
    $name = $_POST['updateUserName'];    
    App::get('query')->update('users', [
      "id" => $id,
      "name" => $name,
    ]);

    redirect("/");
  }  
}