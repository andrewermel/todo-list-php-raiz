<?php
require('./models/model-base.php');

function listaTodosItems(){
	return pg_query($GLOBALS['conexao'],"SELECT list.name,quantidade,list.id,done,users.name AS user_name FROM list INNER JOIN users ON users.id = list.criador_id");
}

function buscaUmItemPorNome($nomeItem){
	$ponteiro = pg_query($GLOBALS['conexao'],"SELECT name from list WHERE '$nomeItem'= name");
	$Item = pg_fetch_array($ponteiro);
	return $Item;
}

function addItem($quantidade, $nomeItem){
	return pg_query ($GLOBALS['conexao'],"INSERT INTO list (quantidade,name) VALUES ($quantidade,'$nomeItem')");
}

function deletarItemPorId($delete){
  return pg_query($GLOBALS['conexao'],"DELETE FROM list WHERE id= $delete");
}

function marcarComoConcluidoPorId($concluido){
	return pg_query($GLOBALS['conexao'],"UPDATE list SET done = True where id = $concluido");
}