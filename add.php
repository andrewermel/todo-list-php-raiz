<?php



$host='ec2-3-208-50-226.compute-1.amazonaws.com';
$port='5432';
$database='d7r0ukrhem4kv0';
$user='shqfnemscchnnh';
$pass='a3dc6f7ca7fc5c83f8ab3109d05c24fb3028d3ea663f7cd4947cb3212dc08485';


$conexao= pg_connect("host=$host port=$port dbname=$database user=$user password=$pass");
//$conexao = new PDO("pgsql:host=$host;port=$port;dbname=$database",$user,$pass);



$quantidade = $_POST['quantidade'];
$nomeItem = $_POST['nomeItem'];

echo 'ola, mundo!';
echo $quantidade;
echo $nomeItem;