<?php

    $nome;
    $sobrenome;
    $idade;
    $endereco;

    echo "Digite seu nome:\n";
    $nome = rtrim(fgets(STDIN));
    echo "Digite sua idade:\n";
    $idade = rtrim(fgets(STDIN));
    echo "Digite seu endereço:\n";
    $endereco = rtrim(fgets(STDIN));

    echo "$nome Mora no endereço: $endereco e tem $idade anos"
?>