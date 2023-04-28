<?php

$vetor = array(1, 2, 3, 4, 5);
foreach($vetor as $indice => $item){
    echo ' posicao ' . $indice . ' valor ' . $item;
//imprime: posicao 0 valor 1 posicao 1 valor 2 ...
}

//comando continue pula etapa mas continua o programa


    //array em php
$nomes = array();
$nomes = array("tal", "tal");
echo $nomes[0];


    //inprime em estrutura
print_r($nomes);


    //retorna a quantidade de elementos do array
echo count ($nomes);


    //array com array dentro
    $cadastro = array(
        array(
            'nome' => 'joao',
            'idade' => 25,
        ),
        array(
            'nome' => 'pedro',
            'idade' => 29;
        )
        );

        foreach ($cadastro as $item){
            $row = <"div class ='row'>";
                foreach ($item as $campo => $valor){
                    $row .= "<div class='col'>
                    <span>$campo</span>
                    <span class ='value'>$valor</span>
                    </div>";
                };

              
                };
        




?>