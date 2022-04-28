<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Exercicio 03</h1>
    <hr>
<?php
    $salario = 600;

    $reajuste = ($salario);

    if($salario < 500){
        $reajuste  * 1.15;
    } elseif( $salario <= 1000 ){
         $reajuste * 1.10;
    } else{
         $reajuste * 1.05;
    }
?>

<?php
    $salario = 800;

    // Obs: Declarar esta variavel inicialmente é algo opcional
    $novoSalario = 0;
    if ($salario < 500) {
        $novoSalario = $salario * 1.15;
    }elseif ($salario <= 1000 ) {
        $novoSalario = $salario * 1.10;
    }else {
        $novoSalario = $salario * 1.05;
    }
?>

<!--    
    number_format(
        valor,
        quantidade de casas decimais,
        "separador de casa decimal"
        "separador de milhar"    
    )
 -->
    <p>
        R$<?=number_format($salario,2,".",".",)?> e R$<?=number_format($novoSalario,2,",",".")?>
        
    </p>


?>
</body>
</html>