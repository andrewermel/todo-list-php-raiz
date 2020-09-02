<?php
session_start();

if(isset($_SESSION['login'])){
	header('location: /lista.php');
}

$mensagem = '';
if(isset($_GET['error'])){
	if($_GET['error'] == 'login_cagado'){
		$mensagem = 'Login ou senha inválidos!';
	}
}

require('./views/login-view.php');