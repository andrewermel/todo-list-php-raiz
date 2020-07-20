<?php
require 'database.php';

$id = $_GET['id'];
$mark = $_GET['mark'];

$ponteiro = db_execute_query("UPDATE lista SET done = $mark WHERE id = $id");

header('Location: /');