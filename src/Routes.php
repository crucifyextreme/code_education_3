<?php
/*
 * Arquivo de Rotas do Sistema
 */

/* Pega a Rota Atual Visitada */
function rotaAtual() {
    $dados_url  = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    $rota = explode('/',$dados_url['path'],2);

    return $rota[1];
};

/* Verifica as Rotas do Sistema */
function rotas($rota) {

    $rotasValidas = array("sobre","cadastro","contato",'pesquisa');

    if( in_array( $rota, $rotasValidas) || $rota == ""):
        require_once('../template/template.php');
    else:
        require_once('../404.html');
    endif;
}