<?php

ini_set('display_errors', 1); //mostra os erros, em produção coloque 0
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

//armazenando login e senha no db
$credenciais = [0 => ['user' => 'bruno@senac.br', 'pass' => '123456'],
                1 => ['user' => 'luana@senac.br', 'pass' => '678910'],
                2 => ['user' => 'elza@senac.br', 'pass' => '1010101']];


if (isset($_POST['entrar'])) { //verifica se é login e senha validos
    
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if (in_array(['user' => $login, 'pass' => $senha], $credenciais)) {
        echo 'Seja bem-vindo!';
    }else{
        $msg = 'Credenciais invalidas, tente novamente';
        include 'index_tpl.php';
    }

    echo "<a href='index.php'>Sair</a>";
}else {
    include 'index_tpl.php'; //se nao estiver entra no form
}