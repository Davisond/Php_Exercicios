<?php
// Faça uma função que receba como parâmetro um vetor de 10 elementos ($vet),
// preenchido com números gerados aleatoriamente entre -10 e 10. A função deverá
// mostrá-lo na tela de 3 maneiras: da maneira em que foi gerado, em ordem crescente e
// em ordem decrescente. Dica: acesse a página de funções de ordenação do PHP em
// https://www.php.net/manual/pt_BR/array.sorting.php e veja as funções sort e rsort.


$numeros = array();


for ($i=0; $i < 10; $i++) { 
    
    $numeros [$i] = rand (-10, 10);
}




function ordenation ($numeros){
 

foreach ($numeros as $value) {
        echo $value;
        echo '<br>';
    }
    echo '<hr>';


    rsort ($numeros);
foreach ($numeros as $value) {
    echo $value;
    echo '<br>';
}
echo '<hr>';


    sort ($numeros);
foreach ($numeros as $value) {
    echo $value;
    echo '<br>';
}


}

ordenation ($numeros);
//print_r ($numeros);
?>