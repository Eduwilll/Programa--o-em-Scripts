<?php
    include "ClassePessoa.php";

    $pessoa3 = new Pessoa();
    $pessoa3->nome = "Joaquim";
    $pessoa3->idade = 42;

    echo $pessoa3->nome;
    $pessoa3->imprimeDados();

?>