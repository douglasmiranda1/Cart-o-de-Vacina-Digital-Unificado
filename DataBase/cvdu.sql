-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02-Jun-2021 às 18:14
-- Versão do servidor: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvdu`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `codFuncionario` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `rg` varchar(13) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `especialidade` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`codFuncionario`, `nome`, `rg`, `cpf`, `especialidade`) VALUES
(1, 'Luis Fernando Silva', '15.786.421-35', '254.265.856-79', 'Gerente'),
(2, 'Juliana Ribeiro Mendes', '15.124.126-12', '555.555.555-55', 'Gerente'),
(3, 'Lucas Melo Dias', '85.765.965-42', '758.556.854-82', 'Aplicador'),
(4, 'Thomas Figueredo', '12.345.678-91', '123.456.789-12', 'Aplicador'),
(5, 'Thiago Teixeira Cintra', '12.457.898-65', '987.654.321-65', 'Aplicador'),
(6, 'Alexandre Simao Queiroz', '77.777.777-77', '777.777.777-77', 'Aplicador'),
(7, 'Andre Figueiredo Souza ', '85.296.374-14', '852.963.741-42', 'Aplicador'),
(8, 'Alessandra Paes Negrini', '88.888.888-88', '888.888.888-88', 'Gerente'),
(9, 'Caio Oliveira Santana', '66.666.666-66', '666.666.666-66', 'Gerente'),
(10, 'Pamela Oliveira Matos', '33.333.333-33', '333.333.333-33', 'Aplicador'),
(11, 'Gabriela Santos Mendonca', '44.444.444-44', '444.444.444-44', 'Gerente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `codPaciente` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `rg` varchar(13) NOT NULL,
  `dataNascimento` varchar(10) NOT NULL,
  `nSus` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`codPaciente`, `nome`, `rg`, `dataNascimento`, `nSus`) VALUES
(1, 'Ana Claudia Soares', '15.456.789-12', '17/09/1985', '555 5555 5555 5554'),
(2, 'Amanda Pires Vasconcelos', '20.891.420-33', '20/01/2000', '555 5555 5555 5554'),
(3, 'Mirela Bitencourt Paes', '15.786.421-36', '14/05/1989', '124 5416 5454 1544'),
(4, 'Sophia Braga Shimitz', '14.569.873-21', '27/04/2002', '124 5789 8563 2365'),
(5, 'Thiago Meirelles Dias', '55.923.520-18', '02/11/1998', '758 5452 2223 2654'),
(6, 'Tifany Medonca Alcantara', '78.965.874-12', '25/02/1999', '758 5452 2223 2653'),
(7, 'Suelen Lotto Menezes', '98.653.212-45', '12/12/2012', '124 5788 9562 3124'),
(8, 'Maria Eduarda Silveira Teles', '22.222.222-22', '16/08/1995', '789 6541 2365 4789'),
(9, 'Alana Victoria Batista', '77.777.777-77', '07/07/1997', '777 7777 7777 7777');

-- --------------------------------------------------------

--
-- Estrutura da tabela `registros`
--

CREATE TABLE `registros` (
  `codRegistro` int(11) NOT NULL,
  `rgPaciente` varchar(13) NOT NULL,
  `nomeAplicador` varchar(200) NOT NULL,
  `dataAplicacao` varchar(10) NOT NULL,
  `nomeVacina` varchar(200) NOT NULL,
  `lote` varchar(10) NOT NULL,
  `dose` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `registros`
--

INSERT INTO `registros` (`codRegistro`, `rgPaciente`, `nomeAplicador`, `dataAplicacao`, `nomeVacina`, `lote`, `dose`) VALUES
(1, '15.456.789-12', 'Rogerio Peixoto', '26/04/2010', 'Hepatite B', '65995478', '2 Dose'),
(2, '20.891.420-33', 'Rogerio Peixoto', '17/05/2012', 'BCG-ID', '85479125', 'Dose Unica'),
(3, '20.891.420-33', 'Pamela Goncalves', '08/12/2020', 'Hepatite B', '14692287', '3 Dose'),
(4, '20.891.420-33', 'Cibele Alcantara', '30/05/2021', 'Pentavalente', '852741', '3 Dose'),
(5, '20.891.420-33', 'Kimberly Novaes', '31/05/2021', 'Triplice', '852963', '2 Dose'),
(6, '15.786.421-36', 'Kimberly Novaes', '01/06/2021', 'Tetano', '666666', 'Reforco'),
(7, '77.777.777-77', 'Fatima Dias', '01/06/2021', 'coronavac', '222222', 'Dose Anual');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vacinas`
--

CREATE TABLE `vacinas` (
  `codVacina` int(11) NOT NULL,
  `nome` varchar(200) CHARACTER SET latin1 NOT NULL,
  `fabricante` varchar(200) CHARACTER SET latin1 NOT NULL,
  `tipo` varchar(45) CHARACTER SET latin1 NOT NULL,
  `ndoses` varchar(10) COLLATE utf8_bin NOT NULL,
  `eficacia` varchar(45) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `vacinas`
--

INSERT INTO `vacinas` (`codVacina`, `nome`, `fabricante`, `tipo`, `ndoses`, `eficacia`) VALUES
(1, 'BCG-ID', 'Laboratorio Reunidos', 'Viral', 'Dose Unica', '70%'),
(2, 'Hepatite B', 'Instituto Butantan', 'Viral', '3 Doses', '80%'),
(3, 'Pneumococo', 'Pfizer', 'Bacteriana', '3 Doses', '80%'),
(4, 'Tetano', 'Butantan', 'Bacteriana', 'Reforco', '90%'),
(5, 'Coronavac', 'Sinovac', 'Viral', '2 Doses', '61%');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`codFuncionario`);

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`codPaciente`);

--
-- Indexes for table `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`codRegistro`);

--
-- Indexes for table `vacinas`
--
ALTER TABLE `vacinas`
  ADD PRIMARY KEY (`codVacina`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `codFuncionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `paciente`
--
ALTER TABLE `paciente`
  MODIFY `codPaciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `registros`
--
ALTER TABLE `registros`
  MODIFY `codRegistro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `vacinas`
--
ALTER TABLE `vacinas`
  MODIFY `codVacina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
