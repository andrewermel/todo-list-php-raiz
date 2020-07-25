<?php



$host='ec2-34-225-162-157.compute-1.amazonaws.com';
$port='5432';
$database='dffirnq6pc5iim';
$user='bbmhndayvriejv';
$pass='0eb27693698aa48ed1de42b09c88d0243774cd52d22020c4af05d5163bd98f32';


$conexao= pg_connect("host=$host port=$port dbname=$database user=$user password=$pass");
//$conexao = new PDO("pgsql:host=$host;port=$port;dbname=$database",$user,$pass);



$quantidade = $_POST['quantidade'];
$nomeItem = $_POST['nomeItem'];

echo 'ola, mundo!';
echo $quantidade;
echo $nomeItem;