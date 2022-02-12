<?php
    include "../controller/clienteController.php";          
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
    <form action="../controller/clienteController.php" method="post">
    <input type="hidden" name="edicao" value="<?php echo $edicao?>">
    <div class="form-floating mb-3">
    <input type="text" class="form-control" id="cpf" value = "<?php echo $cpf;?>" name="cpf" placeholder="CPF">
    <label for="cpf">CPF do usuário</label>
    </div>
    <div class="form-floating mb-3">
    <input type="text" class="form-control" id="nome" value = "<?php echo $nome;?>"name="nome" placeholder="Nome">
    <label for="nome">Nome</label>
    </div>
    <div class="form-floating mb-3">
    <input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo $endereco;?>"placeholder="Endereço">
    <label for="endereco">Endereço</label>    
    </div>
    <div class="form-floating mb-3">
    <input type="text" class="form-control" id="telefone" name= "telefone" value = "<?php echo $telefone;?>" placeholder="Telefone">
    <label for="telefone">Telefone</label>
    </div>
    <input type="submit" value="Salvar" class="btn btn-primary">
    <input type="reset" value="Limpar" class="btn btn-secondary">
</form>
<div>
</body>
</html>