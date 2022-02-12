<?php
    include "../controller/clientController.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Listagem dos clientes</title>
</head>
<body>
<div class="container-fluid">
<h1> Relação de Clientes </h1>
    <button class="btn btn-primary" onclick="document.location='cadastrar.php'">
        Adicionar 
    </button>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">CPF</th>
            <th scope="col">Nome</th>
            <th scope="col">Endereco</th>
            <th scope="col">Telefone</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
<?php
    while($dadoscliente = $dados->fetch_object())//converto cada um dados em um objeto
    {
    ?>
        <tr>
            <th scope="row"><?php echo $dadoscliente->cpf; ?></th>
            <td><?php echo $dadoscliente->nome;?> </td>
            <td><?php echo $dadoscliente->endereco; ?></td>
            <td><?php echo $dadoscliente->telefone; ?></td>

            <td><a onclick="return confirm('Confirma Exclusão!')" href="../controller/clientController.php?cpf=<?php 
            echo $dadoscliente->cpf?>&acao=excluir" >Excluir</a> 

            | <a href="cadastrar.php?cpf=<?php 
            echo $dadoscliente->cpf?>&acao=editar" >Editar</a> </td>

        </tr>   
    <?php
        }
    ?>

    </tbody>
    </table>
</div>
</body>
</html>