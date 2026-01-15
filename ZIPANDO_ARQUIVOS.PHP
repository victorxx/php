<?php
$pasta="pasta/";
$caminho_zip=$pasta."arquivo.zip";
$zip=new ZipArchive();
if(is_dir($pasta)){
    $arquivos=glob($pasta."*");
    
    if($zip->open($caminho_zip,ZipArchive::CREATE)){
                   foreach($arquivos as $arquivo){
                    $zip->addFile($arquivo,basename($arquivo));
                   }
    }
    $zip->close();
    echo "<script>alert('criado')</script>";
}
?>
<?php
$pasta="pasta/";
for($i=0;$i<11;$i++){
    $arquivo=$pasta.$i.".txt";
    file_put_contents($arquivo,"");

}
echo "<script>alert('criado os arquivos com sucesso')</script>";
?>
