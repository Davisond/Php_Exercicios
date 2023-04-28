<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Logout</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>

    <div id="box" class="large">
        
        <?php

        session_start();

        if(!isset($_SESSION['nome'])) {
            echo "Não há sessão ativa";
        } else {
            session_destroy();
            echo "Sessão terminada, faça login novamente";
        }
           
        ?>

        <a href="index.php">Login<a/>

    </div>

</body>
</html>
