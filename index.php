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
            padding: 10px 20px;
            font-size: 18px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        h1 img {
            border-radius: 50%;
            border: 1px solid #333;
            width: 30px;
            height: 30px;
        }

        #lista {
            max-width: 400px;
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
            cursor: pointer;
        }

        li:hover {
            background-color: #FFD;
        }

        li a {
            display: inline-block;
            text-align: center;
            color: red;
            width: 18px;
            text-decoration: none;
        }

        li a:hover {
            background: rgba(0, 0, 0, 0.2);
        }

        li > div {
            display: inline-flex;
            align-items: center;
        }

        li .item-and-user-name {
            margin-left: 8px;
        }

        li .user-name {
            color: #DDD;
            font-size: 10px;
        }

        li .item-name {
            display: inline-flex;
            align-items: center;
        }

        form {
            border: 1px solid #888;
            padding: 10px;
        }

        label {
            display: block;
        }

        input {
            width: 100%;
            border: 1px solid #eaeaea;
            border-bottom: 1px solid #333;
            border-radius: 0;
            margin-bottom: 10px;
            padding: 5px;
        }

        h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>
<div id="lista">
    <h1>
        Lista de compras
        <img src="https://picsum.photos/30/30"/>
    </h1>
    <ul>
        <?php foreach ($array_com_os_valores as $item): ?>
            <li>
                <div>
                    <div class="item-name">
                        <?= $item['quantity'] ?> -
                    </div>
                    <div class="item-and-user-name">
                        <div><?= $item['name'] ?></div>
                        <div class="user-name">Nome de quem criou</div>
                    </div>
                </div>
                <a href="#">X</a>
                <a href="/deletar.php?name=<?= $item['name']?>">X</a>
			</div>
        <?php endforeach ?>
    </div>
    <form action="/add.php" method="post">
        <h2>Adicionar novo ítem</h2>
        <div>
            <label>Nome do ítem:</label>
            <input name="name" placeholder="exemplo: batata"/>
        </div>
        <div>
            <label>Quantidade:</label>
            <input name="quantity" placeholder="exemplo: 5" type="number"/>
        </div>
        <div>
            <button>Adicionar</button>
        </div>
    </form>
</div>
</body>
</html>

