<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<?php

    $cadastros = array(
        array(
            "id" => 1,
            "nome" => "Davi",
            "idade" => 25,
            "email" => "davisonazevedo05@gmail.com",
            "senha" => "davi",
            "e.civil" => "Solteiro",
            "salario" => 1950
        ),
        array(
            "id" => 2,
            "nome" => "Rafael Cardoso",
            "idade" => 32,
            "email" => "rafacardoso@gmail.com",
            "senha" => "rafacardoso@gmail.com",
            "e.civil" => "Casado",
            "salario" => 5541
        ),
        array(
            "id" => 3,
            "nome" => "Gabriela Schidt",
            "idade" => 21,
            "email" => "gabischidt@gmail.com",
            "senha" => "gabischidt@gmail.com",
            "e.civil" => "Solteira",
            "salario" => 3214
        ),
        array(
            "id" => 4,
            "nome" => "Roberta Oliveira",
            "idade" => 38,
            "email" => "roberta.oliveira@gmail.com",
            "senha" => "roberta.oliveira@gmail.com",
            "e.civil" => "Divorciada",
            "salario" => 4258
        ),
        array(
            "id" => 5,
            "nome" => "Pedro Santos",
            "idade" => 17,
            "email" => "pebolado@gmail.com",
            "senha" => "pebolado@gmail.com",
            "e.civil" => "Solteiro",
            "salario" => 2100
        )
    );

    if (isset($_POST["email"]) && isset($_POST["password"])){
        
        $email = $_POST["email"];
        $password = $_POST["password"];        

        // busca email
        foreach($cadastros as $cadastro){
            if ($cadastro["email"] == $email && $cadastro["senha"] == $password){

                $nome = $cadastro["nome"];

                session_start();
                $_SESSION["nome"] = $nome;
                break;
            }
        }
    }


?>



<body>

    <div id="box" class="large">
        
        <?php

            if(isset($_SESSION["nome"]))
                echo "<h1>Logado com sucesso.</h1>
                    <h2> Bem-vindo " . $_SESSION["nome"];
            else {
                echo "<h1>Nenhum usuário logado.</h1>";
            }
       
       
   if (isset($_SESSION['LOGOUT'])){
    session_destroy();
   
   }
       
?>

        </h2>
        <button class="button" value = "LOGOUT">LOGOUT</button>
        
       
            


    </div>
</body>
</html>
