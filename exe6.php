<?php

$n=[
    [1, 3, 5],
    [7, 9, 11],
    [13, 15, 17]
];
$soma=0;
foreach ($n as $l) {
    foreach ($l as $numero) {
    $soma += $numero;
    }
}
print "Somando os números da matriz, obtemos: " . $soma;
