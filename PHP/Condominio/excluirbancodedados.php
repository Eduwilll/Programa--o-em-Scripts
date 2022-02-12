<?php

    //CUIDADOOOOO!!!!!!!!
    include "conexao.php";

    $comandosql = "DROP DATABASE exemploPscript";//exclui o banco de dados e todas as tabelas

    //$conexao2 = objeto de conexão que está no arquivo conexao.php
    if(!($conexao2->query($comandosql))){
        
        echo "Erro ao excluir o banco de dados";
    }


?>