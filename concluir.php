<?php
$host = getenv('DB_HOST');
$port = getenv('DB_PORT');
$database = getenv('DB_NAME');
$user = getenv('DB_USER');
$password = getenv('DB_PASS');

$conexao = pg_connect("host=$host port=$port dbname=$database user=$user password=$password");

$id = $_GET['id'];

$ponteiro = pg_query($conexao, "SELECT done FROM lista  WHERE id = $id");

$item = pg_fetch_assoc($ponteiro);

$done = $item['done'] == 't' ? 'FALSE' : 'TRUE';

pg_query($conexao, "UPDATE lista SET done = $done WHERE id = $id");

header('location: /');

?>