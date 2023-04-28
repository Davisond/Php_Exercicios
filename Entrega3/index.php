<?php 
    
    $vetor = array(
        array(
            'Nome' => 'Davison',
            'Idade' => 21,
            'E-mail' => 'dav@gmail.com',
            'E.Civil' => 'abandonado',
            'Salario' => 'o suficiente pra pagar as conta'
        ),
        array(
                'Nome' => 'Rafao',
                'Idade' => 21,
                'E-mail' => 'rafao@gmail.com',
                'E.Civil' => 'comendo casada',
                'Salario' => 'trabalha de graça'
        ),
        array(
            'Nome' => 'Bruno milico',
            'Idade' => 21,
            'E-mail' => 'milico@gmail.com',
            'E.Civil' => 'casado',
            'Salario' => 'salario de traficante'
        ),
        array(
            'Nome' => 'Pedro delas',
            'Idade' => 21,
            'E-mail' => 'pedro@gmail.com',
            'E.Civil' => 'casado nível 2: Só pode ir na aula e trabalhar',
            'Salario' => 'mesada de rico'
        ),
        array(
            'Nome' => 'Douglas',
            'Idade' => 21,
            'E-mail' => 'dodosocafofo@gmail.com',
            'E.Civil' => 'deixando a vida levar',
            'Salario' => 'mais ou menos a mesma coisa que o Rafa'
        )
        );



?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        td {
            border: 1px solid black;
            width: 50px;
            height: 20px;
            padding: 3px 0;
            text-align: center;
            background-color: rgb(181, 238, 219);
            font-weight: bold;
        }
    </style>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>E-mail</th>
                <th>E.Civil</th>
                <th>Salário</th>
            </tr>
        </thead>
        <tbody>
       
       <?php
        foreach ($vetor as $array) {
            
            echo '<tr>';
            
            foreach ($array as $campo) {
                echo '<td>' . $campo . '</td>';

        }
             echo '</tr>';        
    }
?>
        </tbody>
    </table>
</body>
</html>

