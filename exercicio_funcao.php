<?php
$numeros = [];

for($i=1;$i < 11;$i++){
$entry = readline("Digite $i" . "° número");
array_push($numeros,$entry);
}

function contarPositivos(array $positivos):int
{
   $positivo = array_filter($positivos,fn($numero) =>
   $numero > 0); 
   return count($positivo);
}
function contabilizarPares(array $pares):int
{
    $pares = array_filter($pares,fn($numero)=>
    $numero % 2 == 0);
    return count ($pares);
}