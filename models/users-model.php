<?php
require('./models/model-base.php');

function buscaUsuarioPorLoginESenha($login, $password){
	$ponteiro = pg_query($GLOBALS['conexao'], "SELECT * FROM users WHERE login = '$login' AND password = '$password'");
	return pg_fetch_array($ponteiro);
}