<?php
$pasta="pasta/";
if(is_dir($pasta)){
   if(rmdir($pasta)){
    echo "pasta removida";
   }
}else{
      echo "a pasta não existe";
    }
?>
