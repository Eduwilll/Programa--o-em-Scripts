<?php

    include "conexao.php";

    //projeto
    // $id = $_POST['id'];
    // $nome = $_POST['nome'];

    $id = 3;
    $nome = "Daniel Sam";
    $endereco = "Rua do Sam";
    $telefone = "(11) 1111-1111";

    //$conexao é o objeto de conexao que já tem o banco de dados
    //insert into tabela (campos) values (valores)
    $comandosql = "INSERT INTO client
     (cpf, nome, endereco, telefone) 
     VALUES ($id, '$nome', '$endereco', '$telefone')";
     //valores do tipo string precisam estar entre aspas simples
     //inserir datas aaaa-mm-dd '2021-02-14'

    if(!($conexao->query($comandosql))){
        echo $comandosql;
        echo "Erro ao inserir os dados";
    }


?>