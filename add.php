<?php

$host='ec2-54-160-120-28.compute-1.amazonaws.com';
$port='5432';
$database='db5relmq3c860s';
$user='rnrwrasadzshjd';
$pass='1328e0d0763daa678213de11c28f4f63266617b41448ca9c7023c92a936ce91f';


$conexao= pg_connect("host=$host port=$port dbname=$database user=$user password=$pass");


$quantidade = $_POST['quantidade'];
$nomeItem = $_POST['nomeItem'];

$ponteiro = pg_query($conexao,"SELECT name from list WHERE '$nomeItem'= name");
$Item = pg_fetch_array($ponteiro);
// Se NÃO existir uma linha no banco com o mesmo nome recebido $Item vem vazio linha 16
// Se existir vem um array contendo $Item['name'] linha 17
if($Item ){
    echo 'Item já existe na lista';


}elseif($quantidade < 0){
    echo 'quantidade invalida digite um numero positivo!!';
    //echo '<a href="/">voltar</a>';
    header("location:index.php?error=quantidade_negativa");
}
else {
    $resultQuery = pg_query ($conexao,"INSERT INTO list (quantidade,name) VALUES ($quantidade,'$nomeItem')");
    header("location:index.php");
};