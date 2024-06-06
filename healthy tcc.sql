-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Dez-2023 às 22:06
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthy`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigos`
--

CREATE TABLE `artigos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `texto` text NOT NULL,
  `area_artigo` varchar(20) NOT NULL,
  `profissional` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `artigos`
--

INSERT INTO `artigos` (`id`, `titulo`, `texto`, `area_artigo`, `profissional`) VALUES
(1, 'A cafeína é ruim para você?', '                    Em doses extremamente altas, a cafeína pode ser prejudicial à sua saúde. No entanto, este estimulante não\r\n                    merece a má reputação que costuma ter, especialmente quando consumido com moderação.\r\n                    Talvez surpreendentemente, a cafeína pode ser benéfica para a sua saúde: fornece impulsos de energia e \r\n                    pode ajudar a acelerar o seu metabolismo, permitindo que você queime mais calorias \r\n                    (especialmente antes de um treino). De fato, alguns estudos mostram que a cafeína pode ser benéfica para o fígado.', 'Nutrição', 'Wesley'),
(2, 'Carne vermelha faz mal?', '                     A carne vermelha é frequentemente associada a inúmeros riscos à saúde, desde câncer e ataque cardíaco até derrame.\r\n                    Comer carne vermelha em excesso é sempre desaprovado, mas pode fazer parte de uma dieta nutritiva quando consumido\r\n                    com moderação. Comer formas mais magras de carne vermelha com moderação permite que as pessoas colham seus benefícios. \r\n                    Por exemplo, a carne vermelha é embalada com proteínas, ferro e zinco.', 'Nutrição', 'Wesley'),
(3, 'Todas gorduras são ruins?', '                    Quando as pessoas pensam na palavra “gordura” associada à comida, sempre assumem que é algo negativo.\r\n                    Muitas vezes associam alimentos gordurosos à obesidade.\r\n                    Embora certamente existam tipos de gorduras “ruins”, como as gorduras trans encontradas em alimentos\r\n                    processados, também existem ácidos graxos ômega-3 e gorduras monoinsaturadas, que fornecem benefícios\r\n                    à saúde. Por exemplo, essas gorduras saudáveis ​​podem diminuir o risco de uma pessoa desenvolver doenças\r\n                    cardíacas ou diabetes.', 'Nutrição', 'Iran '),
(4, 'Motivos do mau humor', '                    Intolerância, raiva, falta de educação, nervosismo, negatividade e irritação. Essas são algumas das características \r\n                    típicas quando alguém está mal-humorado. Em certos momentos da vida, todos nós nos sentimos assim. Eventos temporários como acordar com \r\n                    barulhos da reforma de um vizinho, uma noite mal dormida ou passar horas no trânsito afetam o estado de ânimo de qualquer pessoa.', 'Psicologia', 'Ricardo'),
(5, 'Medo de acabar sozinho', '          Muitas pessoas acreditam que só é feliz quem está em uma relação. Logo, estar solteiro/a pode ser visto como\r\n          sinônimo de fracasso, o que não é verdade. Encontrar o parceiro ideal não é tão simples. Às vezes, nos apaixonamos e a outra pessoa\r\n          não sente o mesmo. Às vezes começamos uma relação e com o tempo notamos que as incompatibilidades são maiores que o amor. Outras vezes,\r\n          seguimos em um relacionamento infeliz durante anos por medo de ficar só.', 'Psicologia', 'Ricardo'),
(6, 'Dependência emocional', '                     A dependência emocional oculta uma necessidade de controle e segurança, manifestada por alguém que não confia \r\n                    em si mesmo. Quando o seu bem-estar, sua felicidade ou seu equilíbrio emocional depende de outras pessoas ou do que elas façam, \r\n                    é muito provável que você manifeste claros sinais de dependência emocional. Trata-se de uma condição problemática, que te impede \r\n                    de enfrentar as situações do dia a dia como deveria, seja por falta de autoconfiança ou por medo de ficar sozinho/a.', 'Psicologia', 'Fernanda');

-- --------------------------------------------------------

--
-- Estrutura da tabela `profissionais`
--

CREATE TABLE `profissionais` (
  `nome` varchar(45) NOT NULL,
  `area` varchar(20) NOT NULL,
  `ident_prof` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `foto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `profissionais`
--

INSERT INTO `profissionais` (`nome`, `area`, `ident_prof`, `email`, `senha`, `telefone`, `foto`) VALUES
('Kenui', 'NutriÃ§Ã£o', '7777', 'kenui.engler@gmail.com', '6789', '15991916208', ''),
('Kenui', 'NutriÃ§Ã£o', '77777', 'kenui.engler@gmail.com', '6789', '15991916208', ''),
('Iran', 'Nutricionista', 'CRN - 01', 'iran@gmail.com', '101112', '11 99123-4567', ''),
('Wesley ', 'Nutricionista', 'CRN - 02', 'wesley@gmail.com', '78910', '11 99153-8304', ''),
('Fernanda', 'Psicologia', 'CRP - 01', 'Fernanda@gmail.com', '1010', '11 99111-3344', ''),
('Ricardo ', 'Psicólogo', 'CRP - 02', 'Ricardo@gmail.com', '131415', '11 99345-6789', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostas_formulario`
--

CREATE TABLE `respostas_formulario` (
  `id` int(11) NOT NULL,
  `pergunta1` char(1) COLLATE utf8mb4_bin DEFAULT NULL,
  `pergunta2` char(1) COLLATE utf8mb4_bin DEFAULT NULL,
  `pergunta3` char(1) COLLATE utf8mb4_bin DEFAULT NULL,
  `pergunta4` char(1) COLLATE utf8mb4_bin DEFAULT NULL,
  `pergunta5` char(1) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `respostas_formulario`
--

INSERT INTO `respostas_formulario` (`id`, `pergunta1`, `pergunta2`, `pergunta3`, `pergunta4`, `pergunta5`) VALUES
(1, 'D', 'D', 'D', 'D', 'D'),
(2, 'D', 'D', 'D', 'D', 'D'),
(3, 'D', 'D', 'D', 'D', 'D'),
(4, 'C', 'B', 'B', 'C', 'A'),
(5, 'C', 'B', 'B', 'C', 'A'),
(6, 'C', 'C', 'C', 'D', 'C');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `adm` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `adm`) VALUES
(1, 'guilherme', 'guilherme@gmail.com', '12345', 0),
(2, 'Kenui', 'Kenui@gmail.com', '6789', 0),
(3, 'Rick', 'Rick123@gmail.com', '101112', 0),
(4, 'Guilherme', 'adm@gmail.com', '1234', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artigos`
--
ALTER TABLE `artigos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profissionais`
--
ALTER TABLE `profissionais`
  ADD PRIMARY KEY (`ident_prof`);

--
-- Indexes for table `respostas_formulario`
--
ALTER TABLE `respostas_formulario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artigos`
--
ALTER TABLE `artigos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `respostas_formulario`
--
ALTER TABLE `respostas_formulario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
