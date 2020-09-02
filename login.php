<?php
session_start();

require('./models/users-model.php');

$login = $_POST['login'];
$password = $_POST['password'];

$user = buscaUsuarioPorLoginESenha($login, $password);

if($user){
	$_SESSION['login'] = $login;
	header('Location: /lista.php');
}
else {
	header('Location: /?error=login_cagado');
}