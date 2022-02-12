<!--Chico tem 1,50m e cresce 2 centímetros por 
ano, enquanto Juca tem 1,10m e cresce 3 
centímetros por ano. Construir um algoritmos 
que calcule e imprima quantos anos serão 
necessários para que Juca seja maior que 
Chico-->
<?php
$chico = 1.50;
$juca = 1.10;
var_dump($chico,$juca);
$year=0;
do {
    $chico += 0.2;
    $juca += 0.3;
    $year++;
} while ($juca <= $chico);
pow($chico,2);
echo("Chico:${chico}m , Juca:${juca}m , $year Anos levou para o juca utrapassar o Chigo");
?>
