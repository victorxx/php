<?php
for($i=1;$i<100;$i++)
    {
        sleep(5);
        echo "rodando $i<br>";
        ob_flush();
        flush();
    }
?>
