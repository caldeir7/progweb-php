<?php
/* 
Parte 1: identificar o arquivo aberto
$_SERVER['PHP_SELF']-> Traz os dados completos do endereço 
basename($_SERVER['PHP_SELF'])-> EXTRAI APENAS O NOME.EXTEMSÃO */
$pagina = basename($_SERVER['PHP_SELF']);
// echo $pagina;

/* Parte 2: Condicional para avaliar qual página está aberta e definir qual titulo usar. se eu ja sei qual e o arquivo e ele esta guarado na const página só chamar no switch */
    switch($pagina){
        case 'index.php': $titulo = "Página Inicial"; break;
        case 'produtos.php': $titulo = "Produtos"; break;
        case 'servicos.php': $titulo = "Página Inicial"; break;
        default: $titulo = "Contato"; break;
    }
// echo $titulo;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Colocar a variavel no <title> $nomeVariavel -->
    <title><?=$titulo?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Site XYZ</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="produtos.php">Produtos</a>
            <a href="servicos.php">Serviços</a>
            <a href="contato.php">Contato</a>
        </nav>
    </header>
    <main>