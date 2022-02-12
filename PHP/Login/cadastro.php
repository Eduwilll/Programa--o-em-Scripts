<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>cadastro</title>
</head>
<body>
<form method="post" action="cadastro.php">
    <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <fieldset class="border p-2">
                    <legend class="w-auto">Cadastro</legend> 
                    <div class="form-group">

                        <label for="nome">Nome: </label>
                        <input class="form-control" type="text" name="nome" id="nome" require></input><br>

                        <label for="email">E-mail: </label>
                        <input class="form-control" type="email" name="email" id="email" require></input><br>

                        <label for="usuario">Usuário: </label>
                        <input class="form-control" type="text" name="user" id="user" maxlenght="20" require></input><br>
                        
                        <label for="senha">Senha</label>
                        <input class="form-control"type="password" name="senha" id="senha" require></input><br><br>

                        <div class="form-check">
                            <button class="btn btn-primary" type="submit" value="Salvar">Cadastra-se</button>
                        </div>
                    </div>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>

<?php

$nome ='';
$email ='';
$user='';
$senha='';

if(isset($_POST['nome'])){
    $nome = ($_POST['nome']);
}
if(isset($_POST['email'])){
    $email = $_POST['email'];
}
if(isset($_POST['user'])){
    $user = $_POST['user'];
}
if(isset($_POST['senha'])){
    $senha = $_POST['senha'];
    $senha = md5($senha);
}
if(isset($_COOKIE['dados'])){
    //header("Location: login.php");
}
else{
    setcookie("dados[nome]", $nome);
    setcookie("dados[email]", $email);
    setcookie("dados[user]", $user);
    setcookie("dados[senha]", $senha);
    //header("Location: login.php");
}
print_r($_COOKIE["dados"]);
?>