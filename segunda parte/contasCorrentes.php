<?php

// array associativo 
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

$contasCorrentes = [$conta1, $conta2, $conta3];


for ($i = 0; $i < count($contasCorrentes);$i++){
    echo $contasCorrentes[$i]['titular'] . $contasCorrentes[$i]['saldo'] . PHP_EOL; 
}
