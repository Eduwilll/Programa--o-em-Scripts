
<?php

$Material = $_POST["Massa"];
$segundos =0;
do {
    $Material = $Material * 0.25;
    $segundos = $segundos + 30; 
} while ($Material >= 0.10);
var_dump($segundos);
$horas = floor($segundos / 3600);
$minutos = floor(($segundos - ($horas * 3600)) / 60);
$segundos = floor($segundos % 60);
echo ("Material que sobrou $Material, tempo que durou $horas:$minutos:$segundos");

?>