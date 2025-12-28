<?php

$page=isset($_GET['page'])?$_GET['page']:'home';


if($page=='home'){
    $links=['obra','mercadoria'];
    foreach($links as $linha){
        echo"<a href='?page=$linha'>$linha</a><br><br>";
    }
}
if($page=="obra"){
    echo"<a href='?page=home'>voltar</a>";
}


?>
