<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria', 
        'saldo' => 10000
    ],
    '123.456.489-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

$contasCorrentes['123.456.789-10']['saldo'] -= 500;

if (500 > $contasCorrentes['123.456.489-11']['saldo']) {
    echo "Você não pode sacar esse valor" . PHP_EOL;
} else {
    $contasCorrentes['123.456.489-11']['saldo'] -= 500;
}

foreach ($contasCorrentes as $cpf => $conta){
    echo $cpf . " " . $conta['titular'] . ' ' . $conta['saldo'] .PHP_EOL;
}