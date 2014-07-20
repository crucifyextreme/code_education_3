Projeto Fase 3 - Banco de Dados
=========

Instalação Fixtures
--------------

```sh
- Inicie o built-in-server
- Entre na pasta do projeto
- Dentro da pasta pdo/conexao.php altere a linha PDO("mysql:host=127.0.0.1:3306","root",""); de acordo sua base de dados.
- Carregue as fixtures no terminal com o comando php fixtures.php
- Aguarde a criação da base de dados e das tabelas.
```

##### Configurações para utilização

* Altere o arquivo Model.php de acordo a sua configuração dentro da pasta /src/model 

        $config['database'] = "mysql";
        $config['host'] = "127.0.0.1:3306";
        $config['user'] = "root";
        $config['password'] = "";
        $config['dbname'] = "code_education";
