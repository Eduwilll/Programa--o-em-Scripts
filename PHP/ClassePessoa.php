<?php

    //palavra chave class <Nome da Class>
    class Pessoa{

        //Atributos iniciados com a palavra chave var
        var $nome;
        var $idade;
        var $cordosOlhos;
        var $cordosCabelos;
        var $sexo;

        //métodos, ações que o objeto executa.
        function imprimeDados(){
            echo $this->nome."\n";
            echo $this->idade."\n";
            echo $this->cordosOlhos."\n";
            echo $this->cordosCabelos."\n";
            echo $this->sexo."\n";
        }
    }

    $pessoa1 = new Pessoa();//instância da classe pessoa
    $pessoa1->nome = "Paulo";
    $pessoa1->idade = 18;
    $pessoa1->sexo = "M";
    $pessoa1->imprimeDados();

    $pessoa2 = new Pessoa();//instância da classe pessoa
    $pessoa2->nome = "ANA";
    $pessoa2->idade = 28;
    $pessoa2->sexo = "F";
    $pessoa2->imprimeDados();

    


?>