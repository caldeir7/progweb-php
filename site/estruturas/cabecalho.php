<?php
$pagina = basename($_SERVER['PHP_SELF']);
// echo $pagina;
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