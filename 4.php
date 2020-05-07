<?php
$tabuada = $_GET['tabuada'];
if(is_numeric($tabuada)){
    echo "Exibindo a tabuada do $tabuada <br>";
    for($x=1;$x<=50;$x++){
        echo "$x x $tabuada = ".($tabuada*$x)."<br>";
    }
}else{
    echo 'Número inválido.';
}

?>