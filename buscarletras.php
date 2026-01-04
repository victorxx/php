<?php
$string = "abc";
$padrao = '/[a-z]/i';

if (preg_match($padrao, $string)) {
    echo "Encontrou letras!";
} else {
    echo "Nao encontrou letras!";
}
?>
