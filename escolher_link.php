<?php
$url = "https://mercadolivre.com/sec/14Uojjm";
$html = file_get_contents($url);
$dom=new DOMDocument();
@$dom->loadHTML($html);

$dados=[];
foreach($dom->getElementsByTagName('a') as $a)
    {
        $link=$a->getAttribute('href');
        array_push($dados,$link);
    }
$escolher=array_rand($dados);
echo $dados[$escolher];
?>
