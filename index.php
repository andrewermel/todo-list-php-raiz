<?php
$host='ec2-54-160-120-28.compute-1.amazonaws.com';
$port='5432';
$database='db5relmq3c860s';
$user='rnrwrasadzshjd';
$pass='1328e0d0763daa678213de11c28f4f63266617b41448ca9c7023c92a936ce91f';


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
    <ul><?php 
         
         $ponteiro = pg_query($conexao,"SELECT name,quantidade,id,done from list");
         $Item = pg_fetch_array($ponteiro);
        while($Item){
            echo $Item["quantidade"];
            echo" - ";
            echo $Item["name"];
            // é o x para o detele
            //echo "<a href=\"del.php?id=$Item[id]\">x</a>";
            echo '<a href="del.php?id=' . $Item['id'] .'">X</a>';
            //
            echo '<a href="done.php?id=' . $Item['id'] .'">V'.$Item['done'] .' </a>';
            echo "<br/>";
            $Item = pg_fetch_array($ponteiro);
        }
        
        
    ?>
   






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