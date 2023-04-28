<?php
session_start();



$cadastro = filter_input_array(INPUT_POST,FILTER_DEFAULT);



if(file_exists(__DIR__ . "./usuarios.json")){
    $stringUser = file_get_contents(__DIR__ . "./usuarios.json");
    $arrayUser = json_decode($stringUser, true);
}
$arrayUser[] = $cadastro;
$userJson = json_encode($arrayUser);
$file = fopen(__DIR__ . './usuarios.json','w+');
fwrite($file, $userJson);
fclose($file);




   header('Location://localhost/2023/Suplements/index.php');



?>