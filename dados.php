<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Processamento de dados</h1>
    <hr>

<?php
    //Capturando os dados enviados a partir do formulário
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];

    /* // Se existir o $_POST ['interesses'].
    o que foi selecionado fica na variavel. case contario deixe um array vazio na variavel 
    ?? operador de coalescencia nula
    */
    $interesses = $_POST["interesses"] ?? [];
    $informativos = $_POST["informativos"];
    $mensagem = $_POST["mensagem"];
?>

    <h2>Dados:</h2>
    <ul>
        <li>Nome: <?=$nome?></li>
        <li>Email: <?=$email?></li>
        <li>Idade: <?=$idade?></li>
        <!-- Aqui usamos o operador de negação para inverter a lógica da função empty -->
        <!-- Se interesse NÂO estiver vazio -->
        <?php if( !empty($interesses) ){?>
            <!-- Então faça tdo abaixo -->
        <li>Interesses: 
            <ul>
                <?php foreach($interesses as $interesse){?>
                <li><?=$interesse?></li>
                <?php } ?>
            </ul>
        </li>
        <?php } ?>

        <li>Informativos: <?=$informativos?></li>
        <li>Mensagem: <?=$mensagem?></li>
    </ul>
</body>
</html>