<?php
$aux = 0 ;
$matriz = array (array(1,2,3,4,5,),
                 array(1,2,3,7,5,),
                 array(1,2,3,4,5,),
                 array(1,2,3,15,5,),
                 array(1,2,3,4,5,));
//print_r($matriz);
    echo "\n Matriz inteira";
for($i = 0; $i < 5; $i++){
    for($j=0; $j < 5; $j++){
        echo " ".$matriz[$i][$j];
    }
    echo "\n";
}

echo "\n Todos os positivos da matriz";
for($i = 0; $i < 5; $i++){
    for($j=0; $j < 5; $j++){
        if($matriz[$i][$j] % 2 == 0){
        echo " ".$matriz[$i][$j];
        }else{
            echo " * ";
        }
    }
    echo "\n";
}
    echo "\n todos os negativos da matriz";
for($i = 0; $i < 5; $i++){
    for($j=0; $j < 5; $j++){
        if($matriz[$i][$j] % 2 != 0){
        echo " ".$matriz[$i][$j];
        }else{
            echo " * ";
        }
    }
    echo "\n";
}