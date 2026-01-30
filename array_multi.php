<?php
$alunos=[
    [
        "nome"=>"joao",
        "notas"=>[
            "nota1"=>9.0,
            "nota2"=>4.0
        ]
    ],
    [
        "nome"=>"maria",
        "notas"=>[
            "nota1"=>2.0,
            "nota2"=>4.0
        ]



    ]
];
echo $alunos[1]['notas']['nota1']."<br>";
echo $alunos[1]['notas']['nota2'];
?>
