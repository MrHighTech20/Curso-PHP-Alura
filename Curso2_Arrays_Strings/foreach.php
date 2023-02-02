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

$contasCorrentes['123.258.852-12'] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

$contasCorrentes[] = [
    'titular' => 'Fabio',
    'saldo' => 4002
];

foreach ($contasCorrentes as $cpf => $conta){
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}

