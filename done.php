<?php
require 'database.php';

$id = sql_anti_injection($_GET['id']);
$mark = sql_anti_injection($_GET['mark']);

$ponteiro = db_execute_query("UPDATE lista SET done = $mark WHERE id = $id");

header('Location: /');