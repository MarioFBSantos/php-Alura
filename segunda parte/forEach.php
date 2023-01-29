<?php

$conta1 = [
    'titular' => 'Mario',
    'saldo' => 0
];

$conta2 = [
    'titular' => 'Francisco',
    'saldo' => 10
];

$conta3 = [
    'titular' => 'Jorge',
    'saldo' => 10000
];

$contasCorrentes = [
    '12345678910' => $conta1,
    '12345678911' =>$conta2,
    '12325678912' =>$conta3
];

$contasCorrentes[12345637811] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

foreach($contasCorrentes as $cpf => $conta){
    echo $conta['titular'] . PHP_EOL; 
}