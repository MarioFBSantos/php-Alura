<?php

function depositar(array $conta, float $valor): array{
    if($valor > 0){
        $conta['saldo'] += $valor;
        return $conta;
    }
}

function sacar(array $conta, float $valor): array{
    if($conta['saldo'] < $valor){
        echo "Nao pode sacar";
    }
    else{
        $conta['saldo'] -= $valor;
        // echo "SAQUE -> " . $conta['saldo'] . " foram removidos " . $valor;
        return $conta;
    }
}

function formatarUpperCase(array &$conta){
    $conta['titular'] = strtoupper($conta['titular']);
}

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
}