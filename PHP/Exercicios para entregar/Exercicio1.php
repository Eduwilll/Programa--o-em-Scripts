<?php 

   
    $PrimeiroNumero = $_POST["PrimeiroNumero"];
 
    $SegundoNumero = $_POST["SegundoNumero"];

    $aux = $PrimeiroNumero + $SegundoNumero;

    if($aux > 20){
        $aux += 8;
    }else if($aux <= 20){
        $aux -= 5;
    }
    echo("A soma é $aux");
?>