<?php
//crie uma lagoritimo que leia o nome,
//o enderelo eo telefone do usuário,
//armazene em uma matriz e depois mostre os 

    $cadastro = [
        ["Carla", "Rua da Carla", 123456],
        ["Artur", "Rua do Artur", 123456],
        ["Pocha", "Rua do Poch", 123456]
    ];
    $cadastro = array(
        array("Carla", "Rua da Carla", 123456),//linha[0]
        array("Artur", "Rua do Artur", 7891011),//linha[1]
        array("Pocha", "Rua do Poch", 12131415) // linha[2]
    );
    $cadastro = array(
        array("nome"=>"Carla","Endereco"=> "Rua da Carla","Telefone"=> 123456),//linha[0]
        array("nome"=>"Artur","Endereco"=> "Rua do Artur","Telefone"=> 7891011),//linha[1]
        array("nome"=>"Pocah","Endereco"=> "Rua do Pocah","Telefone"=> 12131415) // linha[2]
    );
    echo 'Sra '.$cadastro[0]["nome"].' mora na '.$cadastro[0]["Endereco"]."\n ";
    echo 'Sr '.$cadastro[1]["nome"].' mora na '.$cadastro[1]["Endereco"]."\n ";
    echo 'Sr '.$cadastro[2]["nome"].' mora na '.$cadastro[2]["Endereco"];

?>