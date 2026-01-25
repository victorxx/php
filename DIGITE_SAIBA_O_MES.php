<?php
$mes=[
  "Janeiro", "Fevereiro",
  "Março", "Abril",
  "Maio", "Junho",
  "Julho", "Agosto",
  "Setembro", "Outubro",
  "Novembro", "Dezembro"
];
$numero_mes=1;
if($numero_mes>=1&& $numero_mes<=12)
    {
        echo $mes[$numero_mes-1];
    }
?>
