<?php
//pilares
// 1° encapsulamento
// 2° herança
/*
nome
endereço
telefone
cpf
cnpj

//pessoa //generalizando
nome
endereço
telefone

//pessoa fisica //especializando
cpf

//pessoa juridica filha da classe pessoa
cnpj
*/

    class Pessoa{
        protected $nome;
        protected $endereco;
        protected $telefone;

        function imprimeHello(){
            echo $this->nome . " hello!!!";
        }
    }
    
?>
