<?php
$html = "<div>item1</div><div>item2</div>";
preg_match_all('/<div>(.*?)<\/div>/',$html,$matches);
echo $matches[0][0];
?>
