CREATE DATABASE welljobs
CREATE TABLE `usuarios` (
  `ID` int(10) UNSIGNED ZEROFILL NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `senha` varchar(40) DEFAULT NULL,
  `nome` varchar(110) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);
  ALTER TABLE `usuarios`
  MODIFY `ID` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
COMMIT;