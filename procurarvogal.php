<?php
$texto="phpAI";
if(preg_match("/[aeiou]/i",$texto)){
    echo "tem pelo menos um vogal";
}else{
    echo "não tem vogal";
}
?>
