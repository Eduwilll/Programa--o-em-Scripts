<?php

    include "../model/conexao.php";
    include "../model/client.php";
    $cpf = isset($_POST['cpf'])?$_POST['cpf']:"";
    $nome = isset($_POST['nome'])?$_POST['nome']:"";
    $endereco = isset($_POST['endereco'])?$_POST['endereco']:"";
    $telefone = isset($_POST['telefone'])?$_POST['telefone']:"";

    $objClient = new client();
    $dados = $objClient->listarTodos($conexao);


    $objClient->SetCpf($cpf);
    $objClient->SetNome($nome);
    $objClient->setEndereco($endereco);
    $objClient->setTelefone($telefone);

    

    if(isset($_GET['acao'])){ // valores que vieram pela url
        $acao = $_GET['acao'];
        $cpf = $_GET['cpf'];

        if($acao == "editar"){
            $dadoscpf = $objClient->listarporCpf($conexao,$cpf);
            while($dadoscliente = $dadoscpf->fetch_object())//converto cada um dados em um objeto
            {
                //variáveis que serão atribuidas nos values dos campos
                $cpf = $dadoscliente->cpf;
                $nome = $dadoscliente->nome;
                $endereco = $dadoscliente->endereco;
                $telefone = $dadoscliente->telefone;
                $edicao = true;
    
            }
        }
        elseif($acao == "excluir"){
            if($objClient->excluirClient($conexao, $cpf)){
                header("location:../view/listardados.php");
            }
        }
    }   elseif(isset($_POST['cpf'])){
       
        if($objClient->inserirClient($conexao,$objClient)){
            header("location:../view/listardados.php");
        }    
    }

    if(isset($_POST['edicao'])){
        
        if($objClient->atualizarClient($conexao, $objClient)){
            header("location:../view/listardados.php");
        }
    }
?>