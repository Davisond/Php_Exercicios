<?php 


    $tabela = array(
        array(
            "id" => 1,
            "nome" => "João Silva",
            "idade" => 25,
            "email" => "joao.silva@gmail.com",
            "e.civil" => "Solteiro",
            "salario" => 1950
        ),
        array(
            "id" => 2,
            "nome" => "Rafael Cardoso",
            "idade" => 32,
            "email" => "rafacardoso@gmail.com",
            "e.civil" => "Casado",
            "salario" => 5541
        ),
        array(
            "id" => 3,
            "nome" => "Gabriela Schidt",
            "idade" => 21,
            "email" => "gabischidt@gmail.com",
            "e.civil" => "Solteira",
            "salario" => 3214
        ),
        array(
            "id" => 4,
            "nome" => "Roberta Oliveira",
            "idade" => 38,
            "email" => "roberta.oliveira@gmail.com",
            "e.civil" => "Divorciada",
            "salario" => 4258
        ),
        array(
            "id" => 5,
            "nome" => "Pedro Santos",
            "idade" => 17,
            "email" => "pebolado@gmail.com",
            "e.civil" => "Solteiro",
            "salario" => 2100
        )
    );


    // código aqui
$save = $_GET['text'];
$gambiarra = 0;    

    foreach ($tabela as $item){
         foreach ($item as $campo => $valor){
        if ($save == $valor){
        print_r ($item);
        $gambiarra = $gambiarra + 1;
        
      }
    };      

};
if ($gambiarra == 0){
    echo 'sem resultados';
}    



// ● Se o usuário digitar um valor de id que não existe no array, a página deve mostrar o
// texto “Sem resultados”

?>