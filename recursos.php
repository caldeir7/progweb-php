<?php
const ESCOLA = "Senac";
$curso = "Progamador Web";
$tecnologias = ["HTML", "CSS", "JavaScript", "PHP"];
function verificaIdade(int $valor):string{
    if ($valor >=18){
        return "maior";
    }else{
        return "menor";
    }
}
//Require para recursos relacionados a manipulação de dados ou validações de dados.