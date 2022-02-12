<?php

    include "conexao.php";

    //objeto de conexão que não tem banco de dados
    $conexao2->select_db("condominio");//escolher o banco de dados que vai executar o comando
    //criar a definição das tabelas
    $comandosql = "CREATE TABLE cliente2 (
        cpf bigint(20) NOT NULL,
        nome varchar(50) NOT NULL
      )";

    $conexao2->query($comandosql);


?>