<?php
//.Crie uma função que receba um valor e diga se é nulo ou não.
//$numero = fgets(STDIN);
//nuloOUnao($numero);
function nuloOUnao($a){

    if($a == 0){
        //echo "é nulo";
        return "Nulo";
    }
    else{
        //echo  "não é nulo";
        return "NotNulo";
    }
}
//echo nuloOUnao($numero);

?>