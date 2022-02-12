<?php

    class retangulo {
        private $base;
        private $altura;

        function alteraBase($base){
            $this->base = $base;
        }
        
        function alteraAltura($altura){
            $this->altura = $altura;
        }

        function alteraLados($base,$altura){
            $this->base = $base;
            $this->altura = $altura;
        }

        function retornaBase(){
            return $this->base;
        }

        function retornaAlura(){
            return $this->altura;
        }

        function retornaLados(){
            $lados= array_push($lados, $this->base, $this-> altura);
            return $lados;
        }

        function calculaArea(){
            return $this->base * $this->altura;
        }
        
        function calculaPerimetro(){
            return $this->base * 2 + $this->altura * 2;
        }
    }

    echo "Digite o valor da base: ";
    $base = rtrim(fgets(STDIN));
    echo "Digite a altura: ";
    $altura = rtrim(fgets(STDIN));

    $retangulo = new Retangulo();
    $retangulo->alteraLados($base,$altura);
    echo "Quantidade de Pisos: " . $retangulo->calculaArea(). "\n";
    echo "quantidade de radapes:" ; $retangulo->calculaPerimetro();


?>