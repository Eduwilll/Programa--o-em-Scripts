<?php
    
    $salario;
    $percentual;
    $SalarioReajustado;
    $aux;

    echo "Digite o salário:";
    $salario= rtrim(fgets(STDIN));
    echo "Digite o percentual de reajuste:";
    $percentual= rtrim(fgets(STDIN));

    $aux = ($salario/100)* $percentual;
    $SalarioReajustado= $salario + $aux;

    echo "salário: $salario Reais percentual do reajuste: $percentual% Salário reajustado: $SalarioReajustado Reais ";
?>