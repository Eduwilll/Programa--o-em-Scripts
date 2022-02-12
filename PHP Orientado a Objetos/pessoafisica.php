<?php

include "pessoa.php";

    class PessoaFisica extends Pessoa{
        var $cpf;

        function mudanome($nome){
            $this->nome = $nome;
        }
    }

    $pessoa1 = new PessoaFisica();
    $pessoa1->mudanome("Maria");
  

   $pessoa1->imprimeHello();