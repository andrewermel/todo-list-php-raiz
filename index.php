<?php
$host = getenv('DB_HOST');
$port = getenv('DB_PORT');
$database = getenv('DB_NAME');
$user = getenv('DB_USER');
$password = getenv('DB_PASS');

$conexao = pg_connect("host=$host port=$port dbname=$database user=$user password=$password");

$ponteiro = pg_query($conexao, "select name, quantity from lista ORDER BY id DESC");

$array_com_os_valores = pg_fetch_all($ponteiro);
?>

<html>
<head>
    <title>Do To list do Andrew</title>
    <style>
        body {
            margin: 0;
            font-family: Arial;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        h1 {
            background: #999;
            padding: 20px;
        }

        ul {
            padding: 0;
            list-style: none;
        }

        li {
            display: flex;
            padding: 10px;
            border-bottom: 1px solid #666;
            justify-content: space-between;
        }

        li:hover {
            background-color: #FFD;
        }

        #lista {
            max-width: 400px;
        }
        li a{
            display: inline-block;
            text-align: center;
            color: red;
            width: 18px;
            text-decoration: none;
        }
        li a:hover{
            background: rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
<div id="lista">
    <h1>Lista de compras</h1>
    <ul>
        <?php foreach ($array_com_os_valores as $item): ?>
            <li>
                <span><?= $item['quantity'] ?> - <?= $item['name'] ?></span>
                <a href="#">X</a>
            </li>
        <?php endforeach ?>
    </ul>
</div>
</body>
</html>

