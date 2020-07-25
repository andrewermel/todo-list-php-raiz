<?php

$host='ec2-3-208-50-226.compute-1.amazonaws.com';
$port='5432';
$database='d7r0ukrhem4kv0';
$user='shqfnemscchnnh';
$pass='a3dc6f7ca7fc5c83f8ab3109d05c24fb3028d3ea663f7cd4947cb3212dc08485';


$conexao= pg_connect("host=$host port=$port dbname=$database user=$user password=$pass");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras</title>
</head>

<body>
    <h1>Lista de Compras</h1>
    <ul>







    </ul>
    <form action="add.php" method="POST">
        <div>
            <div>
                <label>Quantidade</label>
                <div>
                    <input name="quantidade" type="number">
                </div>
            </div>
            <label>Item</label>
            <div>
                <input name="nomeItem" type="text">
            </div>
            <button>enviar</button>
        </div>
    </form>
</body>

</html>