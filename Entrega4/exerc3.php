<?php

// Faça uma função "tabuada" que receba como parâmetro um número entre 1 e 10 e
// imprime a tabuada deste número. Teste se o número passado por parâmetro está no
// intervalo permitido e mostre uma mensagem adequada.

$x = rand (1, 10);

function Tabuada($x){

for ($i = 0; $i < 10; $i++){

$result = $x * $i;
echo $x . ' x' . $i . ' =' . $result;
echo '<br>';

}

}

Tabuada ($x);






?>