<?php
$dados = [
    ["nome"=>"Ana", "nota"=>"7"],
    ["nome"=>"Beto", "nota"=>"dez"], // texto
    ["nome"=>"Cris", "nota"=>8]
];

foreach($dados as $d){
    echo $d["nome"].": ".(is_numeric($d["nota"]) ? "Nota válida: ".$d["nota"] : "Nota inválida")."<br>";
}

?>
