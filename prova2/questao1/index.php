<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <form action="back.php" method="post" id="box">
        <h1>Login</h1>
        <?php
        session_start();
        // Mostre o último usuário logado.
        // Obs.: Será necessário fazer alterações em outras partes do código.
        
        if(isset($_SESSION['pilantra'])){
            echo $_SESSION['pilantra'];
        }

        ?>

        <span>E-mail</span>
        <input id="email" name="email" class="text" type="text">
    
        <span>Senha</span>
        <input id="password" name="password" class="text" type="password">
    
    <input type="submit" class="button">


</form>
    
</body>
</html>
