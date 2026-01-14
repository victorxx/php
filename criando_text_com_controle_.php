<!DOCTYPE html>
<html lang="pt-br">
    <head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<style>
                body{
                    background-color: black;
                }
                form{
                    width: 100%;
                    max-width: 900px;
                    margin:20px;
                    background-color: orangered;
                    padding:20px;
                    text-align: center;
                    border-radius: 12px;
                }
                input{
                    width:80%;
                    height: 70px;
                    font-size: 40px;
                    margin-bottom:20px;
                    box-shadow: 10px 10px purple;
                }
                textarea{
                    width:80%;
                    height: 250px;
                    font-size: 30px;
                    box-shadow: 10px 10px 10px purple;
                }
                    button{
                        width:60%;
                        height: 250px;
                        font-size: 50px;
                        margin-bottom:20px;
                        border-radius: 12px;
                        box-shadow: 10px 10px 10px yellow;
                        cursor:pointer;
                    }
</style>
    </head>
    <body>
<form method="post">
    <input type="text" name="titulo" placeholder="titulo">
    <br>
    <textarea name="conteudo" placeholder="conteudo">
    
    </textarea>
    <br>
    <button type="submit" >GRAVAR</button>
</form>
 </body>
 <?php
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $titulo=trim($_POST['titulo']);
    $conteudo=trim($_POST['conteudo']);
    if($titulo=="" && $conteudo==""){
        echo"<script>alert('conteudo ou titulo vázio preencha os dois')</script>";
    }else{
                if(!is_dir($pasta)){
                            mkdir('pasta',0777);
                 }
                            $arquivo="pasta/$titulo.txt";
                            if(file_exists($arquivo)){
                                echo"<script>alert('já existe')</script>";
                            }else{
                                echo"<script>alert('criado')</script>";
                            }

          }
    
}
 ?>
</html>
