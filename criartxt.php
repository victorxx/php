<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <style>
            .form{
                width:100%;
                border-radius: 12px;
                background-color: orangered;
                padding:20px;
                display: flex;
                font-size: 30px;
                flex-direction: column;
                gap:20px;

            }
            input{
                width:90%;
                height: 350px;
                border-radius: 12px;
                padding:20px 10px;
            }
            button{
                width:30%;
                height: 250px;
                padding:20px;
                border-radius: 12px;
                background-color: pink;
                color:black;
                font-size: 30px;
            }
        </style>
    </head>
    <body>
   <form method="post" >
    <input type="text" placeholder="digite o nome da pasta" name="pasta">
    <button type="submit">CRIAR</button>
   </form>  
   <?php
   if($_POST){
    $arquivo=$_POST['pasta'];
    $pasta="pasta";
    $juntar=$pasta.'/'.$arquivo.'.txt';
    if(!file_exists($juntar)){
        $abrir=fopen($juntar,"w");
        fclose($abrir);
        echo "Ok";

    }}
   ?>
</body>
</html>
