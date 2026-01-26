<?php
$numero=10;
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head></head>
    <body>
<div id="resposta">
    
</div>
<script>
    let n=<?php echo $numero?>;
    document.getElementById('resposta').innerHTML=n;
</script>
    </body>
</html>
