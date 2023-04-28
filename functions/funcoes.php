<?php 
function maioridade (&$x){
    if ($x < 18){
        echo '<h1 style="color:red;">' . 'menor idade, necessária assinatura do pai ou responsável' . '</h1>';
    } else {
        echo '<h1 style="color:blue;">' . 'Parabéns, temos aqui um adulto' . '</h1>';
    }
    } 


    function compara ($param1, $param2){
        if ($param1 > $param2){
            echo 'o primeiro numero [' . $param1 . ']' . ' eh maior que o segundo [' . $param2 . ']';
        }else if ($param1 < $param2){
            echo 'o segundo numero [' . $param2 . ']' . ' eh maior que o primeiro [' . $param1 . ']';
        }else if ($param1 == $param2){
            echo 'os dois num sao iguais [' . $param1 . ']';
        }
        }


        






?>



