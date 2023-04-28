<?php
/*gera aleatoriamente 2 notas de um aluno entra 0 e 10 a seguir 
calcule a media do aluno sabendo que a nota 1 tem peso 3.5 e a nota 2 tem peso 6.5
considerando que a media para aprovacao eh 7.0 mostre no final as duas notas, a media e se o aluno
esta reprovado ou aprovado obs: pesquise as func number_format e round no manual do php e 
entenda a diferença entre ambas
*/



//nota1 tem peso 3,5
$nota1 = rand (0, 10);
$nota1 = ($nota1 * 3.5) / 10;


//nota2 tem peso 6,5
$nota2 = rand (0, 10);
$nota2 = ($nota2 * 6.5) / 10;

//media de aprovação = 7,0
$media = ($nota1 + $nota2);


echo ' nota 1 = ' . $nota1 . ' nota 2 = ' . $nota2. ' media do aluno = ' . round($media);

if (round($media) > 7){
    echo '<br> <h3> aluno aprovado </h3>';
} else {
    echo '<br> <h3> aluno reprovado </h3>';
}
?>