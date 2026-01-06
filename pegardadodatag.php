<?php
$html="<div id='ok'>caguei</div>";
$dom=new DOMDocument();
$dom->loadHTML($html);

$div=$dom->getElementById('ok');
$leitura=$div->textContent;
if($leitura=="caguei"){
    echo "você não pode digitar caguei";
}
?>
