<?php
session_start();

if(!isset($_SESSION['login'])){
	header('location: /');
}

$nomeUsuario = $_SESSION['login'];

require('./models/list-model.php');

$ponteiro = listaTodosItems();

require('./views/lista-view.php');
