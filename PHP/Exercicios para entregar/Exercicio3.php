<?php 
    $nome = $_POST["nome"];
    $sexo = $_POST["sexo"];
    $idade = $_POST["idade"];

    var_dump ("$nome,$sexo,$idade");

 
    if($sexo == 'Feminino' && $idade <=25 ){
        echo ("$nome foi ACEITA\n");
    }else{
        echo ("$nome NÃO foi ACEITA");
    }
    
?>