<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    
</head>

<?php
session_start();

 if (isset($_GET['logout']) && $_GET['logout'] == 1) {
     session_destroy();
     header('Location://localhost/2023/Suplements/index.php');
 }

if (!isset($_SESSION['logado'])){
  
    $_SESSION['logado'] = FALSE;
}
// if (!isset($_SESSION['adm'])){
  
//     $_SESSION['adm'] = FALSE;
// }



$lendoCadastrados = file_get_contents(__DIR__ . "./usuarios.json");
$cadastros = json_decode($lendoCadastrados, true);


$pilantra = filter_input_array(INPUT_POST,FILTER_DEFAULT);

if ($pilantra){
    // busca email
        foreach ($cadastros as $cadastro){     
        if($cadastro["email"] == $pilantra["email"] && $cadastro["password"] == $pilantra["password"]){
          
 //           $_SESSION['adm'] = FALSE;
          
            $nome = $cadastro["nome"];
            $_SESSION['mensagem'] = NULL;
            $_SESSION["nome"] = $nome;
            $_SESSION['logado'] = true;
            header('Location://localhost/2023/Suplements/restrito.php');
        break;
    
        // } else {
        // header('Location://localhost/2023/Suplements/index.php'); 
        // }
     }else{

        $email = $cadastro["email"];       
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['mensagem'] = 'email no formato incorreto';
    header('Location://localhost/2023/Suplements/index.php'); 
}
   
        $_SESSION['mensagem'] = 'formulários preenchidos incorretamente';
      // header('Location://localhost/2023/Suplements/index.php');
        
     } 
    }
    }


 
    
?>




<body>
    <div id="box" class="large">
        
        <?php

        
      
        
        
        
        ?>

        </h2>






        


    </div>
</body>
</html>

