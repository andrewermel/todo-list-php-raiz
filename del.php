<?php
require 'database.php';

$id = sql_anti_injection($_GET['id']);

$ponteiro = db_execute_query("DELETE FROM lista WHERE id = $id");

header('Location: /');