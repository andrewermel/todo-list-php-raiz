<?php
session_start();

if(!isset($_SESSION['login'])){
	header('location: /');
}

$nomeUsuario = $_SESSION['login'];

require('./models/list-model.php');

$ponteiro = listaTodosItems();

while($Item = pg_fetch_assoc($ponteiro)){
	$Item["class"] = ($Item["done"]=="t") ? "riscado" : "";
	$items[] = $Item;
}

require('./views/lista-view.php');







