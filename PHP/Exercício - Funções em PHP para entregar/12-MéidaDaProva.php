<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" >
        <label for="">Primeira Nota</label>
        <input type="number" name="numero1"><br>
        <label for="">Secunda Nota</label>
        <input type="number" name="numero2"><br>
        <label for="">Terceira Nota</label>
        <input type="number" name="numero3"><br>
        <input type="submit" name="Enviar">
    </form>
</body>
</html>
<?php
// 12.Uma professora, muito legal, fez 3 provas durante um semestre mas só vai levar em conta as duas notas mais altas
// para calcular a média. Faça uma aplicação em PHP (utilize formulário) que peça o valor das 3 notas,
//  mostre como seria a média com essas 3 provas, a média com as 2 notas mais altas, 
//  bem como sua nota mais alta e sua nota mais baixa.
if(isset($_POST['numero1'])){
    $a =($_POST['numero1']);
}
if(isset($_POST['numero2'])){
    $b =($_POST['numero2']);
}
if(isset($_POST['numero3'])){
    $c =($_POST['numero3']);
}
if(isset($a,$b,$c)){
    $mediatres = ($a+$b+$c)/3;
    echo "Nota1= $a<br> Nota2=$b<br> Nota3= $c<br>";
    if($b > $a){//condicao caso $b seja maior que $a.
        $aux= $a; //ele guarda o valor de $a no $aux para depois passar o valor $a para $b;
        $a = $b; //$a recebe o valor de $b
        $b = $aux; //$b adquire o valor de $a que estava guardado no $aux.
    }
    if($c > $a){
        $aux= $a;
        $a = $c;
        $c = $aux;
    }
    if($c > $b){
        $aux= $b;
        $b = $c;
        $c = $aux;
    }
    
    echo "\nmédia das 3 notas:".$mediatres.'<br>';
    echo "\nAs duas Notas mais altas:$a e $b".'<br>';
    $mediadeDois= ($a+$b)/2;
    echo "\nMédia com as Duas notas mais altas ".$mediadeDois.'<br>';
    echo "\nMaior Nota:$a e a Menor Nota:$c".'<br>';
}
?>