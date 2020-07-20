<?php
require 'database.php';

$ponteiro = db_execute_query("select id, name, quantity, done from lista ORDER BY id DESC");

$array_com_os_valores = pg_fetch_all($ponteiro);
?>

<html>
<head>
    <title>Do To list do Andrew</title>
    <link rel="stylesheet" href="style.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div id="container">
    <h1>Lista de compras</h1>
    <ul>
        <?php foreach ($array_com_os_valores as $item): ?>
            <li>
                <div class="<?= $item['done'] === 't' ? 'concluido' : 'nao-concluido' ?>">
                    <a href="done.php?id=<?= $item['id'] ?>&mark=<?= $item['done'] === 't' ? 'FALSE' : 'TRUE'?>">
                        <?= $item['quantity'] ?> - <?= $item['name'] ?>
                    </a>
                </div>
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

