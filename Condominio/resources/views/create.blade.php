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
<h1> @(isset($cliente))Editar Cliente @else Cadastro de Cliente </h1>
    @if(isset($cliente))
    <form action="form-car" id="form-edit" method="post" ></form>
    <form action="../controller/clienteController.php" method="post">
    <input type="hidden" name="edicao" value="">
    <div class="form-floating mb-3">
    <input type="text" class="form-control" id="cpf" value = "" name="cpf" placeholder="CPF">
    <label for="cpf">CPF do usuário</label>
    </div>
    <div class="form-floating mb-3">
    <input type="text" class="form-control" id="nome" value = "" name="nome" placeholder="Nome">
    <label for="nome">Nome</label>
    </div>
    <div class="form-floating mb-3">
    <input type="text" class="form-control" id="endereco" name="endereco" value="" placeholder="Endereço">
    <label for="endereco">Endereço</label>    
    </div>
    <div class="form-floating mb-3">
    <input type="text" class="form-control" id="telefone" name= "telefone" value = "" placeholder="Telefone">
    <label for="telefone">Telefone</label>
    </div>
    <label for="id_predio">Predio</label>
        <select class="form-control" id="id_predio" name="id_predio">
            <option value=""></option>
         
            <option value=""></option>
         
        </select>
    <input type="submit" value="Salvar" class="btn btn-primary">
    <input type="reset" value="Limpar" class="btn btn-secondary">
</form>
<div>
</body>
</html>