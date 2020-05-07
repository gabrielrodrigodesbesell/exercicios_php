<?php
$string = $_GET['string'];
if(!empty($string)){
    $totalChars = strlen($string);
    echo "Total de letras: ".$totalChars;
    echo "<br>";
    for($x=1;$x<$totalChars;$x++) {
        echo $x;
        echo ' ';
    }
}else{
    echo 'Digite um nome.';
}