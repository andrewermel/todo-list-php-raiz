<?php
require 'database.php';

$quantity = sql_anti_injection($_POST['quantity']);
$name = sql_anti_injection($_POST['name']);

if(!$name) {
    die("Não foi possível cadastras um ítem sem nome");
}

if(!$quantity){
  $query = "INSERT INTO lista (name) VALUES ('$name')";
}
else{
  $query = "INSERT INTO lista (quantity, name) VALUES ($quantity, '$name')";
}

$ponteiro = db_execute_query("SELECT * FROM lista WHERE name = '$name'");
$item = pg_fetch_assoc($ponteiro);

if(!$item) {
  db_execute_query($query);
  header('Location:  /');
}

die("Não foi possível cadastras um ítem com nome $name");
