<?php
define('DEBUG', true);

if(DEBUG == true){
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);
}
require_once('../src/Routes.php');

$rotaAtual = rotaAtual();
rotas($rotaAtual);

