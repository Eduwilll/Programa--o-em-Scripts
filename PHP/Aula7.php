<?php

//somatorio com recursao
//1+2+3+4+5
function soma($numero){
    if($numero==1)
        return 1;
    else
        return $numero + soma($numero -1);
}   

echo soma(5);

function fatorial($numero){
    if($numero<0){
        return-1;
    }  
    if($numero<=1){
        return 1;
    }
    return$numero*fatorial($numero-1);
}
    echo "O fatorial de 3 é " . fatorial(3);
    echo "<br>O fatorial de 4 é " .fatorial(4);
    echo "<br>O fatorial de 5 é " . fatorial(5);
?>