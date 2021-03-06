<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Loops com PHP</title>
</head>
<body>
    <h1>Loops (ou laços de repetição)</h1>
    <hr>

    <h2>While (enquanto)</h2>
<?php
$i = 1;
while($i <= 3){
?> 
    <p><?=$i?></p>

<?php
    $i++;   /* atualizar a variavel de controle ++ adiciona +1 */
}
?>


    <h2>do/while (faça/enquanto)</h2>


<?php
    $j = 1;
do{
?>

    <div style="border: solid 1px;">
        <h3>Exemplo <?=$j?></h3>
    </div>


<?php

    $j++;
} while($j <=5)
?>

    <h2>For (para)</h2>

<?php

for($i = 1; $i <= 3; $i++){

?>

    <p>Valor de i é <b><?=$i?></b></p>

<?php    

}

?>
    <h2>Exerciico Array e Loop</h2>
    <p>Crie um array contendo os nomes dos 12 meses do ano</p>
    <p>Usando o loop, faça os nomes dos meses aparecer em uma lista ordenada.</p>
<?php
$meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
?>
    
    <ol> 
        <?php for($i = 0; $i < count($meses); $i++){ ?>
        <li> <?=$meses[$i]?> </li> 
        <?php } ?>
    </ol>
    
    <h2>foreach (para cada)</h2>
    <p>Loop exclusivo para Arrays</p>

    <ol>
        <!-- palavra-chave 'as' : como -->
        <?php foreach($meses as $mes){ ?>
        <li> <?=$mes?> </li>
        <?php } ?>
    </ol>

<?php
    // Array Associativo (formados por pares de chave=>valor)
    $curso = [
        // chave (key)  =>  valor (value)
        "nome" => "Programador Web",
        "carga_horaria" => 240,
        "unidade" => "Penha",
        "ucs" => 5
    ];

    foreach($curso as $dados => $valor){
?>
    <p> <?=$dados?> - <?=$valor?> </p>
<?php
    } 
?>

</body>
</html>