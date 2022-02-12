<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>login</title>
</head>
<body>
<form method="post" action="login.php">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <fieldset class="border p-2">
                    <legend class="w-auto">Login</legend> 
                    <div class="form-group">
                        <label for="user" class="form-label">Usuário</label>
                        <input type="text" class="form-control" name="user" id="user"> <br><br> 
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" class="form-control" name="senha" id="senha"> <br><br>   
                        <button class="btn btn-primary" type="submit" value="Logar">Entrar</button>
                        <a href="cadastro.php" >Cadastrar</a>
                    </div>    
                </fieldset>
            </div>
        </div>
    </div>
</form>
</body>
</html>

<?php
session_start();
    if(isset($_POST['user']) && isset($_POST['senha'] )){

        if(isset($_COOKIE["dados"])){

            if($_COOKIE["dados['user']"] == htmlspecialchars($_POST['user'] )) {

                if(($_COOKIE["dados['senha']"]) == htmlspecialchars($_POST['senha'] )) {

                    $_SESSION['login'] = "logado";
                    header("location:index.php");      
                }
            }
        }
    }

?>