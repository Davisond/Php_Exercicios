<!--
Faça um algoritmo que gere uma temperatura aleatória em Fahrenheit e calcula a temperatura correspondente em Celsius. Ao final o programa deve exibir as duas temperaturas.
Usar a fórmula: Celsius = (5 * (F-32) / 9).
-->

<?php


$f = rand (0, 1000);

$c = ( 5 * ( $f - 32) / 9); 

$k = $c + 273;


echo 'temperatura aleatória em Fahrenheit = ' . $f . ' em Celsius = ' . $c . ' em Kelvin = ' . $k . '.';

?>

 
