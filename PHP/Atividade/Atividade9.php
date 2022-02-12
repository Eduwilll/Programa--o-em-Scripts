<?php

    $KMinicial;
    $KMfinal;
    $KMlitro; // faz 12 km o litro
    $aux;
    
    echo "Digite a Kilometragem inicial:";
    $KMinicial = rtrim(fgets(STDIN));
    echo "Digite digite a kilometragem final:";
    $KMfinal = rtrim(fgets(STDIN));

    $aux= $KMfinal - $KMinicial;
    $KMlitro= $aux / 12;
    echo "KM inicial= $KMinicial KM final= $KMfinal combustivel gasto $KMlitro Litros";
?>