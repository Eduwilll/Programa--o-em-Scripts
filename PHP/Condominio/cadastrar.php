<?php
    include "conexao.php";

    $acao = "inserirdados.php";

    if(isset($_GET['cpf'])){//caso esteja em modo de edição
        $acao = "atualizardados.php"; //mudo a ação

        $cpf = $_GET['cpf']; //crio variável com o cpf
        //listo o cliente especifico caso esteja editando
        $comandosql = "Select * from client where cpf = $cpf";
        $dados = $conexao ->query($comandosql);//retorna uma tabela
          while($dadoscliente = $dados->fetch_object())//converto cada um dados em um objeto
        {
            //variáveis que serão atribuidas nos values dos campos
            $cpf = $dadoscliente->cpf;
            $nome = $dadoscliente->nome;
            $endereco = $dadoscliente->endereco;
            $telefone = $dadoscliente->telefone;

        }
    }
    
    
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Cadastrar</title>
</head>
<body>
<div class="container-fluid">
<h1> Cadastro de Clientes </h1>
    <form action="<?php echo $acao; ?>" method="post">
    <div class="form-floating mb-3">
    <input type="text" class="form-control" id="cpf" value = "<?php echo isset($cpf)?$cpf:"";?>" name="cpf" placeholder="CPF">
    <label for="cpf">CPF do usuário</label>
    </div>
    <div class="form-floating mb-3">
    <input type="text" class="form-control" id="nome" value = "<?php echo isset($cpf)?$nome:"";?>"name="nome" placeholder="Nome">
    <label for="nome">Nome</label>
    </div>
    <div class="form-floating mb-3">
    <input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo isset($cpf)?$endereco:"";?>"placeholder="Endereço">
    <label for="endereco">Endereço</label>    
    </div>
    <div class="form-floating mb-3">
    <input type="text" class="form-control" id="telefone" name= "telefone" value = "<?php echo isset($cpf)?$telefone:"";?>" placeholder="Telefone">
    <label for="telefone">Telefone</label>
    </div>
    <input type="submit" value="Salvar" class="btn btn-primary">
    <input type="reset" value="Limpar" class="btn btn-secondary">
</form>
<div>
</body>
</html>