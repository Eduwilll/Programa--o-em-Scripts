<?php

    class bola{

        //atributos
        var $cor;
        var $circuferencia;
        var $meterial;

        //metodos
        function trocarCor($novaCor){
            $this->cor = $novaCor;
        }
        function mostrarCor(){
            echo $this->cor;
        }

    }

    $bola1 = new bola();
    $bola1->trocarCor("Amarelo");
    $bola1->mostrarCor();
    
    $bola1->trocarCor("azul");
    $bola1->mostrarCor();

?>