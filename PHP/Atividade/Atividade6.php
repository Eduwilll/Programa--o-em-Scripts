<?php

    $real=5.47;
    $dollar;

    echo "Digite a quantidade de dollar para a conversão:";
    $dollar= rtrim(fgets(STDIN));

    $dollar *= $real;

    echo "O valor da conversão: $dollar Reais";

?>