<?php
$texto = "   ola, mundo   "; // observe os espaços no início e no fim

echo "Original: [" . $texto . "]<br><br>";

// Remove espaços do início e do fim
echo "trim(): [" . trim($texto) . "]<br><br>";

// Remove apenas os espaços do início
echo "ltrim(): [" . ltrim($texto) . "]<br><br>";

// Remove apenas os espaços do fim
echo "rtrim(): [" . rtrim($texto) . "]<br>";
?>
