
<?php
//exemplo de função em php
function calculaQuadrado ( $numb ) {


    //Melhor função de todas
    global static $numero = (int)$numb;

    return $numb * $numb;
}

echo calculaQuadrado(5);







//variaveis estáticas são variaveis que mantem o valor da última execução da função

function andar($passo){

    static $soma = $soma + $passo;

}return $soma;


echo andar (1);
echo andar (10);







//passagem por referência usa o ponteiro pra ocupar somente um espaço de memória

$valor1 = 10;

    function soma (&$valor1);

    $soma += &$valor1;

?>
