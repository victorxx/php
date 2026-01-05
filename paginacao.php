<?php
$alunos=[
  "Ana", "Bruno", "Carla", "Daniel", "Eduardo",
  "Fernanda", "Gabriel", "Helena", "Igor", "Joana",
  "Karla", "Lucas", "Mariana", "Nicolas", "Olivia",
  "Paulo", "Quezia", "Rafael", "Sofia", "Thiago"
];
$por_pagina=5;
$paginas=2;


$inicio=($paginas-1)*$por_pagina;
$fim=$inicio+$por_pagina;

for($i=$inicio;$i<$fim;$i++){
    if(isset($alunos[$i])){
        echo $alunos[$i]."<br>";
    }
}



?>
