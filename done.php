<?php
require 'database.php';

$id = verify_sql_injection($_GET['id']);
$mark = verify_sql_injection($_GET['mark']);


$ponteiro = db_execute_query("UPDATE lista SET done = $mark WHERE id = $id");

header('Location: /');