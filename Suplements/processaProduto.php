<?php



$produto =  $_POST['nomeProduto'];
$valor = $_POST['valorNovoProduto'];
$valor = floatval($valor);


setcookie("novoProduto", $produto);
setcookie("valorNovoProduto", $valor);


$_SESSION['mais'] = TRUE;

header('Location://localhost/2023/Suplements/restritoAdm.php');







?>