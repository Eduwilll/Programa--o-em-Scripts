<?php 
    $nome = $_POST["nome"];
    $usuario = $_POST["usuario"];

    
    if($usuario == 'Professor' ){
        echo "\nNome do livro: $nome <br> tipo de usuário: $usuario <br> data de emissão:" . date('d/m/y H:i'); // 29/03/2021
        echo " - Devolução em :". date('d/m/Y ',strtotime('+10 days' ));//soma a patir da data de hoje
    }else{
        echo "\nNome do livro: $nome <br> tipo de usuário: $usuario <br> data de emissão:" . date('d/m/y H:i'); // 29/03/2021
        echo " - Devolução em :" . date('d/m/Y ',strtotime('+3 days' ));//soma a patir da data de hoje     
    }
?>