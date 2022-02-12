<?php
//foreach
/*foreach($nomedomeuarray as $valor){
    
}*/
$frutas = array("maça","pera", "laranja");
foreach($frutas as $frutanome){
    echo $frutanome. "\n";
}

foreach($frutas as &$nomefruta){
    $nomefruta = "maça";
}
print_r($frutas);

$cores = ["azul","amarelo", "verde"];

/*sintaze com indice
foreach($meuvetor as $chave => $valor ){

}*/

foreach($cores as $id => $cor){
    echo "\nelemento na posição [$id] = $cor";
    if($cor == "verde"){
        echo $cor;
    }if($id == 0){
        $cor2 = $cor;
    }
}
echo $cor2;
?>