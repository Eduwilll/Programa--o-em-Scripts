<?php

    $host = "localhost"; // 127.0.0.1 //servidor
    $usuario = "root"; //usuário banco de dados
    $senha = "";//senha do usuário, padrão no xampp em branco ou root
    $base = "condominio";//banco de dados

    $conexao = new mysqli($host, $usuario, $senha, $base);//tentar conexão com banco de dados

    $conexao2 = new mysqli($host, $usuario, $senha);//tentar conexão sem informar banco de dados

    if($conexao->connect_errno){//se erro na conexão com banco de dados
        die('Erro de conexão: '.$conexao->connect_errno . '-'. $conexao->connect_error);
    }
    else{
        echo "conectado com sucesso!";//se ok 
    }
    //$conexao->close();//fecho a  conexão

?>