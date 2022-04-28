<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais PHP</title>

    <style>
        .aprovado{
            color: blue;
        }
        .reprovado{
            color: red;
        }
        .recuperacao{
            color: orangered;
        }

    </style>
</head>
<body>
    <h1>
        Condicionais
    </h1>
    <hr>
    <!-- Condicional simples do php só contem if -->
    <h2>Condicional Simples</h2>
    <?php
    $numero = 5;
    $outroNumero = 1;
    if ($numero > $outroNumero) {
        echo "<p>$numero é maior que $outroNumero!</p>";
    }
    ?>
    <h2>Compostos</h2>
<?php
    $nota1 = 7;
    $nota2 = 2;
    $media = ($nota1 + $nota2) / 2;
    echo "<p>Média: $media</p>";

    if ($media >= 7) {
        echo "<p class=\"aprovado\">Aprovado</p>";
    }else{
           echo "<p class=\"reprovado\">Reprovado</p>";
    }
    
?>

    <h2>Encadeada</h2>
<?php
    if ($media >= 7) {
        echo "<p class='aprovado'>Aprovado</p>";
    } elseif($media >=6 && $media < 7){
        echo "<p class='recuperacao'>Recuperação</p>";
    } else{
        echo "<p class=\"reprovado\">Reprovado</p>";
    }
?>

    <h2>switch/case</h2>
<?php
$opcao = 3;

    switch($opcao){
        case 1: $assunto = "Reclamação"; break;
        case 2: $assunto = "Elogio"; break;
        case 3: $assunto = "Informações"; break;
        default: $assunto = "Falar com um Atendente"; break;
    }
    echo "<p>$assunto</p>";

?>    
</body>
</html>