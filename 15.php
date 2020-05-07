<?php
$string = $_GET['string'];
echo 'Digitado:'.$string;
echo '<br>';
echo 'Hash:'.hash('sha512',$string.'-968574732343ddddsss*');