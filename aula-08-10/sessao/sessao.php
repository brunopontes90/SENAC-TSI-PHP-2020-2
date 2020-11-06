<?php

session_start(); //precisa para validar o codigo abaixo

if (!isset($_SESSION['login'])) { //se nao estiver logado, retorna para 'index.php'

    header('Location: /SENAC-TSI-PHP-2020-2/usuario'); // usado '/' para voltar ao 'index.php', ou pode usar 'index.php' direto

}