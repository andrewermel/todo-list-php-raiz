<?php
require 'database.php';

$quantity = $_POST['quantity'];
$name = $_POST['name'];

if(!$quantity){
  $query = "INSERT INTO lista (name) VALUES ('$name')";
}
else{
  $query = "INSERT INTO lista (quantity, name) VALUES ($quantity, '$name')";
}

$ponteiro = db_execute_query($query);

header('Location:  /');