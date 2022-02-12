<?php

    include "../model/conexao.php";
    include "../model/cliente.php";
    include "variaveis.php";

    $objCliente = new Cliente();
    $dados = $objCliente->listarTodos($conexao);

    $objCliente->setCpf($cpf);
    $objCliente->setNome($nome);
    $objCliente->setEndereco($endereco);
    $objCliente->setTelefone($telefone);
   
    if(isset($_GET['acao'])){ //valores que vieram pela url
        $acao = $_GET['acao'];
        $cpf = $_GET['cpf'];

        if($acao == "editar"){           
            $dadoscpf = $objCliente->listarporCpf($conexao,$cpf);
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
            if($objCliente->excluirCliente($conexao, $cpf)){
                header("location:../view/listardados.php");
            }
        }
    }   elseif(isset($_POST['cpf'])){
       
        if($objCliente->inserirCliente($conexao,$objCliente)){
            header("location:../view/listardados.php");
        }    
    }

    if(isset($_POST['edicao'])){
        
        if($objCliente->atualizarCliente($conexao, $objCliente)){
            header("location:../view/listardados.php");
        }
    }
  

  
   
?>