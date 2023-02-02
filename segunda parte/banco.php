<?php

require 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.789-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Mario',
        'saldo' => 100
    ]
];

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 500);
$contasCorrentes['123.256.789-12'] = depositar($contasCorrentes['123.256.789-12'], 90000);

echo PHP_EOL;

formatarUpperCase($contasCorrentes['123.256.789-12']);

foreach ($contasCorrentes as $cpf => $conta) {
    echo "Conta: {$cpf} / Nome: {$conta['titular']} / Saldo: {$conta['saldo']}" . PHP_EOL;
} 