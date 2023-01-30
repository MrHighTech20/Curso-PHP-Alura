<?php

$conta1 = [
    'titular' => 'Vinicius', 
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Maria', 
    'saldo' => 1000
];

$conta3 = [
    'titular' => 'Alberto', 
    'saldo' => 300
];

$contasCorrentes = [
    12345678910 => $conta1, 
    12345648911 => $conta2, 
    12325678910 => $conta3
];

foreach ($contasCorrentes as $cpf => $conta){
    echo $cpf['titular'] . PHP_EOL;
}

