<?php

    define("PI", 3.14);//constante
    $raio = $_POST["raio"];
    $raio = (int)$raio; //converter a string para int
    echo gettype($raio);
    $area = PI * pow($raio,2);//biblioteca math php
    //equivalente a pow($raio,2)--> $raio ** 2; 
    echo "A área é de ${area}m2"//interpolação de variaveis


?>