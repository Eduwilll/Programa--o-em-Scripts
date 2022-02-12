<?php
//pilares da oo
//1º encapsulamento 
//2º herança

/*
//pessoa //generalizando
nome
endereco
telefone


//pessoa fisica filha da classe pessoa //especializando
cpf


//pessoa juridica filha da classe pessoa
cnpj
*/
class Pessoa{
    protected $nome;
    protected $endereco;
    protected $telefone;

    function imprimeHello(){
        echo $this->nome . " hello!!!!";
    }
}

?>
