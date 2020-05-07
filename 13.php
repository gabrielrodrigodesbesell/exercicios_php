<?php
$numero = $_GET['numero'];
if(is_numeric($numero)){
    echo 'Maior inteiro mais próximo:'.ceil($numero);
    echo '<br>';
    echo 'Menor inteiro mais próximo:'.floor($numero);
}