<?php
require 'database.php';

$ponteiro = db_execute_query("select id, name, quantity from lista ORDER BY id DESC");

$array_com_os_valores = pg_fetch_all($ponteiro);
?>

<html>
<head>
    <title>Do To list do Andrew</title>
    <style>
        body {
            margin: 0;
            background-color: #999;
            font-family: Arial, sans-serif;
        }

        #container {
            max-width: 400px;
            border: 1px solid black;
            margin: 0 auto;
            position: relative;
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: stretch;
        }

        h1 {
            background: #666;
            color: white;
            margin: 0;
            padding: 10px;
        }

        ul {
            list-style: none;
            padding-left: 10px;
            margin: 0;
            overflow: scroll;
            flex-grow: 1;
        }

        li {
            padding: 10px 0;
            border-bottom: 1px solid #888;
            display: flex;
            justify-content: space-between;
        }

        li > a {
            margin-right: 10px;
            display: inline-block;
            color: #ca0909;
            text-decoration: none;
            padding: 0 3px;
            border-radius: 12px;
        }

        li > a:hover {
            background-color: #777;
        }

        form {
            background: #777;
            margin: 0;
            width: calc(100%);
            border-top: 1px solid;
        }

        form > * {
            display: block;
            padding: 10px;
        }

        form input {
            width: calc(100% - 20px);
            margin: 0 10px;
        }

        form button {
            width: calc(100% - 20px);
            background-color: #00c5ff;
            color: #0f005f;
            border: none;
            margin: 10px;
            border-radius: 100px;
        }

        form button:hover {
            background-color: #00749b;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div id="container">
    <h1>Lista de compras</h1>
    <ul>
        <?php foreach ($array_com_os_valores as $item): ?>
            <li>
                <div><?= $item['quantity'] ?> - <?= $item['name'] ?></div>
                <a href="del.php?id=<?= $item['id'] ?>">X</a>
            </li>
        <?php endforeach ?>
    </ul>
    <form action="add.php" method="post">
        <label for="quantity">Quantidade:</label>
        <input id="quantity" type="number" name="quantity"/>
        <label for="name">Nome:</label>
        <input id="name" type="text" name="name"/>
        <button>Enviar</button>
    </form>
</div>
</body>
</html>

