<?php
$alunos=[
    [
        "nome"=>"joao",
        "notas"=>[
            "nota1"=>2.0,
            "nota2"=>3.0
        ]
    ]
];
echo "nota1".$alunos[0]["notas"]["nota1"]."<br>";
echo "nota2".$alunos[0]["notas"]["nota2"]."<br>";
?>
