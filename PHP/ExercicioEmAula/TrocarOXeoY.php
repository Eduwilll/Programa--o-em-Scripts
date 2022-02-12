<?php
    //
    $vetor = array (5,10);

    //
    $aux = $vetor[0];//recebe o valor de X
    $vetor[0]= $vetor[1];//Recebe o valor de Y
    $vetor[1]= $aux;

    //Usando vetor associativo
    $vetor = array ( "X" => 5, "Y" => 10);
    $vetor ["aux"] = $vetor["X"];
    $vetor ["X"] = $vetor["Y"];
    $vetor ["Y"] = $vetor["aux"];

    var_dump($vetor);
    print_r($vetor);
?>