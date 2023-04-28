<?php

function exibeParametros(){

    $parametros = func_get_args();


    foreach($parametros as $posicao => $valor ){

        echo 'parametro ' . $posicao . ': ' . $valor . '<br>';
    }
}

exibeParametros('valor 1 ', 'valor 2 ', 'valor 3 ');










?>