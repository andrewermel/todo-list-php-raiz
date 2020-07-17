<?php
$host = 'ec2-34-233-226-84.compute-1.amazonaws.com';
$port = '5432';
$database = 'd7r0ukrhem4kv0';
$user = 'shqfnemscchnnh';
$password = 'a3dc6f7ca7fc5c83f8ab3109d05c24fb3028d3ea663f7cd4947cb3212dc08485';

$conexao = pg_connect("host=$host port=$port dbname=$database user=$user password=$password");

$ponteiro = pg_query($conexao, "select id, name, quantity from lista ORDER BY id DESC");

$array_com_os_valores = pg_fetch_all($ponteiro);
?>

<html>
<head>
	<title>Do To list do Andrew</title>
    <style>
        body{
            margin: 0;
            background-color: #999;
            font-family: Arial, sans-serif;
        }
        #container{
            width: 360px;
            border: 1px solid black;
            margin: 0 auto;
        }
        h1{
            background: #666;
            color: white;
            margin: 0;
            padding: 10px;
        }
        ul{
            list-style: none;
            padding-left: 10px;
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
        form > * {
            display: block;
            padding: 10px;
        }
        form input {
            width: calc(100% - 20px);
            margin: 0 10px;
        }

        form button{
            width: calc(100% - 20px);
            margin-left: 10px;
            background-color: #00c5ff;
            color: #0f005f;
            border: none;
            margin-top: 10px;
            border-radius: 100px;
        }
        form button:hover{
            background-color: #00749b;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div id="container">
        <h1>Lista de compras</h1>
        <ul>
            <?php foreach($array_com_os_valores as $item): ?>
                <li>
                    <div><?= $item['quantity']?> - <?= $item['name']?></div>
                    <a href="del.php?id=<?= $item['id']?>">X</a>
                </li>
            <?php endforeach ?>
        </ul>
        <form action="add.php" method="post">
            <label for="quantity">Quantidade:</label>
            <input id="quantity" type="number" name="quantity" />
            <label for="name">Nome:</label>
            <input id="name" type="text" name="name" />
            <button>Enviar</button>
        </form>
    </div>
</body>
</html>

