<?php
$letra = $_GET['letra'];
$frase = $_GET['frase'];

echo 'Letra: '.$letra;
echo '<br>';
echo 'Frase: '.$frase;
echo '<br>';
$buscaLetra = strpos($frase,$letra);
if($buscaLetra===false){
    echo 'Letra não encontrada na frase.';
}else{
    echo 'Letra encontrada na posição:'.$buscaLetra;
}