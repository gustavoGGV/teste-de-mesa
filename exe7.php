<?php

$n = [];
for ($x=0 ; $x<3 ; $x++) {
    for ($y=0 ; $y<5 ; $y++) {
    print "Valor da posição [$x][$y]: ";
    $n[$x][$y]=intval(readline());
    }
}
for ($x=0 ; $x<3 ; $x++) {
    for ($y=0 ; $y<5 ; $y++) {
        if ($n[$x][$y]%2==0) {
            print "\nNúmero par {$n[$x][$y]} / Posição: [$x][$y]\n";
        }
    }
}
