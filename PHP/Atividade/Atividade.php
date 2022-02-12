<?php

    $nome;
    $sobrenome;
    $idade;
    $endereco;

    echo "Digite seu nome:\n";
    $nome = fgets(STDIN);
    echo "Digite seu Sobrenome:\n";
    $sobrenome = fgets(STDIN);
    echo "Digite sua idade:\n";
    $idade = fgets(STDIN);
    echo "Digite seu endereço:\n";
    $endereco = fgets(STDIN);

    echo 'bem vindo' .$nome. $sobrenome
?>