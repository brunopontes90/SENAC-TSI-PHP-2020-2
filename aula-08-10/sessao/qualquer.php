<?php

ini_set('display_errors', 1); //mostra os erros, em produção coloque 0
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'sessao.php'; // executa o arquivo 'sessao.php'

//retorna direto para o menu
include 'header_tpl.php';
include 'index_menu_tpl.php';
include 'conteudo_tpl.php';
include 'footer.php';

var_dump($_SESSION);

echo 'Você é o: ' . $_SESSION['nome'];