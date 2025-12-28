<?php


$page=isset($_GET['page'])?$_GET['page']:'home';

if($page=='home'){
    $links=['soma'];
    foreach($links as $pagina){
        echo"<a href='?page=$pagina'>soma</a>";
    }
}
if($page=="soma"){
    $numeros=[1,2,3,4,5];
    $somei=array_sum($numeros);
    echo "a soma do nosso array é ->$somei";
}

?>
