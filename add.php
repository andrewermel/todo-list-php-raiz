<?php
$host = getenv('DB_HOST');
$port = getenv('DB_PORT');
$database = getenv('DB_NAME');
$user = getenv('DB_USER');
$password = getenv('DB_PASS');

$conexao = pg_connect("host=$host port=$port dbname=$database user=$user password=$password");

$name = $_POST['name'];
$quantity = $_POST['quantity'];

$ponteiro = pg_query($conexao, "INSERT INTO lista (name, quantity) VALUES ('$name', $quantity)");

header('location: /');

?>