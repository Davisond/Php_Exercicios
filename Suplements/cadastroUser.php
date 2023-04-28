<?php
include_once "dados.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   
    <title>cadastroUser</title>
</head>
<body>
  
<?php



?>


<form action ="dadosNewUser.php" method="post" id="box">
    <h4> nome:  
    <input type="text" name="nome" placeholder = "nome" required></h4><br>
    <h4> Idade:  
    <input type="text" name="idade" placeholder = "idade" required></h4><br>
    <h4> email:  
    <input type="text" name="email" placeholder = "email" required></h4><br>
    <h4> senha:  
    <input type="password" name="password" placeholder = "password" required></h4><br>
 

    <input type="submit" class="btn btn-outline-dark" name= "Entrar" value = "entrar">
</form>

<script>
document.body.style.backgroundColor = "#B0BAA3";



</script>
