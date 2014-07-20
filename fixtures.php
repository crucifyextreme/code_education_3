<?php

 require_once('src/pdo/conexao.php');

$sql = "CREATE DATABASE IF NOT EXISTS `code_education` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;";
$stmt = $conn->prepare($sql);
if(!$stmt->execute()):
    die(var_dump($stmt->errorInfo()));
else:
    echo "Database criada com sucesso ! \n";
endif;



$conn->query('use code_education');




$sql = "CREATE TABLE IF NOT EXISTS `contato` (
  `id_contato` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `assunto` varchar(50) NOT NULL,
  `mensagem` text NOT NULL,
  PRIMARY KEY (`id_contato`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;";
$stmt = $conn->prepare($sql);
if(!$stmt->execute()):
    die(var_dump($stmt->errorInfo()));
else:
    echo "Tabela contato criada com sucesso ! \n";
endif;


$sql = "CREATE TABLE IF NOT EXISTS `paginas` (
  `id_paginas` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome_pagina` varchar(30) NOT NULL,
  `conteudo_pagina` text NOT NULL,
  PRIMARY KEY (`id_paginas`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;";
$stmt = $conn->prepare($sql);
if(!$stmt->execute()):
    die(var_dump($stmt->errorInfo()));
else:
    echo "Tabela paginas criada com sucesso ! \n";
endif;

$sql = "INSERT INTO `code_education`.`paginas` (`nome_pagina`, `conteudo_pagina`) VALUES ('sobre', 'conteudo da pagina sobre')";
$stmt = $conn->prepare($sql);
if(!$stmt->execute()):
    die(var_dump($stmt->errorInfo()));
else:
    echo "Conteudo pagina de conteudo criado com sucesso ! \n";
endif;

$sql = "INSERT INTO `code_education`.`paginas` (`nome_pagina`, `conteudo_pagina`) VALUES ('cadastro', 'este e o conteudo da pagina de cadastro');";
$stmt = $conn->prepare($sql);
if(!$stmt->execute()):
    die(var_dump($stmt->errorInfo()));
else:
    echo "Conteudo pagina de cadastro criado com sucesso ! \n";
endif;

