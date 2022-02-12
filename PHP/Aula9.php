<?php

    $frutas = array("Maça","Banana","Pêra");
    $frutas = ["Maça","Banana","Pêra"];

    //vetor associativo
    $frutas = [ "fruta1"=> "Maça", "fruta2"=> "Banana","fruta3"=> "Pêra"];

    //contar os elementos do vetor
    echo count($frutas)."\n"; // retorna valor inteiro;

    //Buscar chave no vetor
    $pessoas = ["3232" => "antoinio", "4141" => "Maria"];

    //isset($pessoas["3232"])? $x =0 : $x = 1;
    //if (Condicao) ? (condicao Verdadeira) : (condicao falsa);
    echo isset($pessoas["3232"]);
    echo isset($pessoas[0]);

    //classificar vetores
    sort($frutas);//ordena pelos elementos
    print_r($frutas);
    
    $frutas = [ "fruta1"=> "Maça", "fruta2"=> "Banana","fruta3"=> "Pêra"];

    ksort($frutas);//ordena pelo indice
    print_r($frutas);

    asort($frutas); // ordena pelos elementos e mantém a chave
    print_r($frutas);
    

    shuffle($frutas);//embaralha o vetor
    print_r($frutas);

    //combinar vetores
    $alunos = ["João", "Carla","pedro"];
    $notas = [10,10,9.5];

    $alunoscomNotas = array_combine($alunos,$notas);
    print_r($alunoscomNotas);

    //Listar elementos de uma coluna especifica
    $cadastro = [
        ["Nome"=> "Joao", "Endereço" => "rua do joao", "idade" => 19],
        ["Nome"=> "Emanuel", "Endereço" => "rua do emanuel", "idade" => 45],
        ["Nome"=> "Carla", "Endereço" => "rua do carla", "idade" => 29]
    ];
    print_r($cadastro);

    $vetorNomes = array_column($cadastro,"Nome");
    print_r($vetorNomes);

    //adiciona elementos no vetor
    array_push($alunos,"Daniele");
    array_push($cadastro,["Nome"=> "Daniele", "Endereço" => "rua do Daniele", "idade" => 49]);

    //exclui elemento do vetor
    array_pop($frutas);//final
    array_shift($frutas);//inicio
    
?>