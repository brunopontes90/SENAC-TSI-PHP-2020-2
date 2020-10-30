<?php

ini_set('display_errors', 1); //mostra os erros, em produção coloque 0
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

require_once 'db.php';

/*

EXEMPLO DECOMO CRIAR SENHA 
TECNICA SALT
CRIA UMA CRIPTOGRAFIA
$pass = password_hash(123456,password_default);

*/


//armazenando login e senha no db
// OBS: CRIAR NO BANCO DEPOIS
// $credenciais = [0 => ['user' => 'bruno@senac.br', 'pass' => '123456'],
//                 1 => ['user' => 'luana@senac.br', 'pass' => '678910'],
//                 2 => ['user' => 'elza@senac.br', 'pass' => '1010101']];


// VERIFICAR SE EXISTE O USUARIO E PEGAR O HASH  DA SENHA

// COMPARA A SENHA PASSADA PELO USER  COM O HASH ARMAZENADO NO DB

if (isset($_SESSION['login'])) { //caso o login estiver logado no sistema

    //retorna direto para o menu
    include 'header_tpl.php';
    include 'index_menu_tpl.php';
    include 'footer.php';

}elseif (isset($_POST['entrar'])) { //caso o user tenha acabado de preencher o form de login
    
    // VERFICA SE AS CREDENCIAIS SÃO VALIDAS
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if (in_array(['user' => $login, 'pass' => $senha], $credenciais)) {

        //Cria vetor no SESSION para o login do user e verifica se existe esse login nas outras paginas
        $_SESSION['login'] = $login;

    //retorna direto para o menu
    include 'header_tpl.php';
    include 'index_menu_tpl.php';
    include 'footer.php';

    }else{
        $msg = 'Credenciais invalidas, tente novamente';
        include 'index_tpl.php';
    }
}else { //Caso o user tenha entrado pela 1° vez no site

    include 'index_tpl.php'; //se nao estiver entra no form

}