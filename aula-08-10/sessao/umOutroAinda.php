<?php

require 'sessao.php'; // executa o arquivo 'sessao.php'

//retorna direto para o menu
include 'header_tpl.php';
include 'index_menu_tpl.php';
include 'conteudo_tpl.php';
include 'footer.php';

echo 'Mesmo em outro diretorio, da na mesma, veja: ' . $_SESSION['nome'];