<?php

$matriz = array (array(1,2,3,4,5,),
                 array(1,2,3,4,5,),
                 array(1,2,3,4,5,),
                 array(1,2,3,4,5,),
                 array(1,2,3,4,5,));
//print_r($matriz);
for($i = 0; $i < 5; $i++){
    for($j=0; $j < 5; $j++){
        echo "  ".$matriz[$i][$j];
    }
    echo "\n";
}
for($i = 0; $i < 5; $i++){
    for($j=0; $j < 5; $j++){
        //echo " ".$i . $j;
        if($i == $j){
            echo " ".$matriz[$i][$j];
        }else{
            echo " * ";
        }
    }
    echo "\n";
}
?>
