<?php

    $real=5.20;
    $dollar = $_POST["dollar"];
    $dollar = (int)$dollar;
    echo "A o valor inserido: $$dollar";
    $dollar *= $real;
    $dollar = number_format($dollar,2);//formatar casa decimais
    echo "O valor da conversão: $dollar reais";

?>