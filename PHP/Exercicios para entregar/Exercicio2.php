<?php 
   

    $a = $_POST["Numero"];


    if($a % 10 == 0 ){
        echo (" $a é divisivel por 10, 5 e 2\n");
    }else if($a % 5 == 0){
        echo (" $a é divisivel por 5\n");
    }else if($a % 2 == 0){
        echo (" $a é divisivel por 2\n");
    }else {
        echo(" \n não é divisivel por 10, 5, nem 2\n");
    }
?>