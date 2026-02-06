<?php
$html = file_get_contents("https://recomendadodia23.blogspot.com/");
libxml_use_internal_errors(true);
$dom=new DOMDocument();
$dom->loadHTML($html);
$xpath=new DOMXPath($dom);


foreach($xpath->query("//h3") as $h3)
    {
        $titulo=$h3->textContent;
        $link=$h3->getElementsByTagName('a')->item(0)?->getAttribute('href');
        echo "<a href='$link'>$titulo</a><br><br>";
   
    }
?>
