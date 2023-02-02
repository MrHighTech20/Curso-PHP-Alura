<?php

/*function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}
*/

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

if (500 > $contasCorrentes['123.456.789-10']['saldo']) {
    //exibeMensagem(mensagem:"Você não pode sacar esse valor");
} else {
    $contasCorrentes['123.456.489-11']['saldo'] -= 500;
}

if (500 > $contasCorrentes['123.456.489-11']['saldo']) {
    //exibeMensagem(mensagem:"Você não pode sacar esse valor");
} else {
    $contasCorrentes['123.456.489-11']['saldo'] -= 500;
}

foreach ($contasCorrentes as $cpf => $conta){
    //exibeMensagem(mensagem:$cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}

//Erro nas linhas comentadas acima, não entendi o motivo do erro