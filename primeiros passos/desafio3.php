<?php

$peso = 80;
$altura = 1.80;
$imc = $peso / $altura ** 2;

if($imc < 18){
    echo 'abaixo do esperado';
} else if($imc < 25){
    echo 'dentro do padrao';
}
else{
    echo 'acima do esperado';
}