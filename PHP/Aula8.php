<?php

$nome = "  eduardo fabricio  ";

//nomedafuncao(argumentos)
//deixa a palavra na variavel $nome em MAIUSCULO
echo strtoupper($nome)."\n";
//deixa a palavra na variavel $nome em minusculo
echo strtolower($nome)."\n";
//primeiro caracter em maiusculo
echo ucfirst($nome)."\n";
//primeiro caracter de cada palavra em maiusculo
echo ucwords($nome)."\n";
//tira os espacos antes e depois da string
echo ltrim($nome)."\n";
//converte em harsh
echo md5($nome)."\n";
//criptografia
$senha = "123456";
$chavedeseguranca="65as@13a6";
$senhacriptografada = crypt($senha,$chavedeseguranca);
echo "$senhacriptografada"."\n";
//e
echo hash("sha512",$senha)."\n";
//Substitui caracteres por outros
$substituicaodecaracteres = str_replace(" ","|",$nome);
echo $substituicaodecaracteres."\n";
//conta quantos caracteres tem dentro de uma string
echo strlen($substituicaodecaracteres)."\n";
//mostra apenas o caracteres desejado.
echo substr($substituicaodecaracteres,0,4)."\n";
//apaga uma sting da memória

//transformando uma string em array
$frutas = "banana-pera-maça";
$arrayfrutas= explode("-", $frutas);
print_r($arrayfrutas);
//tanformando uma array em string
implode("-", $arrayfrutas);
echo $arrayfrutas;
?>