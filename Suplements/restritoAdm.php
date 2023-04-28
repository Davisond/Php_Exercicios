<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Document</title>
<style>
.milagre{
    padding: 25px;
    width:1500px;
    align:center; 
}
.arrumaCard{
    display:flex;
    padding: 25px;
  }



    </style>

</head>
<body>
    

<?php
session_start();

$_SESSION['logado'] = $_SESSION['logado'] ?? NULL; 
// $_SESSION['adm'] = $_SESSION['adm'] ?? NULL;



   if ($_SESSION['logado'] == TRUE){
    echo "<h5>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Bem-vindo " . $_SESSION["nome"] . "</h5>";   
} else{
header('Location://localhost/2023/Suplements/index.php');
}
 

//agora só botar na tela
$_SESSION['mais'] = $_SESSION['mais'] ?? FALSE;
if ($_SESSION['mais'] = TRUE){

  $_COOKIE['novoProduto'] = $_COOKIE['novoProduto'] ?? NULL;
  $_COOKIE['valorNovoProduto'] = $_COOKIE['valorNovoProduto'] ?? NULL; 

  $produto = ($_COOKIE['novoProduto']);
  $valor =  ($_COOKIE['valorNovoProduto']);
  
$_SESSION['mais'] = FALSE;
}



?>


<div class = "milagre">
<nav class="navbar bg-dark" data-bs-theme="dark">
  <!-- <nav class="navbar bg-dark" data-bs-theme="dark"> -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">BodyFuel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admNovoProduto.php">Cadastrar item</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
       
        </li>
      </ul>
    </div>
  </div>
</nav>
</nav>
</div>

<div class = "arrumaCard">

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Card link</a>
  </div>
</div>


<div class="card" style="width: 18rem;">
  <div class="card-body">
    <p class="card-text">bomba</p>
    <a href="" class="card-link">150 pila</a>
  </div>
</div>
<div class="card" style="width: 18rem;">

  <div class="card-body">
    <p class="card-text"> Creatina</p>
    <a href="" class="card-link">90 pila</a>
    
  </div>
</div>

</div>


<script>

var cardNome = "<?php echo $produto; ?>";
var cardValor = "<?php echo $valor; ?>";

var selectCardNome = document.querySelector("p.card-text").innerHTML = cardNome;
var selectCardValor = document.querySelector("a.card-link").innerHTML = cardValor;



document.body.style.backgroundColor = "#B0BAA3";


</script>






</body>
</html>