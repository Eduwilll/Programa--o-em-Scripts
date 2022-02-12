<?php

//palavra chave class nomedaclasse{

//}
class Pessoa{

    //atributos iniciados com a palavra chave var
    var $nome;
    var $idade;
    var $cordosOlhos;
    var $cordosCabelos;
    var $sexo;

    //métodos, ações que o objeto executa
    function imprimeDados(){
        echo $this->nome ."<BR>";
        echo $this->idade."<BR>";
        echo $this->cordosOlhos."<BR>";
        echo $this->cordosCabelos."<BR>";
        echo $this->sexo."<BR>";
    }

}

//instância da classe pessoa
$pessoa1 = new Pessoa(); 
//atribuindo valores
$pessoa1->nome = "Paulo";
$pessoa1->idade = 18;
$pessoa1->sexo = "M";
//acessando os métodos da classe
$pessoa1->imprimeDados();

$pessoa2 = new Pessoa();
$pessoa2->nome = "Ana";
$pessoa2->idade = 27;
$pessoa2->cordosOlhos = "Preto";
$pessoa2->imprimeDados();

//acessando os atributos da classe
$idade = $pessoa2->idade;
echo $idade;
echo $pessoa2->nome;




?>