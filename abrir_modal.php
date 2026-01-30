
<?php $abrir=isset($_GET['ok']);?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
<meta lang="pt-br">
<style>
    .modal{
        display: none;
        position:fixed;
        top:0;
        left: 0;
        width:100%;
        height: 100%;
        background-color: aquamarine;
    }
    .caixa{
        background-color: white;
        width:250px;
        padding:20px;
        margin:100px auto;
        text-align: center;
    }
</style>
    </head>
    <body>
        <a href="?ok=1">Abrir modal</a>
        <?php if($abrir):?>
            <div class="modal" style="display:block;">
                <div class="caixa">
                    <p>ola</p>
                    <a href="./">fechar</a>
                </div>
            </div>
            <?php endif;?>
          
    </body>
</html>
