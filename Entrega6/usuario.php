<form action="usuario.php" method="POST">

<?php

// Nome e sobrenome com todos os caracteres em maiúsculo.
// b. Idade (desconsidere o dia e o mês no cálculo. Ex.: Se o usuário nasceu em
// 2021, ele tem 1 ano).

// c. As redes sociais preferenciais. Caso nenhuma tenha sido escolhida, mostre
// uma mensagem compatível.

// d. A senha. Obs.: caso queira um desafio, faça o seguinte: mostre a senha ao
// contrário e com um algarismo numérico aleatório (entre 0-9) entre cada
// caractere. Para isso, crie um arquivo “baguncasenha.php” e faça uma função
// que retorne a senha com a modificação. Para deixar a senha ao contrário, use a
// função strrev.


// $str = $_POST['nome'];
// $str = strtolower($str);

echo strtoupper($_POST['nome']);

echo '<br>';

$trueage = 2023 - $_POST['anoNasc'];

echo 'idade: ' . $trueage . '<br>';

echo " rede social selecionada: " . $_POST['redeSocial'] . "<br>";




if (isset($_POST['monitores'])) {
    echo 'monitor selecionado eh: ';

    foreach($_POST["monitores"] as $key) {
        echo 'monitor: ' . $key . ".";
    }
} else {
    echo 'sem monitor selecionado';
}





?>