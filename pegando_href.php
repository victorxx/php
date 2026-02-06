<?php
$url = "https://recomendadodia23.blogspot.com/";
$html = file_get_contents($url);
libxml_use_internal_errors(true);
$dom=new DOMDocument();
$dom->loadHTML($html);
$links=$dom->getElementsByTagName('a');
$urls=[];
foreach($links as $link)
    {
        $href=$link->getAttribute('href');
        if(!empty($href))
            {
                $urls[]=$href;
            }
    }
    $urls=array_unique($urls);
    foreach($urls as $link)
        {
            echo $link."<br>";
        }
?>
