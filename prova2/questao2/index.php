<?php

    // Importe o arquivo "funcoes.php"
include_once 'funcoes.php';





    // Chame a função grava_arquivo com os argumentos corretos. 
    // Dica: os argumentos vêm do formulário no final deste arquivo.





?>

<form method="post" action="index.php">
    Nome: <input type="text" name="nome" id="nome">
    <br><br>
    Telefone: <input type="text" name="telefone" id="telefone">
    <br><br>
    <input type="submit">
</form>

<a href="mostra.php">Mostrar agenda<a/>


