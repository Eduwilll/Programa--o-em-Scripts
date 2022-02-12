<?php
    include "conexao.php";

    
    $cpf = $_POST['cpf'];
    $nome =$_POST['nome'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];


    //UPDATE nometabela SET campo=valor, outrocampo=outrovalor WHERE campo=valor
    $comandosql = "Update client set nome='$nome', endereco = '$endereco',
    telefone='$telefone' where cpf=$cpf";

   if($conexao->query($comandosql)){
       echo 'Dados atualizados com sucesso!!!!';
   }

?>