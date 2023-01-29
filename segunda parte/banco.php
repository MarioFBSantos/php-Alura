<?php

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

function removeSaldo($conta, $valor){
    if($conta['saldo'] < $valor){
        echo "Nao pode sacar";
    }
    else{
        $conta['saldo'] -= $valor;
        echo $conta['saldo'] . " foram removidos " . $valor;
        return $conta;
    }
}

function depositarSaldo($conta, $valor){
    if($valor > 0){
        $conta['saldo'] += $valor;
        return $conta;
    }
}

$contasCorrentes['123.456.789-10'] = removeSaldo($contasCorrentes['123.456.789-10'], 500);
$contasCorrentes['123.256.789-12'] = depositarSaldo($contasCorrentes['123.256.789-12'], 90000);

echo PHP_EOL;

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . ' Saldo -> ' . $conta['saldo'] . PHP_EOL;
} 