<?php

    include "conexao.php";
    $cpf = $_GET['cpf'];

    // comando: DELETE FROM tabela WHERE campo=valor
    //excluo o cliente de cpf =  ou informado na url
    $comandosql = "Delete from client where cpf=$cpf";    

    if($conexao->query($comandosql)){
        echo "Excluído com sucesso";
    }


?>