<?php
$host = getenv('DB_HOST');
$port = getenv('DB_PORT');
$database = getenv('DB_NAME');
$user = getenv('DB_USER');
$password = getenv('DB_PASS');


$conexao = pg_connect("host=$host port=$port dbname=$database user=$user password=$password");


$ponteiro = pg_query($conexao, "select nome, quantidade from lista ORDER BY id DESC");


$array_com_os_valores = pg_fetch_all($ponteiro);

?>

<html>
<head>
	<title>Do To list do Andrew</title>
</head>
<body>
	<h1>Lista de compras</h1>
	<ul>
		<?php foreach($array_com_os_valores as $item): ?>
			<li>
				<?= $item['quantidade']?> - <?= $item['nome']?>
			</li>
		<?php endforeach ?>
	</ul>
</body>
</html>

