<?php
$diretorio = $_GET['diretorio'];
if(!empty($diretorio)){
    $totalChars = strlen($diretorio);
    if($totalChars>2){
        $diretorio = strtolower($diretorio);//convertendo para minusculo;
        $diretorio = str_replace(' ','',$diretorio);//removendo espços da string;
        if(is_dir($diretorio)){
            $delete = rmdir($diretorio);
            if($delete){
                echo 'O diretório <b>'.$diretorio.'</b> foi apagado com sucesso.';
            }else{
                echo 'O diretório <b>'.$diretorio.'</b> não foi apagado.';
            }
        }else{
            echo 'O diretório <b>'.$diretorio.'</b> não existe.';
        }
    }else{
        echo 'O diretório deve ter pelo menos 3 letras';
    }
}else{
    echo 'Digite um nome para o diretório.';
}