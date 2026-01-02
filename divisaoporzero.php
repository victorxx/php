<?php
try{
    $resultado=10/0;

}catch(DivisionByZeroError $e){
    echo "error não é possivel";
}
?>
