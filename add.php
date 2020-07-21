<?php
require 'database.php';

$quantity = verify_sql_injection($_POST['quantity']);
$name = verify_sql_injection($_POST['name']);

if(!$quantity){
  $query = "INSERT INTO lista (name) VALUES ('$name')";
}
else{
  $query = "INSERT INTO lista (quantity, name) VALUES ($quantity, '$name')";
}

$ponteiro = db_execute_query($query);

header('Location:  /');