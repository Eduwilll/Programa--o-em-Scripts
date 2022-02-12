<?php

    $numero;

    echo "Digite sua o numero:\n";
    $numero = rtrim(fgets(STDIN));

    $numb1 = $numero + 1;
    $numb2 = $numb1 + 1;
    $numb3 = $numero - 1;
    $numb4 = $numb3 - 1;

    echo "Numero:$numero Sucessores:$numb1,$numb2 Antecessores:$numb3,$numb4"
?>