<?php

    $ValorDaDivida;
    $DiasDeAtraso;
    $PersentualDaMulta; 
    $ValorDaMulta;
    $TotalPagar;
    $aux;
    
    echo "Digite o valor da Divida:";
    $ValorDaDivida = rtrim(fgets(STDIN));
    echo "Digite digite a quantidade de dias em atraso:";
    $DiasDeAtraso = rtrim(fgets(STDIN));
    echo "Digite digite o persentual da multa:";
    $PersentualDaMulta = rtrim(fgets(STDIN));

    $aux= $PersentualDaMulta * $DiasDeAtraso;
    $ValorDaMulta = ($ValorDaDivida/100) * $aux;
    $TotalPagar = $ValorDaDivida + $ValorDaMulta;
    echo "Valor da Divida: $ValorDaDivida Reais Dias de atraso $DiasDeAtraso Dias Percentual da divida $PersentualDaMulta% total do percentual: $aux% Valor da Multa:$ValorDaMulta Reais Total a pagar: $TotalPagar Reais";
?>