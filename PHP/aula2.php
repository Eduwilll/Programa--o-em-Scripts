<?php
    //saida
    echo "Digite seu nome:\n";

    //variaveis
    $nome;
    $sobrenome;
    $idade;
    $endereco;
    //entrada
    $nome = fgets(STDIN);
    $sobrenome = fgets(STDIN);
    $idade = fgets(STDIN);
    $endereco = fgets(STDIN);
    /*Comentário*/
    //readline();
    //saida com variavel
    echo "bem vindo $nome"; //concatenar forma 1
    #echo 'bem vindo'.$nome. 'voce chegou ' // concatenar forma2
?>