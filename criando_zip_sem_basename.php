<?php
$pasta="pasta/";
$caminho_zip=$pasta."arquivo.zip";

$zip=new ZipArchive();
if(is_dir($pasta))
    {
        $arquivos=glob($pasta."*");
        if($zip->open($caminho_zip,ZipArchive::CREATE))
            {
                foreach($arquivos as $arquivo)
                    {
                        $zip->addFile($arquivo,$arquivo);
                    }
            }
        $zip->close();
        echo"<script>alert('zip criado com sucesso')</script>";
        
    }
?>
