<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<?php
session_start();


    $cadastros = array(
        array(
            "id" => 1,
            "nome" => "João Silva",
            "idade" => 25,
            "email" => "joao.silva@gmail.com",
            "senha" => 'joao.silva@gmail.com',
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

   
                $_SESSION["nome"] = $nome;
                break;
            }
        }
    }





//Questão 1

    if (isset($_POST["email"]) && isset($_POST["password"])){
    
        if ($_POST["email"] == 'montenegro@gmail.com' && $_POST["password"] == 'griffon'){
            $_SESSION['nome'] = $_POST["email"];
            $_SESSION['pilantra'] = $_SESSION["email"];
            
            
            foreach($cadastros as $cadastro){
                echo "<br>";
              $nome = $cadastro["nome"];
                echo "<br>";
              echo $nome;
                echo "<br>";
            }




     }   
    } 


?>



<body>

    <div id="box" class="large">
        
        <?php
               
          


            if (isset($_SESSION["nome"]))
                echo "<h1>Logado com sucesso.</h1>




                    <h2> Bem-vindo " . $_SESSION["nome"];
            $_SESSION['pilantra'] = $_SESSION["nome"];
            
            //Questão 1, campos vazios
                        if (empty($_POST["email"]))
                        echo '<h1> campo de e-mail obrigatório </h1>';
                        
                      
                    if (empty($_POST["password"]))
                            echo '<h1> campo de senha obrigatório </h1>';  
                     if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) 
                    echo("este email não é válido");
                        
                    if ($_POST["email"] == 'montenegro@gmail.com' && $_POST["password"] == 'griffon'){
                        echo '<h1>adm logado</h1>';
                    
                    }
                    if (empty($_POST["password"]) &&(empty($_POST["email"])))
                echo "<h1>Nenhum usuário logado.</h1>";
            
        ?>

        </h2>
        <form action="logout.php" method="post" >
            <button type="submit" class="button">LOGOUT</button>
        </form>
    </div>
</body>
</html>
