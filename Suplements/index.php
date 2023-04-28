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
    <title>Document</title>
    
    
    <style>
.marjona1 {
   
    padding: 25px;
    width:700px;
    align:center;
}    

</style>

</head>
<body>
  
<div class="mb-3 row">

<div class = "all">
<div class = "marjona1">

<form action ="dados.php" method="post" id="box">
<!-- <h4> E-mail: </h4>  -->

<div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="email" placeholder = "email" required>

    </div>
  </div>
  <div class="row mb-3">
 <!-- <h4> senha: </h4> -->
   
 <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
 <input type="password" class="form-control" name= "password" placeholder = "password" required>
 </div>
  </div>
    <input type="submit" class="btn btn-outline-dark" name= "Entrar" value = "entrar">
</div>
</form>

<form action ="cadastroUser.php" method="post" id="box2">
    <br>
<p style="border:25px"> Não possui cadastro? 
<input type="submit" class="btn btn-outline-dark" name= "cadastrar" value = "cadastrar" ></p>



<script>
    document.body.style.backgroundColor = "#B0BAA3";


    </script>
</div>
</div>
</form>





<?php

$_SESSION['mensagem'] = $_SESSION['mensagem'] ?? NULL;

if ($_SESSION['mensagem'] != NULL){
    $mensagem = $_SESSION['mensagem'];
    echo $mensagem;     
}

?>






</body>
</html>