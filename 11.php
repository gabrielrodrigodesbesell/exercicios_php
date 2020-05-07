<?php
$diretorio = $_GET['diretorio'];
if(!empty($diretorio)){
    $totalChars = strlen($diretorio);
    if($totalChars>2){
        $diretorio = strtolower($diretorio);//convertendo para minusculo;
        $diretorio = str_replace(' ','',$diretorio);//removendo espços da string;
        if(is_dir($diretorio)){
            echo 'O diretório <b>'.$diretorio.'</b> já existe.';
        }else{
            $create = mkdir($diretorio,0777);
            if($create==true){
                echo 'Diretório criado com sucesso: <b>'.$diretorio.'</b>';
            }else{
                echo 'Falha ao criar o diretório';
            }
        }
    }else{
        echo 'O diretório deve ter pelo menos 3 letras';
    }
}else{
    echo 'Digite um nome para o diretório.';
}