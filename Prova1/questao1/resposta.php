<?php
	
	include ('funcoes.php');
	

$string = $_POST['texto'];

$pontuacao = calcula($string);
		
processa($pontuacao); 
	



echo '<br>';
echo 'pontuacao = ' . $pontuacao;
echo '<br>';
?>