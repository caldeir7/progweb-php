<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais PHP (versaõ 2)</title>
    <link rel="stylesheet" href="css/style.css">

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
        Condicionaiss
    </h1>
    <hr>
    <!-- Condicional simples do php só contem if -->
    <h2>Condicional Simples</h2>
    <?php
    $numero = 5;
    $outroNumero = 1;
    if ($numero > $outroNumero) {
?>

     <p>
        <?=$numero?> é maior que <?=$outroNumero?>
    </p> 
<?php
}
?>

    

    <h2>Compostos</h2>
<?php
    $nota1 = 8;
    $nota2 = 9;
    $media = ($nota1 + $nota2) / 2;
    // echo "<p>Média: $media</p>";
?>
    <h3> Média: <?=$media?></h3>

<?php  
    if ($media >= 7) {
?> <!-- Inicio do if -->
    <p class="aprovado">Aprovado</p>
<?php
} /* Fim do If/ Inicio do Else*/else{
?>

    <p class="reprovado">Reprovado</p>
<?php
}

?>

    <h2>Encadeada</h2>
<?php
    if ($media >= 7) {
?>


    <p class="aprovado">Aprovado</p>


<?php
} elseif($media >=6 && $media < 7){
?>


    <p class="recuperacao">Recuperação</p>


<?php
} else{
?>   


    <p class="reprovado">Reprovado</p>

    
<?php
}
?>

    <h2>switch/case</h2>
<?php
$opcao = 4;

    switch($opcao){
        case 1: $assunto = "Reclamação"; break;
        case 2: $assunto = "Elogio"; break;
        case 3: $assunto = "Informações"; break;
        default: $assunto = "Falar com um Atendente"; break;
    }
?> 
 <p><?=$assunto?></p>
 
</body>
</html>