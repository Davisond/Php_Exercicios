<?php
	



 






    function grava_arquivo($nome, $telefone) {
        $filename = "agenda.txt";
        $texto = $nome . ":" . $telefone . "\n";

        // Adicione o conteúdo da variável $texto no arquivo "agenda.txt".
        // Para isso, use a função file_put_contents com a flag FILE_APPEND.
   

        $caminho = __DIR__ . '/agenda.txt';
        $conteudo = file_get_contents($caminho);
        






    }

	function le_arquivo() {
        $filename = "agenda.txt";
        if(file_exists($filename))

        $texto = file ($filename, FILE_IGNORE_NEW_LINES);
        	// Leia o conteúdo do arquivo usando a função file 
        	// com a flag FILE_IGNORE_NEW_LINES e atribua para a variável $texto.




		else
            $texto = "";
       
        return $texto;
    }

?>