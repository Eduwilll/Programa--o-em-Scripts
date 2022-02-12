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
        <label for="">conversão entre as temperatura celcius e farenheit</label>
        <input type="number" name="numero">
        <input type="radio" name="temperatura" value="Celsius" >
        <label for="Feminino">Célsius</label>
        <input type="radio" name="temperatura" value="Farenheit" >
        <label for="Feminino">Farenheit</label><br>
        <input type="submit" name="Enviar">
    </form>
</body>
</html>
<?php
// Crie um aplicativo (utilize formulário) de conversão entre as temperaturas Celsius e Farenheit.
// Primeiro o usuário deve escolher se vai entrar com a temperatura em Célsius ou Farenheit,
// depois a conversão escolhida é realizada através de um comando SWITCH.
// Se C é a temperatura em Célsius e F em farenheit, as fórmulas de conversão são:
// C= 5.(F-32)/9
// F= (9.C/5) + 32

if(isset($_POST['numero'])){
    $valor =($_POST['numero']);
}
if(isset($_POST['temperatura'])){
    $tipo =($_POST['temperatura']);
}

if(isset($tipo)){
    switch ($tipo) {
        case 'Celsius':
            $farenheit = (9*$valor/5)+ 32;
            echo "Conversao de $valor Celsius para farenheit da: $farenheit farenheits";
            break;
        case 'Farenheit':
            $celsius= 5*($valor-32)/9;
            echo "Conversao de $valor Farenheits para celsius da : $celsius Celsius";
    }
}




?>