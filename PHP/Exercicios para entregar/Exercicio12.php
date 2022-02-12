<?php

$a = $_POST["Palavra"];

//var_dump($a);

for($i = 1; $i <= 4; $i++) {
    for($c = 1; $c <= $i; $c++) {
        echo (" $a");
        
    }
    echo "<br>";
}
 
?>