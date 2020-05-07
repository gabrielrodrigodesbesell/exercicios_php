<?php
$nome = $_GET['nome'];
if(!empty($nome)){
    $totalChars = strlen($nome);
    if($totalChars>=5){
        echo "Nome: $nome";
        echo "<br>";
        echo "Nome inverso: ".strrev($nome);
        echo "<br>";
        echo "Nome em maiúsculo: ".strtoupper($nome);
        echo "<br>";
        echo "Total de letras: ".$totalChars;
    }else{
        echo 'O nome deve ter pelo menos 5 letras';
    }
}else{
    echo 'Digite um nome.';
}