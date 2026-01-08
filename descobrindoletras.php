<?php
$letras=['a', 'B', 'c', 'D', 'e', 'F'];

foreach($letras as $letra){
    if(ctype_alpha($letra)){
       echo "A letra=>"."<h1>$letra</h1>";
    }
}
?>
