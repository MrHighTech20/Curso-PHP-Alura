<?php

$idadeList = [20, 22, 18, 23, 30, 40, 19];

list($idadeVinicius, $idadeJoao, $idadeMaria) = $idadeList;

$idadeList[] = 20;

foreach ($idadeList as $idade){
    echo $idade . PHP_EOL;
}

