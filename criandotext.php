<?php
$pasta='pasta';
$arquivo='arquivo.txt';
$conteudo="o nosso texto é o melhor\ntemos mais texto aqui";

if(!is_dir($pasta)){
    mkdir($pasta,077,true);
    echo'Pasta criada';
}else{
    echo 'Pasta já existe';
}
$caminho=$pasta.'/'.$arquivo;
file_put_contents($caminho,$conteudo);

echo'<br><br><br>';
echo'Arquivo criado com sucesso';

?>
