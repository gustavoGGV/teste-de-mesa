<?php

function contagemRemocao(&$string, &$c) {
    $contagem = 0;
    $string = str_replace($c, '', $string, $contagem);
    return $contagem;
}
$txt=readline("digite uma frase:");
$caractere=readline("digite um caractere:");
$ocr=contagemRemocao($txt, $caractere);
print "\ntxt mudado: $txt\n";
print "quantidade de vezes que '$caractere' foi removido: $ocr\n";
