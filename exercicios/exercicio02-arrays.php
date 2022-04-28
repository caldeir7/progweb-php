<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02 Arrays</title>
    <style>
        html{
            font-size: 16px;
        }
        body{
            background-color: #eee;
        }
        article{
            width:  80%;
            height: 70vh;
            background-color: #fff;
            margin: auto;
            text-align: center;
        }
        article h2{
            font-size: 1.9rem;
        }
        table{
            border: 1px solid black;
            padding: 5px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
            margin: auto;
            width: 500px;
        }

        table td{
            border: 1px solid black;
            padding: 5px;
        }
        table th{
            font-size: 1.5rem;  
            color: blue;
            font-weight: bolder;
        }
    </style>
    
</head>
<body>
<?php
    $pessoa = [
        [
        "nome" => "Fernando Souza",
        "idade" => 25 
        ],

     [
        "email" => "fernandos@outlook.com",
        "sexo" => "Masculino"
    ],

     [
        "nome" => "Marilia Cardoso",
        "idade" => 30
    ],

     [
        "email" => "cardosomarilia@yahoo.com",
        "sexo" => "feminino"
    ]
    ]
?>


    <article>
        <h1>Dados</h1>
        <h2>O <?=$pessoa[2]["nome"]?> tem <?=$pessoa[2]["idade"]?> anos, seu email é <?=$pessoa[3]["email"]?></h2>
        <table>
            <caption>Dados</caption>
            <thead>
                <th>Nome</th>
                <th>Idade</th>
                <th>E-mail</th>
            </thead>
            <tbody>
                <tr>
                    <td><?=$pessoa[0]["nome"]?></td>
                    <td><?=$pessoa[0]["idade"]?></td>
                    <td><?=$pessoa[1]["email"]?></td>
                </tr>
                <tr>
                    <td><?=$pessoa[2]["nome"]?></td>
                    <td><?=$pessoa[2]["idade"]?></td>
                    <td><?=$pessoa[3]["email"]?></td>
                </tr>
            </tbody>
        </table>
    </article>
    
    <pre>
        <?=var_dump($pessoa)?>
    </pre>

</body>
</html>