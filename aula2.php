

<?php


$nota1 = rand (0, 10);
$nota2 = rand (0,10);






$media = ($nota1 + $nota2)/2; 

if ($media < 3)
    echo "<h1> rodaste </h1>";

elseif ($media < 5 && $media > 3)
    echo "<h1> ainda rodaste </h1>";

elseif ($media < 7 && $media > 5)
    echo "<h1> tá bom até </h1>";

elseif ($media < 8 && $media > 7)
    echo "<h1> ok </h1>";

else "<h1 brabo d+ </h1>"
 


?>

 
