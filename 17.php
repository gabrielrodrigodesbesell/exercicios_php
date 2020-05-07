<?php
$value = $_GET['valor'];
if(is_numeric($value)){
    echo str_pad($value,10,'0',STR_PAD_LEFT);
}else{
    echo str_pad($value,10,'Z',STR_PAD_RIGHT);
}