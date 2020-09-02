<?php 

require('./models/list-model.php');

$concluido =$_GET['id'];

$marcaDone = marcarComoConcluidoPorId($concluido);

header("location: lista.php");