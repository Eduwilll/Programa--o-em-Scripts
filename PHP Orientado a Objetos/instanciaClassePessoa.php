<?php

    include "classePessoa.php";

    $pessoa3 = new Pessoa();
    $pessoa3->nome = "Joaquim";
    $pessoa3->idade = 42;

    echo $pessoa3->nome ."<BR>";

    $pessoa3->imprimeDados();



?>
10 minutos

Classe Bola: 
Crie uma classe que modele uma bola: 
a. Atributos: Cor, circunferência, material 
b. Métodos: trocaCor e mostraCor 
