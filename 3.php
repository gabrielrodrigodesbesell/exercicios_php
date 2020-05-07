<?php
$numero = $_GET['numero'];
if(is_numeric($numero)){
	$sorteio = rand(1,1);
	if($sorteio==$numero){
		echo 'Você acertou o número. Sorteado: '.$sorteio.'; Digitado:'.$numero;
	}else{
		echo 'Você errou o número. Sorteado: '.$sorteio.'; Digitado:'.$numero;
	}
}else{
	echo 'Não é um número válido';
}