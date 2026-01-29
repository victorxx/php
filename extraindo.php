<?php
$dados=[
    'nome'=>'joao',
    'idade'=>30,
    'cidade'=>'vitoria'
];
extract($dados);

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>exemplo básico</title>
    </head>
    <body>
    <p>nome:<?php echo $nome;?></p>
    <p>idade:<?php echo $idade;?></p>
    <p>cidde:<?php echo $cidade?></p>
    </body>
</html>
