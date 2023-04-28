<?php
// Faça uma função "maioridade" que receba o parâmetro Idade. A função deverá verificar
// se a idade é menor ou maior e igual a 18. Se for menor do que 18, escrever na tela:
// "Menor de Idade – É necessária a assinatura do Pai ou Responsável!", em cor
// vermelha. Se for maior ou igual a 18, mostrar a mensagem: "Parabéns, você já é um
// adulto!", em cor azul


$x = rand(15, 22);

function maioridade (&$x){

    if ($x < 18){
        echo '<h1 style="color:red;">' . 'menor idade, necessária assinatura do pai ou responsável' . '</h1>';
    } else {
        echo '<h1 style="color:blue;">' . 'Parabéns, temos aqui um adulto' . '</h1>';
    }

} 
var_dump($x);
maioridade ($x);

?>