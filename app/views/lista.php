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
    <h2>
        <?=$nomeUsuario?> <a href="sair.php" class="btn btn-danger">sair</a>
    </h2>

    <div class ="lista" >

        <ul>
            <?php foreach($items as $Item):?>
                <div class="item <?=$Item->class?>">
                    <?=$Item->quantidade?>
                    -
                    <a href="done.php?id=<?=$Item->id?>" title="Criado por <?=$Item->user_name?>"><?=$Item->name?></a>
                </div>
                <a href="del.php?id=<?=$Item->id?>"class="x">X</a>

                <br/>
            <?php endforeach ?>

        </ul>
    </div>
    <form action="/add" method="POST">
        <div>
            <label>Quantidade</label>
            <div>
                <input class="form-control" name="quantidade" type="number">
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