<?php
include_once 'funcoes.php';
    // Importe o arquivo "funcoes.php"



    $texto = le_arquivo();
    if($texto != "") {

        // Mostre na página o nome e o telefone em linhas separadas.
        // Exemplo:
        // 
        // Nome: Sérgio
        // Telefone: 987654321

echo $texto;


    }else {
        echo "Arquivo vazio";
    }
?>
