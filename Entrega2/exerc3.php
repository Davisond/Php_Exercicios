<?php
/*construa um algoritimo que gere tres numeros inteiros entre 0 e 50 
e imprima na tela qual o menor numero deles ainda caso o menor numero seja maior que 10
imprima também a seguinte mensagem " o numero eh maior do que 10"
*/
intval ($nota1 = rand (0, 50));
intval ($nota2 = rand (0,50));
intval ($nota3 = rand (0, 50));

$menorNum = $nota1;
 
if ($nota2 < $nota1){
$menorNum = $nota2;
}

if ($nota3 < $nota1){
$menorNum = $nota3;
}
echo 'menor numero = ';
var_dump($menorNum);
echo '<br>';
echo 'nota1 ';
var_dump($nota1);
echo '<br>';
echo 'nota2 ';
var_dump($nota2);
echo '<br>';
echo 'nota3 ';
var_dump($nota3);


if ($menorNum > 10){
    echo '<h3> menor numero é maior q 10 </h3>';
}

?>