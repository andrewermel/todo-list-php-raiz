<?php

$id = $_GET['id'];

$host = 'ec2-34-233-226-84.compute-1.amazonaws.com';
$port = '5432';
$database = 'd7r0ukrhem4kv0';
$user = 'shqfnemscchnnh';
$password = 'a3dc6f7ca7fc5c83f8ab3109d05c24fb3028d3ea663f7cd4947cb3212dc08485';

$conexao = pg_connect("host=$host port=$port dbname=$database user=$user password=$password");

$ponteiro = pg_query($conexao, "DELETE FROM lista WHERE id = $id");

header('Location: /');