<?php

    class Cliente{
        private $cpf;
        private $nome;
        private $endereco;
        private $telefone;
     

        /**
         * Get the value of cpf
         */ 
        public function getCpf()
        {
                return $this->cpf;
        }

        /**
         * Set the value of cpf
         *
         * @return  self
         */ 
        public function setCpf($cpf)
        {
                $this->cpf = $cpf;

                return $this;
        }

        /**
         * Get the value of nome
         */ 
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         *
         * @return  self
         */ 
        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of endereco
         */ 
        public function getEndereco()
        {
                return $this->endereco;
        }

        /**
         * Set the value of endereco
         *
         * @return  self
         */ 
        public function setEndereco($endereco)
        {
                $this->endereco = $endereco;

                return $this;
        }

        /**
         * Get the value of telefone
         */ 
        public function getTelefone()
        {
                return $this->telefone;
        }

        /**
         * Set the value of telefone
         *
         * @return  self
         */ 
        public function setTelefone($telefone)
        {
                $this->telefone = $telefone;

                return $this;
        }

        public function listarTodos($conexao){
            $comandosql = "Select * from client";
            $dados = $conexao ->query($comandosql);
            return $dados;         
        }
        public function fecharConexao($conexao, $dados){
            $dados ->free_result();
            $conexao->close();            
        }

        public function inserirCliente($conexao, $obj){
           $comandosql = "Insert into client (cpf, nome, endereco, telefone)
           values($obj->cpf, '$obj->nome', '$obj->endereco', '$obj->telefone')";
           echo $comandosql;
           if($conexao->query($comandosql))
                return true;
        }

        public function listarporCpf($conexao, $cpf){
           $comandosql = "Select * from client where cpf = $cpf";     
           $dados = $conexao->query($comandosql);
           return $dados;
        }

        public function atualizarCliente($conexao, $obj){
           $comandosql = "Update client set 
                cpf = $obj->cpf,
                nome= '$obj->nome',
                endereco = '$obj->endereco',
                telefone = '$obj->telefone' WHERE cpf = $obj->cpf";
         if($conexao->query($comandosql))     
                return true;
        }

        public function excluirCliente($conexao, $cpf){
           $comandosql = "Delete from client WHERE cpf = $cpf";
           if($conexao->query($comandosql))
                return true;
        }

    }

?>