<?php
$url="https://www.espiritosanto-es.com.br/capixaba/capixaba4/";
$html=file_get_contents($url);
$dom=new DOMDocument();
@$dom->loadHTML($html);
$dados=[];
foreach($dom->getElementsByTagName('a') as $a)
    {
        $link=$a->getAttribute('href');
        array_push($dados,$link);
    }

$escolher=array_rand($dados);
echo '📰<a href="https://www.espiritosanto-es.com.br' . $dados[$escolher] . '">+ conteúdo</a>';
?>
