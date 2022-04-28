<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio Array e Loop</title>
</head>
<body>

<?php
$meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio","junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"];
$i = 0;

for($i = 0; $meses < 12; $i++){
?>
    <ol>
        <li><?=$meses[0]?></li>
    </ol>

<?php


}


?>

    
</body>
</html>