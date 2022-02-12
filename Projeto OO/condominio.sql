create database condominio;

use condominio;

CREATE TABLE `cliente` (
  `cpf` bigint(20) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `telefone` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE `predio` (
  `numero` int(11) NOT NULL,
  `qtdAndares` int(11) NOT NULL,
  `qtdApartamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cpf`);

ALTER TABLE `predio`
  ADD PRIMARY KEY (`numero`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `predio`
--
ALTER TABLE `predio`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

