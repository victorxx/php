<?php
$zip=new ZipArchive();
$pasta="pasta/";
$caminho_zip=$pasta."dado.zip";

if($zip->open($caminho_zip,ZipArchive::CREATE)===TRUE)
    {
        $arquivos=glob($pasta."*");
        foreach($arquivos as $arquivo)
            {
              if(is_file($arquivo))

                {
                    $zip->addFile($arquivo,basename($arquivo));
                }
            }
    }
    else
        {
           echo "<script>alert('deu algo errado')</script>";
        }
    echo "<script>alert('criado')</script>";
    $zip->close();

    
?>
