<?php
//elabora um algoritimo que gere um numero aleatorio entre 1 e 10 e imprima o valor gerado
//junto com uma das msg "numero maior q 5 ou numero menor que 5


$numb = rand (1, 10);

if ($numb > 5) {
    echo "number > 5";
} elseif ($numb == 5) {
    echo "number = 5";
} else{
    echo "number < 5";
}
?>