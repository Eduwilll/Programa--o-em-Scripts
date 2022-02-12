<?php

    $ValorLitro;
    $dinheiro;
    $litro;

    echo "Digite o valor do Litro de combustivel:";
    $ValorLitro = rtrim(fgets(STDIN));
    echo "Digite o quanto quer pagar:";
    $dinheiro = rtrim(fgets(STDIN));

    $litro= $dinheiro / $ValorLitro;

    echo "A quantidade é: $litro litros";
?>