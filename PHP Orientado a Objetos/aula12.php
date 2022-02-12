<?php
    class quadrado{
       //encapsulamento -- proteger as variaveis da classe
       //public -- acessível em qualquer lugar
       //private -- limita o acesso as variáveis somente dentro da classe
       //protected -- acesso é visivel somente na classe e nas subclasses
        var $tamB; 
        
        //passar valor para atributo /*setter*/
        function mudarLado($tam){
            $this->tamB = $tam;
        }

        //recuperar valor do atributo /*getter*/
        function retornarLado(){            
            return $this->tamB;
        }

        function calcularArea(){
            return $this->tamB * $this->tamB;
        }
    }

    //instancias da classe
    $quadrado1 = new quadrado();
    $quadrado1->mudarLado(25);
    echo $quadrado1->retornarLado();
    echo "<BR>" . $quadrado1->calcularArea(). "m2";

    $quadrado1->tamB = 14; //errado XXXX
    echo $quadrado1->retornarLado();

?>