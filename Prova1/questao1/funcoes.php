<?php 



	function calcula($texto) {
		strtolower($texto);
		$total = 0;
		
		if (strpos($texto, 'presidente') !== false) {
		$total = $total - 1500;
		} 
		if (strpos($texto, 'astronauta') !== false) {
			number($total = $total - 1000);
			} 
		if (strpos($texto, 'diretor') !== false) {
			$total = $total - 500;
			} 
		if (strpos($texto, 'presidente') !== false) {
			$total = $total - 1500;
		} if (strpos($texto, 'dedicador') !== false) {
			$total = $total + 200;
			} 
		if (strpos($texto, 'desenvolvedor') !== false) {
			$total = $total + 800;
			} 
		if (strpos($texto, 'feliz') !== false) {
			$total = $total + 1000;
			
			
		} 
		return $total;	
	}

	function processa($pontuacao) {
		if ($pontuacao < 0){
			echo 'arrogante';
		} else if ($pontuacao > 0){
			echo 'humilde';
		} else if ($pontuacao == 0){
			echo 'indefinido';
		}

	}


?>
<!-- 
) calcula($texto): retorna a pontuação total de acordo com as palavras citadas na
frase:
i) Presidente: -1500 pontos
ii) Astronauta: -1000 pontos
iii) Diretor: -500 pontos
iv) Dedicado: 200 pontos
v) Desenvolvedor: 800 pontos
vi) Feliz: 1000 pontos
Obs.: a função não deve diferenciar letras maiúsculas e minúsculas (deve aceitar
todas).
b) processa($pontuacao): retorna um termo de acordo com a pontuação da função
anterior:
i) Pontuação positiva: humilde
ii) Pontuação negativa: arrogante
iii) Pontuação igual a zero: indefinido -->





<!--
b) processa($pontuacao): retorna um termo de acordo com a pontuação da função
anterior:
i) Pontuação positiva: humilde
ii) Pontuação negativa: arrogante
iii) Pontuação igual a zero: indefinido -->
