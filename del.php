<?php
require 'database.php';

$id = $_GET['id'];

$ponteiro = db_execute_query("DELETE FROM lista WHERE id = $id");

header('Location: /');