<?php

try {
    $conn = new \PDO("mysql:host=127.0.0.1:3306","root","");
}
catch (\PDOException $e) {
    die('Erro na conexao BD'.$e->getCode().":".$e->getMessage());
}




