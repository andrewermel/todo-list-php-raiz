<?php 

require('./models/list-model.php');

$delete = $_GET['id'];

$del_query = deletarItemPorId($delete);

header("location: lista.php");