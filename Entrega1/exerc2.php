<!-- 
    A fórmula para calcular a área de uma circunferência é: Área = π*R², sendo que o valor de π é 3.14159. 
Gerar um valor aleatório entre 1 e 10 para o raio e efetuar o cálculo da área da circunferência.
Mostrar o valor do raio e da área ao final..
-->




<?php


$raio = rand (1, 10);
$pi = 3.14159;


$area = pow($raio, 2) * $pi; 

echo 'raio = ' . $raio ;
echo '<br>';
echo 'raio ao quadrado = ' . pow($raio, 2);
echo '<br>';
echo 'area = ' . $area;
?>