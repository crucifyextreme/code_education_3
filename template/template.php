<?php
    require_once('../src/pdo/conexao.php');
    require_once('../src/model/Model.php');
?>
<!DOCTYPE html>
<html class="full" lang="en">
<!-- The full page image background will only work if the html has the custom class set to it! Don't delete it! -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PHP Foundation - Code.Education</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS for the 'Full' Template -->
    <link href="/css/full.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Code.Education</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a href="/">Inicial</a>
                </li>
                <li><a href="/sobre">Sobre</a>
                </li>
                <li><a href="/cadastro">Cadastro</a>
                </li>
                <li><a href="/contato">Contato</a>
                </li>
                <li><a href="/pesquisa">Busca no Site</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>


    <!-- page here -->
<?php
$rotaAtual = rotaAtual();
rotas($rotaAtual);

        if( $rotaAtual == 'contato'):
            require_once('../views/contato.php');
        elseif($rotaAtual != ""):
            require_once('../views/'.$rotaAtual.'.php');
        endif;
?>



<!-- JavaScript -->
<script src="/js/jquery-1.10.2.js"></script>
<script src="/js/bootstrap.js"></script>

</body>

</html>