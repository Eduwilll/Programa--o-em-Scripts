<?php
    
    class quadrado {
        
        //encapsulamento -- proteger as variaveis da classe
        //public -- acessível em qualquer lugar
        //private -- limite o acesso das variaveis somente dentro da classe
        //protected -- acesso é visivel somente na classe e nas subclasses

        var $tamB;

        //passar valor para atributo /*setter*/
        function mudarLado(){
            $this->tamb = $tam;
        }
        //recuperar valor no atributo /*getter*/
        function retornaLado(){
            echo $this->tamB;
        }
        function calcularArea(){
            return $this->tamB *  $this->tamB;
        }
    }
    //instancias de classe
    $quadrado1 = new quadrado();
    $quadrado1-> mudarLado(25);
    echo $quadrado1-> retornaLado();
    echo "<BR>" . $quadrado1->calcularArea()."m2";

    $quadrado1->tamB = 14; //errado XXXX

?>