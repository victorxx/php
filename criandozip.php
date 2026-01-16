<?php
$pasta="pasta/";
$arquivo_zip=$pasta."arquivo.zip";
$zip=new ZipArchive();
if($zip->open($arquivo_zip,ZipArchive::CREATE))
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
        echo "<script>alert('zip não foi criado')</script>";
        }
        echo"<script>alert('criado o zip')</script>";
        $zip->close();
?>
