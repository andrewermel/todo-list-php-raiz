<?php
$host = getenv('DB_HOST');
$port = getenv('DB_PORT');
$database = getenv('DB_NAME');
$user = getenv('DB_USER');
$password = getenv('DB_PASS');

$conexao = pg_connect("host=$host port=$port dbname=$database user=$user password=$password");

$id = $_GET['id'];

$ponteiro = pg_query($conexao, "DELETE FROM lista WHERE id = $id");

header('Location: /');