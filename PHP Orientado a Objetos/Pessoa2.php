<?php

    class Pessoa2{

        private $nome;
        private $idade;
        private $peso;
        private $altura;

        //getter and setter
        //atribui valor ao atributo
        function setNome($nome){
            $this->nome = $nome;
        }
        function setIdade ($idade){
            $this->idade = $idade;
        }
        function setPeso($peso){
            $this->peso = $peso;
        }
        function setAltura($altura){
            $this->altura = $altura;
        }

        //recupera o valor do atributo
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
            $this->peso = $this->peso - $qtdeQuilos;           
        }

        function crescer(){
            if($this->idade < 18){
                $this->altura = $this->altura + 0.5/100;
            }
        }

    }

    $Joao = new Pessoa2();
    $Joao->setNome("Joao");
    $Joao->setIdade(16);
    $Joao->setPeso(80);
    $Joao->setAltura(1.91);

    echo $Joao->getNome(). "<BR>";
    echo $Joao->getAltura(). "<BR>";
    echo $Joao->getIdade(). "<BR>";
    echo $Joao->getPeso(). "<BR>";

    $Joao->envelhecer();//cresce 0,5
    echo $Joao->getIdade(). "<BR>";
    echo $Joao->getAltura(). "<BR>";

    $Joao->engordar();
    echo $Joao->getPeso(). "<BR>";

    $Joao->engordar(10);
    echo $Joao->getPeso(). "<BR>";
    
    $Joao->emagrecer();
    echo $Joao->getPeso(). "<BR>";

    $Joao->emagrecer(14);
    echo $Joao->getPeso(). "<BR>";

    //joao cresce
    $Joao->crescer();//0,5
    echo $Joao->getAltura(). "<BR>";

?>