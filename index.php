<?php
$host = 'ec2-34-233-226-84.compute-1.amazonaws.com';
$port = '5432';
$database = 'd7r0ukrhem4kv0';
$user = 'shqfnemscchnnh';
$password = 'a3dc6f7ca7fc5c83f8ab3109d05c24fb3028d3ea663f7cd4947cb3212dc08485';

$conexao = pg_connect("host=$host port=$port dbname=$database user=$user password=$password");

$ponteiro = pg_query($conexao, "select name, quantity from lista ORDER BY id DESC");

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
				<?= $item['quantity']?> - <?= $item['name']?>
			</li>
		<?php endforeach ?>
	</ul>
    <form action="add.php" method="post">
        <label>Quantidade:</label>
        <input type="number" name="quantity" />
        <label>Nome:</label>
        <input type="text" name="name" />
        <button>Enviar</button>
    </form>
</body>
</html>

