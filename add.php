<?php

$quantidade = $_POST['quantidade'];
$nomeItem = $_POST['nomeItem'];

require('./models/list-model.php');

$Item = buscaUmItemPorNome($nomeItem);

if($Item){
    echo 'Item já existe na lista';
}
elseif($quantidade < 0){
    echo 'quantidade invalida digite um numero positivo!!';
    header("location: lista.php?error=quantidade_negativa");
}
else {
    $resultQuery = addItem($quantidade, $nomeItem);
    header("location: /");
};