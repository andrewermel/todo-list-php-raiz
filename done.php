<?php
require 'database.php';

$id = $_GET['id'];

$ponteiro = db_execute_query("UPDATE lista SET done = TRUE WHERE id = $id");

header('Location: /');