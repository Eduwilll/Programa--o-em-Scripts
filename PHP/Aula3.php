<?php

    //declaracao de array
    $vetor = array (1,2,3,4, "João"());
    echo $vetor[0]; // imprime 1
    echo $vetor[3]; // Imprime 4
    echo $vetor[4]; // Imprime João
    //colchete vazio adiciona o "test" no ultimo indice do arry dois do "João"
    $vetor[]= "teste";
    $vetor[0]= "Nome";
    $vetor['Nome'] = "Nome";
    $vetor[0][1];
    //vetor associativo
    $vetor = array("nome" => "Carla", "Endereco" => "Rua da Carla", "telefone"=>3);
    echo $vetor[0];
    echo $vetor["Endereco"];

    var_dump($vetor); // Imprime o tipo, indice e valor
    print_r($vetor); //imprime o indice e valor

?>