<!-- 
Classe Bola: 
Crie uma classe que modele uma bola: 
a. Atributos: Cor, circunferência, material 
b. Métodos: trocaCor e mostraCor  -->

<?php

//classe estrutura, maquete do objeto
class Bola{
    //atributos
    var $cor;
    var $circunferencia;
    var $material;

    //métodos
    function trocarCor($novaCor){
        $this->cor = $novaCor;
    }

    function mostrarCor(){
        echo $this->cor. "<BR>";
    }
}

//objeto é uma instância da classe
$bola1 = new Bola();
$bola1->trocarCor("Amarelo");
$bola1->mostrarCor();

$bola1->trocarCor("Azul");
$bola1->mostrarCor();


// => vetor associativo $numeros = array("Num1"=>"valor")
// -> acesso ao atributo da classe 

?>