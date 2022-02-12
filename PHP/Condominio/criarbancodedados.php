<?php
    
    include "conexao.php";

    $comandosql = "CREATE DATABASE exemploPscript";//comandos em sql
    
    if(!($conexao2->query($comandosql))){//verdeiro ou falso
        echo "Erro ao criar banco de dados";//banco de dados já existe ou algum problema na criação
    }       

?>