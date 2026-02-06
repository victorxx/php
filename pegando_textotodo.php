<?php
$html=file_get_contents("https://recomendadodia23.blogspot.com/");
libxml_use_internal_errors(true);
$dom=new DOMDocument();
$dom->loadHTML($html);


$xpath=new DOMXPath($dom);
$h3=$xpath->query('//h3');
foreach($h3 as $h3s)
    {
        $texto=$h3s->textContent;
        echo $texto.'<br>';
    }
?>
