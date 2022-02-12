<?php

    class Retangulo{
        private $base;
        private $altura;

        function alteraBase($base){
            $this->base = $base;
        }
        function alteraAltura($altura){
            $this->altura = $altura;
        }
        //Outra opção
        function alteraLados($base, $altura){
            $this->base = $base;
            $this->altura = $altura;
        }

        function retornaBase(){
            return $this->base;
        }

        function retornaAltura(){
            return $this->altura;
        }

        //outra opção
        function retornaLados(){
            $lados = array($this->base, $this->altura);       
            return $lados;
        }

        function calculaArea(){
            return $this->base * $this->altura;
        }

        function calculaPerimetro(){
            return $this->base * 2 + $this->altura*2 ;
        }
    }

    echo "Digite o valor da base: ";
    $base = rtrim(fgets(STDIN));
    echo "Digite a altura: ";
    $altura = rtrim(fgets(STDIN));

    $retangulo = new Retangulo();
    $retangulo->alteraLados($base, $altura);
    echo "Quantidade de Pisos: " . $retangulo->calculaArea(). "\n";
    echo "Quantidade de Rodapés: " . $retangulo->calculaPerimetro();



?>