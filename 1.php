<?php
$numero = $_GET['numero'];
if(is_numeric($numero)){
	echo $numero+1;
	echo '<br>';
	echo $numero-1;
}else{
	echo 'Não é um número válido';
}