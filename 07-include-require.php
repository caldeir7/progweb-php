<?php include "recursos.php";?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusão de Recursos</title>
</head>
<body>
    <h1>Inclusao de Recursos</h1>
    <hr>




    <h2><?=ESCOLA?></h2>
    <p> Estamos no curso de <?=$curso?> </p>

    <ul>
        <?php foreach($tecnologias as $tec) { 
        ?>

        <li> <?=$tec?> </li>

        <?php } ?>
    </ul>

    <p> Chapolin colorado tem 20 anos e é de 
        <b><?=verificaIdade(20)?></b> idaide 
    </p>
    <p> Chaves tem 8 anos e é  
        <b><?=verificaIdade(8)?></b> idaide 
    </p>

    <hr>
    
    <article>
        <h2>conteúdo qualquer...</h2>
        <?php include "textos.php"; ?>
    </article>

    <h2>Qualquer outra Coisa</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet praesentium officia eos explicabo. Vel ducimus, expedita ex inventore porro accusamus molestias eos omnis at! Laboriosam vitae atque qui ipsam necessitatibus!</p>
</body>
</html>