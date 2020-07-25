<?php

$host='ec2-34-225-162-157.compute-1.amazonaws.com';
$port='5432';
$database='dffirnq6pc5iim';
$user='bbmhndayvriejv';
$pass='0eb27693698aa48ed1de42b09c88d0243774cd52d22020c4af05d5163bd98f32';


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