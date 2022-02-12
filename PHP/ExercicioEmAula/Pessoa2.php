<?php

    class Pessoa2{

        private $nome;
        private $idade;
        private $peso;
        private $altura;

        //getter and setter
        function setNome($nome){
            $this->nome = $nome;
        }
        function setIdade($idade){
            $this->idade = $idade;
        }
        function setPeso($peso){
            $this->peso = $peso ;
        }
        function setAltura($altura){
            $this->altura = $altura ;
        }

        function getNome(){
            return $this->nome;
        }
        function getIdade(){
            return $this->idade;
        }
        function getPeso(){
            return $this->peso;
        }
        function getAltura(){
            return $this->altura;
        }


        function envelhecer(){
            $this->idade = $this->idade + 1;
            $this->crescer();
        }
        function engordar($qtdeQuilos = 1){
            $this->peso = $this->peso + $qtdeQuilos;
        }
        function emagrecer($qtdeQuilos = 1){
            $this->idade = $this->peso + 1;
        }
        function crescer(){
            if($this->idade < 21){
                $this->altura = $this->altura + 0.5/100;
            }
        }
        
    }


    $joao = new Pessoa2();
    $joao->setNome("Joao");
    $joao->setIdade(21);
    $joao->setPeso(80);
    $joao->setAltura(1.91);

    echo $joao->getNome(). "<BR>";
    echo $joao->getIdade(). "<BR>";
    echo $joao->getPeso(). "<BR>";
    echo $joao->getAltura(). "<BR>";

?>