<?php
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
if(is_numeric($numero1) && is_numeric($numero2)){
	echo $numero1+$numero2;
	echo '<br>';
	echo $numero1*$numero2;
	echo '<br>';
	echo $numero1/$numero2;
}else{
	echo 'Números inválidos';
}
