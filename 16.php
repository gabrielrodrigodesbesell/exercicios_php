<?php
$string1 = $_GET['string1'];
$string2 = $_GET['string2'];
similar_text($string1,$string2,$porcentagem);
echo "<b>$string1</b> é <b>$porcentagem%</b> parecida com <b>$string2</b>";