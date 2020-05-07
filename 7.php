<?php
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
if(is_numeric($numero1) && is_numeric($numero2)){
    for($x=$numero1;$x<=$numero2;$x++) {
        echo $x;
        echo '<Br>';
    }
}else{
    echo 'Números inválidos';
}
