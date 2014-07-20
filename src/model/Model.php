<?php


class Model {



    public function __construct()
    {
        $config['database'] = "mysql";
        $config['host'] = "127.0.0.1:3306";
        $config['user'] = "root";
        $config['password'] = "";
        $config['dbname'] = "code_education";


        try {

            $this->con = new PDO($config['database'].":host=".$config['host'].";dbname=".$config['dbname'],$config['user'],$config['password'])
            or die(print_r($this->con->errorInfo(), true));
        }
        catch (\PDOException $e) {
            die('Erro na conexao BD'.$e->getCode().":".$e->getMessage());
        }
    }

    public function gravar($nome, $email, $assunto, $mensagem) {
        $stmt = $this->con->prepare("INSERT INTO contato (nome,email,assunto,mensagem) VALUES (:nome,:email,:assunto,:mensagem)");

        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':assunto', $assunto, PDO::PARAM_STR);
        $stmt->bindParam(':mensagem', $mensagem, PDO::PARAM_STR);

        $stmt->execute() or die(print_r($stmt->errorInfo(), true));
        return "ok";
    }

    public function selectSearch($param_select)
    {
        $sql    = "select * from contato where assunto LIKE '%".$param_select."%' ";
        $stmt   = $this->con->prepare($sql);
        $stmt->execute();
        return $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function selectPage($tabela, $param)
    {
        $sql    = "select * from ".$tabela." where ".$param." ";
        $stmt   = $this->con->prepare($sql);
        $stmt->execute();
        return $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}