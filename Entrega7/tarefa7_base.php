<?php
	$file = fopen("generic-food.csv", "r");
	$content = "";
	do {
		$row = fgets($file);
	$vetor = explode(',',$row);

if(isset($vetor[2]) && $vetor [2] == "Fruits") 
		$content .= "<div>$vetor[0]</div>";
	} while ($row);
	echo $content;
	fclose($file);



	// $file = fopen('generic-food.csv', 'r');
	// $string = fgets($file);
	
	// do {
	// $strings = explode (',', $string);
	
	// if (isset($strings[2])){
	// 	$linha = "<div>  $strings[0] </div>";
	// }

	// }while ($string);

	// echo $linha;
	
	
	// fclose ('generic-food.csv') ;
	


?>