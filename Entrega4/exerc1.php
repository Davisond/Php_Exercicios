<?php
// Faça uma função "compara" que receba como parâmetros 2 números aleatórios entre
// 1 e 10 e verifica qual deles é o maior, mostrando uma mensagem adequada. -->




$param1 = rand (1, 10);
$param2 = rand (1,10);



function compara ($param1, $param2){
if ($param1 > $param2){
    echo 'o primeiro numero [' . $param1 . ']' . ' eh maior que o segundo [' . $param2 . ']';
}else if ($param1 < $param2){
    echo 'o segundo numero [' . $param2 . ']' . ' eh maior que o primeiro [' . $param1 . ']';
}else if ($param1 == $param2){
    echo 'os dois num sao iguais [' . $param1 . ']';
}
}

compara ($param1, $param2); 

?>