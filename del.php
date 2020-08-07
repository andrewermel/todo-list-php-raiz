<?php 

$host='ec2-54-160-120-28.compute-1.amazonaws.com';
$port='5432';
$database='db5relmq3c860s';
$user='rnrwrasadzshjd';
$pass='1328e0d0763daa678213de11c28f4f63266617b41448ca9c7023c92a936ce91f';


$conexao= pg_connect("host=$host port=$port dbname=$database user=$user password=$pass");

$delete = $_GET['id'];
$del_query = pg_query($conexao,"DELETE FROM list WHERE id= $delete");

header("location:index.php");





?>