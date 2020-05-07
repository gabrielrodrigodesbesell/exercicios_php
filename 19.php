<?php
$string = $_GET['string'];
echo 'Digitado:'.$string.'<br>';
echo implode('<br>',str_split($string,5));


