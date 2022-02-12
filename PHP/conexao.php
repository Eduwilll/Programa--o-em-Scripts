<?php

    $host = "localhost"; // 127.0.0.1 //servidor
    $usuario = "root"; //usuário banco de dados
    $senha = ""; //senha
    $base = "condominio"; // banco de dados
     
    $conexao = new mysqli($host,$usuario,$senha,$base);//tentar conexao

    if($conexao->connect_errno){//se erro
        die("erro de conexão".$conexao->connect_errno .$conexao->connect_error);
    }
    else{
        echo "conectado com sucesso!";//se ok
    }
    //$conexao->close();

?>