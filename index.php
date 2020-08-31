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
    <link rel="stylesheet"  href="style.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="caixa">
        <h1>Lista de Compras</h1>

        <div class ="lista" >

            <ul><?php 
                $ponteiro = pg_query($conexao,"SELECT name,quantidade,id,done from list");
                $Item = pg_fetch_array($ponteiro);
                while($Item){
                    $class="";
                    if($Item["done"]=="t"){
                        $class="riscado";
                    }
                    echo '<div class="item '.$class.'">';
                    echo $Item["quantidade"];
                    echo" - ";
                    echo '<a href="done.php?id='.$Item["id"].'"> '.$Item["name"].'</a>';
                    echo'</div>';
                    
                    // é o x para o detele
                    //echo "<a href=\"del.php?id=$Item[id]\">x</a>";
                    echo '<a href="del.php?id=' . $Item['id'] .'"class="x">X</a>';
                    //
                    //echo '<a href="done.php?id=' . $Item['id'] .'" class ="v" >V </a>';
                
                    echo "<br/>";
                    $Item = pg_fetch_array($ponteiro);
                }
                
                
            ?>
        






            </ul>
        </div>
        <form action="add.php" method="POST">
            <div>
                <div>
                    <label>Quantidade</label>
                    <div>
                        <input class="form-control" name="quantidade" type="number">
                    </div>
                </div>
                <label>Item</label>
                <div>
                    <input class="form-control" name="nomeItem" type="text">
                </div>
                <button class="btn btn-primary" >enviar</button>
            </div>
        </form>
    </div>
</body>

</html>