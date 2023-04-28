<!--Gerar 2 valores aleatórios, no caso variáveis A e B. Efetuar a soma das variáveis A e B armazenando seu resultado na variável X. Apresentar o valor das variáveis A, B e X no final.-->



<?php


$varA = rand (0, 100);
$varB = rand (0,100);

$varX = $varA + $varB;

echo "var a = " . $varA ;
echo '<br>';
echo "var b = " . $varB ;
echo '<br>';
echo "var x = " . $varX ;
?>